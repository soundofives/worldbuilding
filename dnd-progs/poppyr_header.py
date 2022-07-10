import numpy as np
import matplotlib.pyplot as plt
import pandas as pd
from scipy.optimize import curve_fit #used for curve fitting
import datetime as dt
import time
import copy
from IPython.display import clear_output
import sympy as sym
plt.style.use('ggplot')
#init_printing(use_unicode=True)

###################################################################################################
###################################################################################################
###################################################################################################

########################################################
########################################################
########################################################
#This function compiles many back-end functions to prepare
#the initial age and mortality distributions for the main simulation.

#Main input:
#ages
#mortality
#lifetime
#fertility_start
#fertility_end
#cohort_len
#TF_guess
#curve_degree
#verbose
#plot
#flat_fertility_pdf

#output:
#full_ages: an expanded age array with cohort length of 1 year
#full_mortality: an expanded mortality array, normalized to the cohort length of 1
#I: A steady-state population distribution (distribution for a growth rate of 0)
#d: An array of cohort deaths for each cohort from an initial population of 100,000
#e: An array of cohort life expectencies
#misc statistics, like new birth and estimated growth rate (not as accurate as full simulation)
#A full lifetable
########################################################
########################################################
########################################################
def pre_sim_process(ages,mortality,lifetime,fertility_start,fertility_end,TF_guess=3,curve_degree=12,cohort_len=1,flat_fertility_pdf=0,customfactor=1,verbose=0):

    #Constants:
    human_astar_life_ratio = 100/1000
    human_waith_life_ratio = 100/25000
    
    #mortality values need to be evaluated at normalized age spaces
    #I create a functional form of the mortality with get_curve and evaluate it at points:
    #np.linspace(0,int(max(ages)),len(ages)). The array isn't expanded at all yet.
    #if (ages[1]-ages[0]) != (ages[3]-ages[2]) != (ages[9]-ages[8]):
    if abs((ages[1]-ages[0]) - (ages[7]-ages[6])) > 1e-5 :
        abb_mortality = get_curve(ages,len(ages),mortality,deg=curve_degree)
    else:
        #if it's already got normalized ages, no need to change anything
        abb_mortality = mortality
    
    #We need a short version of the ages (with the original length but capturing all desired ages)
    ages_initial = np.arange(0,lifetime,int(lifetime/len(abb_mortality)))#np.linspace(0,max(ages),len(abb_mortality))


    #and a long version of the ages that goes between 0 and lifetime with a number of points
    #closest fitting to the division of the cohort length. For a cohort length of 1, there will be lifetime
    #number of points.
    #num_ages = np.linspace()#int((lifetime+cohort_len)/cohort_len)
    #ages_final = np.linspace(0,lifetime,num_ages)
    ages_final = np.arange(0,lifetime,cohort_len)

    #We use both of the age arrays to interpolate the mortality into an equivilant array with proper cohort lengths.
    mortality_final = full_expansion(ages_initial,ages_final,abb_mortality,deg=curve_degree,customfactor=customfactor,verbose=verbose)
   
    #We can now use the full mortality and ages to get a steady-state population distribution (growth rate 0)
    #This also gives us some deaths data and expected life times at different ages (e)
    [I,d,e] = get_population_distribution(mortality_final,ages_final)

    #Estimate some statistics, like birth rate, death rate, growth rate. Don't rely on these data for growth rate though.
    [pop,total_deaths,new_births,r] = estimate_statistics(I,mortality_final,ages_final,d,
                                                          fertility_start,fertility_end,
                                                          TF_guess=TF_guess,flat_fertility_pdf=flat_fertility_pdf);

    #Put together a life table with all the data we have.
    lifetable = pd.DataFrame(data=(ages_final,mortality_final,I,I/100000,e),index=('Age','Mortality','Cohort','Reach Probability','Life Expectancy'))
    
    #Print stuff out, show cool figures, and return it all!
    print("Estimated life expectancy after 1 year: ",e[1])
    print("Astar-to-Human equiv: ", e[1]*human_astar_life_ratio)
    print("Waith-to-Human equiv: ", e[1]*human_waith_life_ratio)
    
    # fig, axes = plt.subplots(2,figsize=[7,10])
    # axes[0].plot(mortality_final)
    # axes[0].set_title("Mortality")
    # axes[1].plot(I)
    # axes[1].set_title("Steady-State Population Distribution")
    #axes[2].plot(d)
    #axes[2].set_title("Deaths")

    fix,ax = plt.subplots(figsize=[7,5])
    ax.plot(ages_final,mortality_final,'r')
    ax.set_xlabel("Age (yr)")
    ax.set_ylabel("Mortality (%)",color='r')
    ax2 = ax.twinx()
    ax2.plot(ages_final,I/100000,'b')
    ax2.set_ylabel("Population (%)",color='b')

    return [ages_final,mortality_final,(I/sum(I)),d,e,[pop,total_deaths,new_births,r],lifetable];


#get_curve
#input:
#ages: non-space-normalized ages array
#new_ages_len: new number of age cohorts I want
#mortality: the mortality values
#deg: fit degree

#output:
#curve: mortality array storing the evaluations of the polynomial curvefit
def get_curve(ages,new_ages_len,mortality,deg=12):
    
    #fit a polynomial of degree 'deg' to the non-normalized-spacing ages and mortality.
    #With a functional version we can discretize it however we want later.
    z = np.polyfit(ages,mortality,deg)
    poly = np.poly1d(z)

    #create the new ages array with the same maximum as before, but with the new desired number of points.
    data = np.linspace(0,int(max(ages)),new_ages_len)
    #evaluate the polynomial I made earlier with the new, normalized ages!
    curve = poly(data)
     
    #make sure the mortality only goes to 100 percent
    curve = curve.clip(max=100)
    curve = curve.clip(min=0)
    
    return curve

#full_expansion
#Main idea: this function takes two age arrays. The max age is the same in both,
#but the number of points is not. Ages_final has age values spaced at the cohort length,
#while ages_initial is unprocessed and might have much fewer age values.
#This function gets a new mortality array to match the cohort-correct age array.
#If the initial age array had too few points, this function "separates" the mortality values
#for those large cohorts into proportional values for smaller cohorts.

#input:
#ages_initial: normalized age array with incorrect cohort size
#ages_final: normalized age array with correct cohort size
#mortality_initial: mortality array fit to the incorrect-cohort ages.

#output:
#final_mortality_interp: a scaled, functionalized mortality rate with number of points equal to ages_final
def full_expansion(ages_initial,ages_final,mortality_initial,deg=12,customfactor=1,verbose=0):
    #Initialize array to hold the reduced mortality values
    mortality_scaled_arr = []
    #A wide version of the reduced values. This 'plateaus' the reduced values over the ages
    #represented within the original cohorts
    mortality_wide = np.zeros(len(ages_final))

    #Let's some cohort measures
    init_cohort_len = ages_initial[1]-ages_initial[0]
    fin_cohort_len = ages_final[1]-ages_final[0]
    #This is the cohort ratio--for a desired cohort length > cohort length, mortality_final will be < mortality_initial
    #expansion_ratio = (init_cohort_len/fin_cohort_len) #np.ceil(max([cohort_length/desired_cohort_length,desired_cohort_length/cohort_length]))
    cohort_ratio = round(init_cohort_len/fin_cohort_len)

    #for each cohort in ages_initial,
    for cohort_to_scale in range(0,len(ages_initial)):
        #get the scaled mortality to fit the final cohort length
        ###########################################################
        mortality_to_scale = mortality_initial[cohort_to_scale]
        mortality_scaled = mortality_to_scale/cohort_ratio

        if verbose:
            print("Current cohort length: ",init_cohort_len)
            print("Desired cohort length: ",fin_cohort_len)
            print("Number of points to make: ",cohort_ratio)
            print("Current mortality to scale: ",mortality_to_scale)
            print("Final mortality: ",mortality_scaled)

        mortality_scaled_arr.append(mortality_scaled)
        cur_cohort_start = int(cohort_to_scale*cohort_ratio)
        mortality_wide[cur_cohort_start:int(cur_cohort_start+cohort_ratio)] = np.zeros(int(np.round(cohort_ratio)))+mortality_scaled

    #Now we have an array of mortalities properly scaled to their cohort length.
    #To finish off, we need to expand these scaled mortality rates into an array
    #of proper length:
    mortality_scaled_polyfit = np.interp(ages_final,ages_initial,mortality_scaled_arr)
    #and fit a functional curve to smooth out any errors! Without this line, wacky overflows happen.
    mortality_scaled_polyfit = get_curve(ages_final,int(len(ages_final)),mortality_scaled_polyfit,deg=deg)

    if cohort_ratio > 1:
        mortality_binsmooth = smooth_bin_interp(mortality_wide,ages_initial,ages_final,cohort_ratio,customfactor)
    else:
        mortality_binsmooth = mortality_initial

    if verbose:
        rel_cohort_mortality_bin = []
        rel_cohort_mortality_polyfit = []
        for cohort in range(len(ages_initial)):
            cur_cohort_start = int(cohort*cohort_ratio)
            rel_cohort_mortality_bin.append(sum(mortality_binsmooth[cur_cohort_start:int(cur_cohort_start+cohort_ratio)]))
            rel_cohort_mortality_polyfit.append(sum(mortality_scaled_polyfit[cur_cohort_start:int(cur_cohort_start+cohort_ratio)]))
            #print(rel_cohort_mortality_bin)
            #print(rel_cohort_mortality_polyfit)
        plt.figure()
        plt.plot(mortality_initial)
        plt.plot(rel_cohort_mortality_bin)
        plt.plot(rel_cohort_mortality_polyfit)

    #return mortality_scaled_polyfit
    return mortality_binsmooth

#Algorithms outlined in Rymes and Myers paper in encyclopedia resources folder
def smooth_bin_interp(mortality_initial,ages_initial,ages_final,cohort_ratio,customfactor=1):
    #Set up the array to store the final smoothed mortality values
    mortality_final = np.zeros(len(ages_final))
    #and an array to act as an interative version of the final array
    mortality_step = copy.deepcopy(mortality_initial)
    #and the averaging period of the initial data.
    #This represents how many new points each OG data point represents
    average_period = int(round(cohort_ratio))

    #Get our cohort measurements once again
    initial_cohort_len = int(ages_initial[1]-ages_initial[0])

    #Set up some initial boundary conditions
    mortality_final[0] = mortality_initial[0]
    mortality_final[-1] = mortality_initial[-1]
    prewall = mortality_final[0]+(mortality_final[0]/2)
    postwall = mortality_final[-1]+(mortality_final[-1]/2)
    for j in range(0,int(5*customfactor*(max(ages_final/100)))):
        #for every sub-interval i:
        for i in range(0,len(ages_final)-1):
            #if we are on the first inverval, I need to have a special boundary avg
            if i == 0:
                mortality_final[i] = sum([prewall,sum(mortality_step[0:i+2])])/3
            elif i == len(ages_final)-1:
                mortality_final[i] = sum([postwall,sum(mortality_step[i-1:i+1])])/3
            #Otherwise, we can use the algorithm as normal
            else:
                mortality_final[i] = sum(mortality_step[i-1:i+2])/3

            mortality_step[i] = mortality_final[i]

            #Apply a correction after each averaging period
            if i%average_period == 0:
                correction = sum(mortality_initial[int(i-average_period):i]-mortality_final[int(i-average_period):i])/(len(ages_final)-1)
                mortality_final[int(i-average_period):i] = mortality_final[int(i-average_period):i]-correction

    return mortality_final

#get_population_distribution
#This function gets the *steady-state* population distribution from a given mortality-age relationship
def get_population_distribution(mortality,ages):
    #Get the mortality rates in decimal percent
    q = np.array(mortality)/100
    #get the cohort length
    cohort_length = ages[1] - ages[0]

    I = np.zeros(len(q)) #number of people surviving to age x
    d = np.zeros(len(q)) #number of deaths between ages x and x+1
    L = np.zeros(len(q)) #number of person-years lived by the cohort from age x to x+1
    T = np.zeros(len(q)) #total number of person-years lived by the cohort from age x 
                            #until all members of the cohort have died.
    e = np.zeros(len(q)) #the (remaining) life expectancy of persons alive at age x
    
    I[0] = 100000 #num of simultaneous births
    for i in range(0,len(q)-1):
        d[i] = q[i]*I[i] #number of deaths at index i, corresponding to ages[i] years of age
        I[i+1] = I[i]-d[i] #get number surviving until ages[i+1]
        
        L[i] = (I[i+1] + 0.5*d[i])*cohort_length #get the number of person years lived by the cohort

    for i in range(0,len(q)-1):
        T[i] = sum(L[i:len(L)])
        e[i] = (T[i]/I[i])
        
    return [I,d,e]

def estimate_statistics(I,q,ages,d,fertility_start,fertility_end,TF_guess=3,flat_fertility_pdf=0):

    I = (I/sum(I))*100000
    #Get the correct death count for our full distribution
    d = np.dot(I,np.array(q)/100)
    #First, get our cohort length.
    cohort_len = ages[1] - ages[0]

    #Calculate birth rate
    f_years = fertility_end-fertility_start #fertile years per lifetime
    #Get the indices for each of these events in the age array. This might not have
    #a perfect line up, so this is approximate.
    fertility_start_index = int(np.round(fertility_start/cohort_len))
    fertility_end_index = int(np.round(fertility_end/cohort_len))
    
    TF = TF_guess #births per fertile woman per lifetime, average.
    if flat_fertility_pdf:
        w = (sum(I[fertility_start_index:fertility_end_index])/2) #number of women in fertile years
        
        fertile_cohorts = f_years#/cohort_length #number of fertile years / years in cohort = number of fertile cohorts
        g = TF/fertile_cohorts #births per fertile woman over all fertile years / number of fertile cohorts in a lifetime 
                                                                            # = births per fertile woman
        new_births = g*w #births per fertile woman * number of women in fertile years = births
    else:
        #goal is to get new_births from a skewed gaussian, no longer assuming constant FR for each cohort
        new_births = get_new_births_with_gaussian_pdf(TF,fertility_start,fertility_end,cohort_len,I,fertility_start_index,fertility_end_index)

    birth_rate = (new_births)/sum(I) #births per total population
    
    pop = sum(I) #total population
    r = (new_births-d)/pop #birth-deaths / population total

    print("Total population: ",pop)
    print("Birth rate: ",new_births/pop)
    print("Death rate: ",d/pop)
    print("Growth rate in percent: ",(r)*100)
    return [pop,d,new_births,r]

def fertility_skewed_gauss_pdf(start,end,cohort):
    num_fertile_cohorts = int((end-start)/cohort)
    xarray = np.linspace(start,end,num_fertile_cohorts)

    spreadfactor = 2
    average_age = (start+end)/2
    spread = (1/spreadfactor)*(average_age-start)

    a = (1/(spread*np.sqrt(2*np.pi)))
    pdf = gauss(xarray,a,average_age,spread)
    skewness = -(0.5*spreadfactor)*spread/(average_age)

    #get the three pdfs needed for the full skewed gaussian
    pdf_sk = gauss(xarray*skewness,a,average_age,spread)
    pdf_zero = gauss(0,a,average_age,spread)
    pdf_skewed = pdf*pdf_sk/pdf_zero

    #and normalize it to get the raw pdf
    pdf_skewed_norm = pdf_skewed/sum(pdf_skewed)
    return pdf_skewed_norm

def get_new_births_with_gaussian_pdf(TF,fertility_start,fertility_end,cohort_length,pop_d,fertility_start_index,fertility_end_index):
    #Get the fertility distribution
    TF_pdf = TF*fertility_skewed_gauss_pdf(fertility_start,fertility_end,cohort_length)
    #Get number of fertile women in an array arranged by cohort
    fertile_women = pop_d[fertility_start_index:fertility_end_index]/2
    new_births_per_cohort = []
    for cohort in range(0,len(TF_pdf)):
        new_births_per_cohort.append(TF_pdf[cohort]*fertile_women[cohort])
    new_births = sum(new_births_per_cohort)
    return new_births

###################################################################################################
###################################################################################################
###################################################################################################

def get_mortality_from_lifetable(ages,lifetable,plot=1):
    mortality = np.zeros(len(lifetable))
    for cohort in range(0,len(lifetable)-1):
        mortality[cohort] = 1-lifetable[cohort+1]/lifetable[cohort]
    mortality[-1] = 1

    if plot:
        fix,ax = plt.subplots(figsize=[7,5])
        ax.plot(ages,mortality,'r')
        ax.set_xlabel("Age (yr)")
        ax.set_ylabel("Mortality",color='r')
        ax2 = ax.twinx()
        ax2.plot(ages,lifetable/sum(lifetable),'b')
        ax2.set_ylabel("Population (%)",color='b')

    return mortality

########################################################################
########################################################################
########################################################################
#Now we need to run a simulation on this initial population distribution
########################################################################
########################################################################
########################################################################
########################################################
########################################################
########################################################
#This simulation has two main functions:

#Non-Predict:
    #Main input:
        #Total fertility
    #output:
        #population distribution at assigned fertility rate
        #growth rate at assigned fertility rate
        #average age of the population at assigned fertility rate

#Prediction:
    #Main input:
        #a desired growth rate
    #output:
        #population distribution at that growth rate
        #average age of that distribution
        #total fertility to achieve that growth rate
########################################################
########################################################
########################################################

########################################################
#Parameters to change
########################################################
# main_sim(ages,mortality_rates,fertility_start,fertility_end,population_distribution,
#             predict=0,guess_TF=3,set_growth_rate=(0.1/100),set_TF=3,sim_len=None,print_flag=0):

#Explanation of each:
# ages - an array of age values, linearly increasing, with a standard difference
#         (the difference between all array values needs to be the same)
# mortality_rates - an array of mortality rates, in DECIMAL PERCENT (values 0 - 100, not 0.00 - 1.00).
#         Length should match that of ages.
# fertility_start - integer start of fertile years
# fertility_end - integer end of fertile years
# population distribution - an array of values with equal length to that of the ages array. These values
#         represent the initial spread of the population; ie how many people of age 0 there are, of age 1, 50, etc.
# predict - Do you want to use the simulation's prediction ability? This functionality uses the following arguments
#         (the guess_TF and set_growth_rate) to find a total fertility (TF) that leads to the set_growth_rate.
# guess_TF - an estimate of the necessary total fertility to get the desired growth rate (set_growth_rate).
#         The simulation needs to start off with an estimate, and it will switch to its prediction mode
#         about a quarter of teh way through the simulation, once the convergence has started.
# set_TF - This is used if predict=0. If you want to set the total fertility
#         (the avg number of children per woman per fertile lifetime) and see what growth rate it gives, do this.
# sim_len - The number of years to simulate. Leave blank if you want to get a base convergence, which runs for
#         2000 iterations. Otherwise, this just needs to be at least the cohort length (difference between the ages in
#                                                                                      the age array)
# print_flag - Do you want verbose printing and figures? 1 if so, 0 if not.
def main_sim(ages,mortality,pop_d,fertility_start,fertility_end
             ,predict_TF=0,guess_TF=3,set_growth_rate=(0.1/100),set_TF=3,
             flat_fertility_pdf=0,sim_len=None,
             print_flag=0,final_report=1,savefile=None):
    ####################################################################
    #Set up initial variables
    ####################################################################
    if predict_TF:
        set_TF = guess_TF

    #Derivative variables
    q = (mortality/100)
    cohort_length = ages[1]-ages[0]
    
    #Derivative variables
    fertility_start_index = int(np.round(fertility_start/cohort_length))
    fertility_end_index = int(np.round(fertility_end/cohort_length))
    f_years = fertility_end-fertility_start

    
    plt.figure()
    plt.plot(ages,mortality,'r')
    plt.title("Mortality Rate Choice")
    plt.xlabel("Years")
    plt.ylabel("Mortality (%)")

    plt.figure()
    plt.plot(ages,pop_d,'b')
    plt.title("Initial population distribution" )
    plt.xlabel("Years")
    plt.ylabel("Population")
 
    ####################################################################
    #Determine simulation length. Default to converge is 2000 cohort lengths, 2000 iterations.
    ####################################################################
    if sim_len == None:
        sim_len = int(2000*cohort_length)
    elif sim_len < cohort_length:
        print("Error: simulation length must be at least equal to cohort length, age[1] - age[0]. Exiting.")
        return -1
    
    ####################################################################
    #Run the loop!
    ####################################################################
    for year in range(0,sim_len,int(cohort_length)):
        #print("Year simulated: ",year)
        population_at_year_start = sum(pop_d)

        #First we'll determine deaths
        #this loop doesn't need to calculate deaths at the max age; they all die. We can thus initialize the yearly deaths to the pop at the max age
        total_deaths = pop_d[-1]

        for age_index in range(len(ages)-2,-1,-1):
            age = age_index

            deaths_at_age = pop_d[age]*q[age] #population at certain age cohort * percentile mortality rate at that age cohort
                                            # = population at that age cohort that die
            pop_d[age+1] = pop_d[age] - deaths_at_age #the number that live to the next age cohort, age+1, =
                                                        #population at that age cohort - population that dies over that cohort
            total_deaths = total_deaths + deaths_at_age

        #If we want to set a growth rate, we'll need to work through the method backwards to get a predicted total fertility value.
        #This has to be done after the deaths are calculated; so for now we'll just have the non-predicted TF segment
        if predict_TF == 0 or (predict_TF == 1 and (year/int(cohort_length)) < (sim_len/int(cohort_length))/4):

            #births per woman per fertile lifetime
            TF = set_TF #sum of age specific fertility rates weighted by number of years in that group
            if flat_fertility_pdf:
                #The first thing we'll do is determine births
                w = (sum(pop_d[fertility_start_index:fertility_end_index])/2) #number of women in fertile years    
                g = (TF/f_years)*cohort_length #births per woman per lifetime / years per lifetime =
                                                        #births per woman per year * years/cohort = births per woman per cohort
                new_births = g*w #births per woman per cohort * total fertile women = births of all fertile women per cohort    
            else:
                new_births = get_new_births_with_gaussian_pdf(TF,fertility_start,fertility_end,cohort_length,pop_d,fertility_start_index,fertility_end_index)

        #The predictive function only works if the deaths have already been calculated for the year
        if predict_TF == 1 and (year/int(cohort_length)) > (sim_len/int(cohort_length))/4:
            desired_pop_end = population_at_year_start+(population_at_year_start*set_growth_rate)
            predicted_new_births = desired_pop_end-sum(pop_d[1:]) #get the difference between desired and current population

            w = (sum(pop_d[fertility_start_index:fertility_end_index])/2) #number of women in fertile years
            pred_g = predicted_new_births/w
            TF = (pred_g/(cohort_length))*f_years

            if flat_fertility_pdf == 0:
                new_births = get_new_births_with_gaussian_pdf(TF,fertility_start,fertility_end,cohort_length,pop_d,fertility_start_index,fertility_end_index)
                #print(predicted_new_births,new_births)
                while abs(new_births-predicted_new_births) > (0.001*predicted_new_births):
                    if new_births < predicted_new_births:
                        TF = TF + (1 - predicted_new_births/new_births)
                        #print("Too low! New: ", TF)
                        new_births = get_new_births_with_gaussian_pdf(TF,fertility_start,fertility_end,cohort_length,pop_d,fertility_start_index,fertility_end_index)
                    else:
                        TF = TF - (1 - predicted_new_births/new_births)
                        #print("Too high! New: ",TF)
                        new_births = get_new_births_with_gaussian_pdf(TF,fertility_start,fertility_end,cohort_length,pop_d,fertility_start_index,fertility_end_index)
            else:
                #main piece
                g = (TF/f_years)*cohort_length #births per woman per lifetime / years per lifetime = births per woman per year * years/cohort = births per woman per cohort
                new_births = g*w #births per woman per year * total fertile women = births of all fertile women per year

        #Now that deaths are propogated and the population distribution is updated, we can add the new births
        pop_d[0] = new_births

        population_at_year_end = sum(pop_d)

        #let's calculate the growth rate and print it out
        growth_rate = (population_at_year_end - population_at_year_start)/population_at_year_start

        if print_flag == 1 and ( (year/int(cohort_length)) % int(((sim_len/int(cohort_length))/10)) ) == 0:
            plt.figure()
            plt.title("Year: "+str(year))
            plt.plot(ages,pop_d)

            if predict_TF:
                print("TF value: \t",TF)
            print("New births: \t",new_births)
            print("Total deaths: \t",total_deaths)
            print("Growth rate at year ",year," = ",growth_rate*100)
            print("\n")
            
    ##FINAL REPORT
    birth_rate = new_births/sum(pop_d)
    death_rate = total_deaths/sum(pop_d)
    
    percent = 0
    half_pop_below = 0
    while percent < 0.5:
        percent = percent + (pop_d/sum(pop_d))[half_pop_below]
        half_pop_below = half_pop_below+1
    
    
    human_astar_life_ratio = 100/1000
    human_waith_life_ratio = 100/25000
    
    final_pop_d = pop_d/sum(pop_d)
    
    if final_report:
        print("Final growth rate: ",np.round(growth_rate*100,3),"%")
        print("Final birth rate: ",birth_rate)
        print("Final death rate: ",death_rate)
        print("Final population: ",sum(pop_d))
        print("Half population below: ",half_pop_below, " years")

        plt.figure()
        plt.title("Final Population Distribution")
        plt.plot(ages,pop_d,'b')
        plt.xlabel("Years")
        plt.ylabel("Population")

        # plt.figure()
        # plt.title("Final Population Distribution, Normalized")
        # plt.plot(ages,pop_d/sum(pop_d))

        print("Half pop below (astar): ",half_pop_below*human_astar_life_ratio)
        print("Half pop below (waith): ",half_pop_below*human_waith_life_ratio)

    if predict_TF:
        print("TF final value: ",TF)
    
    if savefile != None:
        np.save(savefile+str(dt.datetime.now()).strip().replace(' ','').replace(':','.')
                ,[final_pop_d,iterator,TF,growth_rate,birth_rate,death_rate],allow_pickle=1)
    
    return [final_pop_d,pop_d,half_pop_below,TF,growth_rate,birth_rate,death_rate]




###################################################################################################
###################################################################################################
###################################################################################################

gauss = lambda x,a,b,c: a*np.exp( -(x - b)**2 / (2*c**2) )

def preprocess_casualties(pop_total,lifetime,total_casualties,average_age,spread):    
    xarray = np.linspace(0,lifetime-1,lifetime)
    average_age = average_age #average age
    spread = (1/2)*spread #most casualties are between 22 and 38
    a = total_casualties/(spread*np.sqrt(2*np.pi)) #area = number of deaths total
    death_distribution = gauss(xarray,a,average_age,spread)
    death_dist_norm = death_distribution/pop_total
    return death_dist_norm

def war_recovery(pop_mainsim,pop_presim,init_pop,lifetime,total_war_casualties,average_warrior_age,warrior_age_spread,recovery_time,fertility_start,fertility_end,birth_rate_mod,final_report=0):
    pop_war_death_dist = preprocess_casualties(np.sum(pop_mainsim[0]*init_pop),lifetime=lifetime,
                                               total_casualties=total_war_casualties,
                                               average_age=average_warrior_age,
                                               spread=warrior_age_spread)

    initial_warrior_pop = np.sum((pop_mainsim[0]*init_pop)[ int(average_warrior_age-warrior_age_spread) : int(average_warrior_age+warrior_age_spread) ])

    ages = pop_presim[0]
    mortality = pop_presim[1]
    pop_d = (pop_mainsim[0]*init_pop)-(pop_war_death_dist*init_pop)
    fertility_start = fertility_start
    fertility_end = fertility_end
    predict_TF = 0
    guess_TF = 3
    set_growth_rate = (0.1/100)
    set_TF = pop_mainsim[3]+birth_rate_mod
    flat_fertility_pdf = 0
    sim_len = recovery_time
    print_flag = 0
    final_report = final_report
    savefile = None

    [final_pop_d,pop_d,iterator,TF,growth_rate,birth_rate,death_rate]=main_sim(ages,mortality,pop_d,fertility_start,fertility_end,
                                  predict_TF,guess_TF,set_growth_rate,set_TF,flat_fertility_pdf,
                                  sim_len,print_flag,final_report,savefile)
    
    final_warrior_pop = np.sum(pop_d[int(average_warrior_age-warrior_age_spread) : int(average_warrior_age+warrior_age_spread) ])
    percentage_recovered = 100*(total_war_casualties-(initial_warrior_pop-final_warrior_pop))/total_war_casualties
    
    plt.figure()
    plt.plot(ages,pop_d,'b')
    plt.xlabel("Ages (yrs)")
    plt.ylabel("Population")

    if final_report:
        print("Initial warrior pop vs final: ",initial_warrior_pop,final_warrior_pop)
        print("Percentage recovered: ",  percentage_recovered)
        
    return percentage_recovered


def get_tf_vs_r(ages,mortality,pop_d,fertility_start,fertility_end,
                                      flat_fertility_pdf,
                                      sim_len,final_report,special_step=None,savefile=None):

    pop_d_reset = copy.deepcopy(pop_d)
    if hasattr(special_step, "__len__"):
        set_TF = special_step
    else:
        set_TF = np.arange(0.1,15,0.1)
    
    r_array = []
    for i in range(0,len(set_TF)):
        pop_d = copy.deepcopy(pop_d_reset)
        mainsim = main_sim(ages,mortality,pop_d,fertility_start,fertility_end,
                                  0,3,0.1/100,set_TF[i],flat_fertility_pdf,
                                  sim_len,0,final_report,None)
        r_array.append(mainsim[4])
        clear_output()
        plt.close("all")
    fit = np.polyfit(np.log(set_TF),r_array,1)
    curve = np.poly1d(fit)

    #Now that we have our log curve fit, we can compare it against standard e28 for human and astar pops
    stnd_e28_curve_human = np.load('tfvsr_stnde28_human_2021-04-2012.52.00.718468.npy',allow_pickle=1)
    stnd_e28_curve_human = np.poly1d(stnd_e28_curve_human)
    stnd_e28_curve_astar = np.load('tfvsr_stnde28_astar_2021-04-2012.59.20.312980.npy',allow_pickle=1)
    stnd_e28_curve_astar = np.poly1d(stnd_e28_curve_astar)

    stnd_setTF = np.arange(0.1,15,0.1)

    fig,ax = plt.subplots()
    ax.plot(stnd_setTF,stnd_e28_curve_human(np.log(stnd_setTF)),label='Standard e28 Human')
    ax.plot(stnd_setTF,stnd_e28_curve_astar(np.log(stnd_setTF)),label='Standard e28 Astar')
    ax.plot(set_TF,curve(np.log(set_TF)),label='Current entry')

    ax.axhline(1/100,color='g',ls='--')
    ax.axhline(0.1/100,color='g',ls='--')
    ax.axhline(0.01/100,color='g',ls='--')
    #look at growth rates of -0.1 to 1.5%
    plt.ylim([-0.1/100,1.5/100])
    #and childbirth between 3 and 10 children
    plt.xlim([2,10])
    plt.xlabel("log(total fertility)")
    plt.ylabel("Growth Rate (decimal)")
    ax.set_xscale('log')
    ax.get_xaxis().get_major_formatter().labelOnlyBase = False
    plt.legend(loc='best')
    plt.grid(which='both')

    if savefile != None:
        np.save(savefile+str(dt.datetime.now()).strip().replace(' ','').replace(':','.')
                ,curve,allow_pickle=1)

    return curve