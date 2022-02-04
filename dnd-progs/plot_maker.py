import numpy as np
import matplotlib.pyplot as plt
import time
from os import system

def onclick(event):
    global end_loop
    #print("event key: ",event.key)
    if event.key == 'c':
        end_loop = 1
        fig.canvas.mpl_disconnect(cid) 
        plt.close('all')
        system('clear')
        print("Array of x values: \n",x)
        print("Array of y values: \n",y)
    global ix, iy
    ix, iy = event.xdata, event.ydata
    #print(ix,iy)

    global coords
    coords.append((ix, iy))


end_loop = 0
coords = []
x = []
y = []

#set up the figure
fig = plt.figure()
ax = fig.add_subplot(111)
l = ax.plot(x,y)[0]
plt.grid()
plt.xlim(0,100)
plt.ylim(0,100)

#connect the button press with the event manager
cid = fig.canvas.mpl_connect('button_press_event', onclick)
cid = fig.canvas.mpl_connect('key_press_event', onclick)

fig.canvas.draw()
plt.show(block=False)

try:
    while end_loop==0:
        plt.waitforbuttonpress()
        #print(coords)
        x.append(coords[-1][0])
        y.append(coords[-1][1])
        # set the new data
        l.set_xdata(x)
        l.set_ydata(y)

        fig.canvas.draw()
        #time.sleep(0.01)
        system('clear')
        #print("Array of x values: \n",x)
        #print("Array of y values: \n",y)
except KeyboardInterrupt:
    plt.close('all')
    fig.canvas.mpl_disconnect(cid)
    
    pass