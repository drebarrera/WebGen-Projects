import modules as mx
import sys
import os
import importlib
homedir = os.getcwd() + r'/files/library/'
sys.path.append(homedir)
data = mx.Data()
body = mx.Body()
from buttons import *
importlib.reload(sys.modules['buttons'])
from header import *
importlib.reload(sys.modules['header'])

data.title = "Test Site"
### OBJECTS ###
buttons = list()
for x in range(4):
    buttons.append(('link','Text'+str(x),'https://www.google.com/'))
header = header1('logo.png', 'Test Site', buttons, primary_color='rgb(245,245,245)',button_style='rounded',button_width='5vw 50px', button_colors='red white', navbar='10px red')

### CONTENT ###
body.content = [header]

### PROPERTIES ###
