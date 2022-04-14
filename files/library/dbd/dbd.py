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

### HEADER ###
buttons = list()
button_names = ['About Me','Website Design','Data Mining','CAD Drafting','WebIn1Day','Other Services']
button_actions = ['alert(\'hi\');'] * 6
for x in range(len(button_names)):
    buttons.append(('func',button_names[x],button_actions[x]))
header = Header(branding='left',menubar='center')
header.logo_name='designedbydre.png'
header.logo_height='125px'
header.site_name='designed\nby\ndre'
header.buttons=buttons
header.primary_color='rgb(245,245,245)'
header.accent_color='#005580'
header.button_style='rounded'
header.button_colors='#005580 white'
header.navbar = '10px #005580'
header.button_width='auto 50px'
header.nav_switch='1250'
header.button_gradient = '-45deg, #ffffff, #ffffff, #23a6d5, #23d5ab'
header.header_gradient = '-45deg, #23a6d5, #23d5ab'
header.build()

### OBJECTS ###

### CONTENT ###
body.content = [header]

### PROPERTIES ###
body.background_color = 'rgb(50,50,50)'
