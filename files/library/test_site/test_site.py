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
header = header('logo.png', 'Test Site', buttons, primary_color='rgb(245,245,245)', accent_color='rgb(230,230,230)', button_width='5vw 50px', nav_switch='750', underline=True, button_colors='rgb(245,245,245) black')
header.generate_header()
### CONTENT ###
body.content = [header]

### PROPERTIES ###
