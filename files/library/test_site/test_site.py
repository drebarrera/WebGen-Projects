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
header = Header(branding='left',menubar='right')
header.logo_name='logo.png'
header.site_name='Test Site'
header.buttons=buttons
header.primary_color='rgb(245,245,245)'
header.accent_color='rgb(230,230,230)'
header.button_style='underline sharp'
header.button_colors='rgb(245,245,245) black'
header.button_width='5vw 50px'
header.nav_switch='750'
header.underline=True
header.build()

### CONTENT ###
body.content = [header]

### PROPERTIES ###
