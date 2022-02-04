import numpy as np
import matplotlib.pyplot as plt
import pandas as pd
from scipy.optimize import curve_fit #used for curve fitting
import datetime as dt
import time
#from sympy import init_printing
import sympy as sym
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
def pre_sim_process(ages,mortality,lifetime,fertility_start,fertility_end,TF_guess=3,curve_degree=12,cohort_len=1,flat_fertility_pdf=0,verbose=0,):

    #Constants:
    human_astar_life_ratio = 100/1000
    human_waith_life_ratio = 100/25000
    
    #mortality values need to be evaluated at normalized age spaces
    #I create a functional form of the mortality with get_curve and evaluate it at points:
    #np.linspace(0,int(max(ages)),len(ages)). The array isn't expanded at all yet.
    #if (ages[1]-ages[0]) != (ages[3]-ages[2]) != (ages[9]-ages[8]):
    if abs((ages[1]-ages[0]) - (ages[9]-ages[8])) > 1e-5 :
        abb_mortality = get_curve(ages,len(ages),mortality,deg=curve_degree)
    else:
        #if it's already got normalized ages, no need to change anything
        abb_mortality = mortality
    
    #We need a short version of the ages (with the original length but capturing all desired ages)
    ages_initial = np.linspace(0,max(ages),len(abb_mortality))

    #and a long version of the ages that goes between 0 and lifetime with a number of points
    #closest fitting to the division of the cohort length. For a cohort length of 1, there will be lifetime
    #number of points.
    num_ages = int((lifetime+cohort_len)/cohort_len)
    ages_final = np.linspace(0,lifetime,num_ages)

    #We use both of the age arrays to interpolate the mortality into an equivilant array with proper cohort lengths.
    full_mortality = full_expansion(ages_initial,ages_final,abb_mortality,deg=curve_degree,verbose=verbose)
   
    #We can now use the full mortality and ages to get a steady-state population distribution (growth rate 0)
    #This also gives us some deaths data and expected life times at different ages (e)
    [I,d,e] = get_population_distribution(full_mortality,ages_final)

    #Estimate some statistics, like birth rate, death rate, growth rate. Don't rely on these data for growth rate though.
    [pop,total_deaths,new_births,r] = estimate_statistics(I,full_mortality,ages_final,d,
                                                          fertility_start,fertility_end,
                                                          TF_guess=TF_guess,flat_fertility_pdf=flat_fertility_pdf);

    #Put together a life table with all the data we have.
    lifetable = pd.DataFrame(data=(ages_final,full_mortality,I,e),index=('Age','Mortality','Cohort','Life Expectancy'))
    
    #Print stuff out, show cool figures, and return it all!
    print("Estimated life expectancy after 1 year: ",e[1])
    print("Astar-to-Human equiv: ", e[1]*human_astar_life_ratio)
    print("Waith-to-Human equiv: ", e[1]*human_waith_life_ratio)
    
    fig, axes = plt.subplots(2,figsize=[7,10])
    axes[0].plot(full_mortality)
    axes[0].set_title("Mortality")
    axes[1].plot(I)
    axes[1].set_title("Steady-State Population Distribution")
    #axes[2].plot(d)
    #axes[2].set_title("Deaths")

    return [ages_final,full_mortality,I,d,e,[pop,total_deaths,new_births,r],lifetable];


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
def full_expansion(ages_initial,ages_final,mortality_initial,deg=12,verbose=0):
    #Initialize array to hold
    mortality_final = []
    mortality_final_temp = np.zeros(len(ages_final))
    cohort_length = ages_initial[1]-ages_initial[0]
    #for each cohort in ages_initial,
    for cohort_to_expand in range(0,len(ages_initial)):
        #get the scaled mortality to fit the final cohort length
        mortality_final_for_cohort = scale_mortality(ages_initial,ages_final,mortality_initial,cohort_to_expand,verbose)
        mortality_final.append(mortality_final_for_cohort[0])
        mortality_final_temp[int(cohort_to_expand*cohort_length):int((cohort_to_expand*cohort_length)+cohort_length)] = mortality_final_for_cohort[1]

    #Now we have an array of mortalities properly scaled to their cohort length.
    #To finish off, we need to expand these scaled mortality rates into an array
    #of proper length:
    final_mortality_interp = np.interp(ages_final,ages_initial,mortality_final)
    #and fit a functional curve to smooth out any errors! Without this line, wacky overflows happen.
    final_mortality_interp = get_curve(ages_final,int(len(ages_final)),final_mortality_interp,deg=deg)

    smooth_bin_interp(mortality_final_temp,ages_initial,ages_final)

    return final_mortality_interp

#scale_mortality
#this function takes a single cohort from the initial age array,
#finds out how many cohorts I want to split it into (or merge it into),
#and scales the initial mortality values to fit the new cohort length.
def scale_mortality(ages_initial,ages_final,mortality_initial,cohort_to_expand,verbose=0):
    #find the initial cohort length:
    cohort_length = ages_initial[1]-ages_initial[0]
    #and the final cohort length:
    desired_cohort_length = ages_final[1]-ages_final[0]

    if verbose:
        print("Current cohort length: ",cohort_length)
        print("Desired cohort length: ",desired_cohort_length)
    
    #and next I need to find the number of points each initial cohort will represent in the end.
    #This is the expansion ratio--for a desired cohort length > cohort length, mortality_final will be < mortality_initial
    expansion_ratio = (cohort_length/desired_cohort_length) #np.ceil(max([cohort_length/desired_cohort_length,desired_cohort_length/cohort_length])) #get the number of elements to expand into
    if verbose:
        print("Number of points to interpolate: ",expansion_ratio)
    
    mortality_to_expand = mortality_initial[cohort_to_expand]
    if verbose:
        print("Current mortality to expand: ",mortality_to_expand)
    
    mortality_final = mortality_to_expand/expansion_ratio

    if verbose:
        print("Final mortality: ",mortality_final)

    # expansion_flat = np.zeros(int(round(expansion_ratio)))+mortality_final
    # expansion_area_base = 
    mortality_expanded = np.zeros(int(np.round(expansion_ratio)))+mortality_final
    return mortality_final,mortality_expanded

def smooth_bin_interp(mortality_initial,ages_initial,ages_final):

    # center = np.zeros(len(ages_initial))+(1/3)
    # off_center = np.zeros(len(ages_initial)-1)+(1/3)
    # A = tridiag(off_center,center,off_center)
    mortality_final = np.zeros(len(ages_final))
    mortality_step = mortality_initial
    correction = np.zeros()
    for i in range(1,len(ages_final)-1):
        correction = (mortality_initial[i]-mortality_final[i])/(len(ages_final)-1)
        mortality_final[i] = sum(mortality_step[i-1:i+2])/3
        mortality_step[i] = mortality_final[i]
        if i%98 == 0:
            plt.figure()
            plt.plot(mortality_step)

    return mortality_step

def tridiag(below, center, above, k1=-1, k2=0, k3=1):
    return np.diag(below, k1) + np.diag(center, k2) + np.diag(above, k3)
# def check_expansion_area(mortality,ages_final,cohort_start,cohort_length):
#     cohort_end = (cohort_start + cohort_length)
#     np.trapz(motality[cohort_start:cohort_end],ages_final)

#get_population_distribution
#This function gets the *steady-state* population distribution from a given mortality-age relationship
def get_population_distribution(mortality,ages):
    #Get the mortality rates in decimal percent
    q = np.array(mortality)/100
    #get the cohort length
    cohort_length = ages[1] - ages[0]

    I = np.ndarray(len(q)) #number of people surviving to age x
    d = np.ndarray(len(q)) #number of deaths between ages x and x+1
    L = np.ndarray(len(q)) #number of person-years lived by the cohort from age x to x+1
    T = np.ndarray(len(q)) #total number of person-years lived by the cohort from age x 
                            #until all members of the cohort have died.
    e = np.ndarray(len(q)) #the (remaining) life expectancy of persons alive at age x
    
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

    #Get the correct death count for our full distribution
    d = np.dot(I,np.array(q)/100)

    #First, get our cohort length.
    cohort_length = ages[1] - ages[0]

    #Calculate birth rate
    f_years = fertility_end-fertility_start #fertile years per lifetime
    #Get the indices for each of these events in the age array. This might not have
    #a perfect line up, so this is approximate.
    fertility_start_index = int(np.round(fertility_start/cohort_length))
    fertility_end_index = int(np.round(fertility_end/cohort_length))
    
    TF = TF_guess #births per fertile woman per lifetime, average.
    if flat_fertility_pdf:
        w = (sum(I[fertility_start_index:fertility_end_index])/2) #number of women in fertile years
        
        fertile_cohorts = f_years#/cohort_length #number of fertile years / years in cohort = number of fertile cohorts
        g = TF/fertile_cohorts #births per fertile woman over all fertile years / number of fertile cohorts in a lifetime 
                                                                            # = births per fertile woman
        new_births = g*w #births per fertile woman * number of women in fertile years = births
    else:
        #goal is to get new_births from a skewed gaussian, no longer assuming constant FR for each cohort
        new_births = get_new_births_with_gaussian_pdf(TF,fertility_start,fertility_end,cohort_length,I,fertility_start_index,fertility_end_index)

    birth_rate = (new_births)/sum(I) #births per total population
    
    pop = sum(I) #total population
    print("Total deaths: ",d)
    r = (new_births-d)/pop #birth-deaths / population total

    print("Birth rate: ",new_births/pop)
    print("Death rate: ",d/pop)
    print("Population growth rate: ",r," in percent: ",(r)*100)
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
    TF_pdf = TF*fertility_skewed_gauss_pdf(fertility_start,fertility_end,cohort_length)
    women_per_fertile_cohort = pop_d[fertility_start_index:fertility_end_index]/2
    new_births_per_cohort = []
    for cohort in range(0,len(TF_pdf)):
        new_births_per_cohort.append(TF_pdf[cohort]*women_per_fertile_cohort[cohort])
    new_births = sum(new_births_per_cohort)
    return new_births

###################################################################################################
###################################################################################################
###################################################################################################

gauss = lambda x,a,b,c: a*np.exp( -(x - b)**2 / (2*c**2) )

def preprocess_casualties(pop_total,lifetime,total_casualties,average_age,spread):    
    xarray = np.linspace(0,lifetime,lifetime+1)
    average_age = average_age #average age
    spread = (1/2)*spread #most casualties are between 22 and 38
    a = total_casualties/(spread*np.sqrt(2*np.pi)) #area = number of deaths total
    death_distribution = gauss(xarray,a,average_age,spread)
    death_dist_norm = death_distribution/pop_total
    return death_dist_norm

def war_recovery(pop_result,pop_presim,init_pop,lifetime,total_war_casualties,average_warrior_age,warrior_age_spread,recovery_time,fertility_start,fertility_end,birth_rate_mod,final_report=0):
    pop_war_death_dist = preprocess_casualties( np.sum(pop_result[0]*init_pop),lifetime=lifetime
                                               ,total_casualties=total_war_casualties
                                               ,average_age=average_warrior_age
                                               ,spread=warrior_age_spread )

    initial_warrior_pop = np.sum((pop_result[0]*init_pop)[ int(average_warrior_age-warrior_age_spread) : int(average_warrior_age+warrior_age_spread) ])

    [final_pop_d,pop_d,iterator,TF,growth_rate,birth_rate,death_rate]=main_sim(pop_presim[0]
        ,pop_presim[1],fertility_start,fertility_end
        ,population_distribution=(pop_result[0]*init_pop)-(pop_war_death_dist*init_pop)
        ,predict=0,guess_TF=3,set_growth_rate=(0.1/100),TF_set=pop_result[2]+birth_rate_mod
        ,sim_len=recovery_time,print_flag=0,final_report=final_report,savefile=None);
    
    final_warrior_pop = np.sum(pop_d[int(average_warrior_age-warrior_age_spread) : int(average_warrior_age+warrior_age_spread) ])
    percentage_recovered = 100*(total_war_casualties-(initial_warrior_pop-final_warrior_pop))/total_war_casualties
    
    if final_report:
        print("Initial warrior pop vs final: ",initial_warrior_pop,final_warrior_pop)
        print("Percentage recovered: ",  percentage_recovered)
        
    return percentage_recovered

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
#             predict=0,guess_TF=3,set_growth_rate=(0.1/100),TF_set=3,sim_len=None,print_flag=0):

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
# TF_set - This is used if predict=0. If you want to set the total fertility
#         (the avg number of children per woman per fertile lifetime) and see what growth rate it gives, do this.
# sim_len - The number of years to simulate. Leave blank if you want to get a base convergence, which runs for
#         2000 iterations. Otherwise, this just needs to be at least the cohort length (difference between the ages in
#                                                                                      the age array)
# print_flag - Do you want verbose printing and figures? 1 if so, 0 if not.

def main_sim(ages,mortality_rates,fertility_start,fertility_end,population_distribution
             ,predict=0,guess_TF=3,set_growth_rate=(0.1/100),TF_set=3,sim_len=None,print_flag=0,final_report=1,flat_fertility_pdf=0,savefile=None):
    ####################################################################
    #Set up initial variables
    ####################################################################
    
    if predict:
        TF_set = guess_TF

    #Derivative variables
    q = (mortality_rates/100)
    cohort_length = ages[1]-ages[0]
    
    pop_d = population_distribution #initial population distribution
    
    #Derivative variables
    fertility_start_index = int(np.round(fertility_start/cohort_length))
    fertility_end_index = int(np.round(fertility_end/cohort_length))
    f_years = fertility_end-fertility_start

    
    plt.figure()
    plt.plot(ages,mortality_rates)
    plt.title("Mortality Rate Choice")
    #print("Number years in a cohort: ",cohort_length)

    plt.figure()
    plt.plot(ages,pop_d)
    plt.title("Initial population distribution" )
    #print("Initial population: ",sum(pop_d))
    #print("---------\n")
    
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

        # #If we want to set a growth rate, we'll need to work through the method backwards to get a predicted total fertility value.
        # #This has to be done after the deaths are calculated; so for now we'll just have the non-predicted TF segment
        # if predict == 0 or (predict == 1 and (year/int(cohort_length)) < (sim_len/int(cohort_length))/4):

        #     #births per woman per fertile lifetime
        #     TF = TF_set #sum of age specific fertility rates weighted by number of years in that group
        #     if flat_fertility_pdf:
        #         #The first thing we'll do is determine births
        #         w = (sum(pop_d[fertility_start_index:fertility_end_index])/2) #number of women in fertile years    
        #         g = (TF/f_years)*cohort_length #births per woman per lifetime / years per lifetime =
        #                                                 #births per woman per year * years/cohort = births per woman per cohort
        #         new_births = g*w #births per woman per cohort * total fertile women = births of all fertile women per cohort    
        #     else:
        #         new_births = get_new_births_with_gaussian_pdf(TF,fertility_start,fertility_end,cohort_length,pop_d,fertility_start_index,fertility_end_index)

        #Next we'll determine deaths
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
        if predict == 0 or (predict == 1 and (year/int(cohort_length)) < (sim_len/int(cohort_length))/4):

            #births per woman per fertile lifetime
            TF = TF_set #sum of age specific fertility rates weighted by number of years in that group
            if flat_fertility_pdf:
                #The first thing we'll do is determine births
                w = (sum(pop_d[fertility_start_index:fertility_end_index])/2) #number of women in fertile years    
                g = (TF/f_years)*cohort_length #births per woman per lifetime / years per lifetime =
                                                        #births per woman per year * years/cohort = births per woman per cohort
                new_births = g*w #births per woman per cohort * total fertile women = births of all fertile women per cohort    
            else:
                new_births = get_new_births_with_gaussian_pdf(TF,fertility_start,fertility_end,cohort_length,pop_d,fertility_start_index,fertility_end_index)

        #The predictive function only works if the deaths have already been calculated for the year
        if predict == 1 and (year/int(cohort_length)) > (sim_len/int(cohort_length))/4:
            desired_pop_end = population_at_year_start+(population_at_year_start*set_growth_rate)
            predicted_new_births = desired_pop_end-sum(pop_d[1:]) #get the difference between desired and current population

            w = (sum(pop_d[fertility_start_index:fertility_end_index])/2) #number of women in fertile years
            pred_g = predicted_new_births/w
            TF = (pred_g/(cohort_length))*f_years

            if flat_fertility_pdf == 0:
                new_births = get_new_births_with_gaussian_pdf(TF,fertility_start,fertility_end,cohort_length,pop_d,fertility_start_index,fertility_end_index)
                #print(predicted_new_births,new_births)
                while abs(new_births-predicted_new_births) > (0.0001*predicted_new_births):
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

            if predict:
                print("TF value: \t",TF)
            print("New births: \t",new_births)
            print("Total deaths: \t",total_deaths)
            print("Growth rate at year ",year," = ",growth_rate*100)
            print("\n")
            
    ##FINAL REPORT
    birth_rate = new_births/sum(pop_d)
    death_rate = total_deaths/sum(pop_d)
    
    percent = 0
    iterator = 0
    while percent < 0.5:
        percent = percent + (pop_d/sum(pop_d))[iterator]
        iterator = iterator+1
    
    
    human_astar_life_ratio = 100/1000
    human_waith_life_ratio = 100/25000
    
    final_pop_d = pop_d/sum(pop_d)
    
    if final_report:
        print("Final growth rate: ",np.round(growth_rate*100,3),"%")
        print("Final birth rate: ",birth_rate)
        print("Final death rate: ",death_rate)
        print("Birth rate - death rate: ",birth_rate-death_rate)
        print("Final population: ",sum(pop_d))
        print("Average age: ",iterator)

        plt.figure()
        plt.title("Final Population Distribution")
        plt.plot(ages,pop_d)

        plt.figure()
        plt.title("Final Population Distribution, Normalized")
        plt.plot(ages,pop_d/sum(pop_d))

        print("Average age astar-human: ",iterator*human_astar_life_ratio)
        print("Average age waith-human: ",iterator*human_waith_life_ratio)

    if predict:
        print("TF final value: ",TF)
    
    if savefile != None:
        np.save(savefile+str(dt.datetime.now()).strip().replace(' ','').replace(':','.')
                ,[final_pop_d,iterator,TF,growth_rate,birth_rate,death_rate],allow_pickle=1)
    
    return [final_pop_d,pop_d,iterator,TF,growth_rate,birth_rate,death_rate]