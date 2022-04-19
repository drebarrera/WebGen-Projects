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
from content import *
importlib.reload(sys.modules['content'])

data.title = "Designed By Dre"

### HEADER ###
buttons = list()
button_names = ['About Me','Website Design','Data Mining','Audio Production','Graphics','Other Services']
button_actions = ['alert(\'hi\');'] * 6
for x in range(len(button_names)):
    buttons.append(('func',button_names[x],button_actions[x]))
header = Header(branding='center',menubar='center')
header.logo_name='designedbydre.png'
header.logo_height='100px'
header.site_name='designed\nby\ndre'
header.buttons=buttons
header.primary_color='rgb(250,250,250)'
header.accent_color='#005580'
header.button_style='rounded'
header.button_colors='rgb(250,250,250) #005580'
header.button_width='auto 50px'
header.button_padding='10px'
header.nav_switch='750'
#header.header_gradient = '-45deg, #23a6d5, #23d5ab'
header.build()

### OBJECTS
page = Page()
slide1 = Slide()
slide1title = mx.T()
slide1emoji = mx.T()
slide1caption = mx.T()
slide1list = mx.X()
slide1image = mx.Image()

### CONTENT
body.content = [header, page]
page.content = [slide1]
slide1.content = [[[slide1image,slide1title,slide1emoji]],[[slide1caption,slide1list]]]
slide1image.src = 'images/profile.jpg'
slide1title.content = "Hi, I'm Dre!"
slide1emoji.content = "&#128075;"
slide1caption.content = "Welcome to my site! You are most likely here because you are looking for design services. More information can be found below, but first let me tell you a little about myself!"
slide1list.content = "<ul><li>Currently finishing a degree in Computer Engineering at Purdue University</li><li>8 years of experience in graphic design, website development, and programming.</li><li>Graduated high school at 16 years old, exceeding testing standards.</li><li>Reliable and ambitious hard worker who is dedicated to getting the job done with minimal hassel!</li></ul>"

### PROPERTIES
#body.background_color = 'rgb(50,50,50)'
slide1.background_color = 'red'
slide1.background = 'linear-gradient(175deg, rgb(250,250,250) 0%, #edf9fe 55%, #76aac2 85%, #36687d 100%)'
slide1.id = 'slide1'
slide1.build()
slide1title.type = 'h2'
slide1emoji.type = 'h2'
slide1emoji.id = 'slide1emoji'
slide1caption.id = 'slide1caption'
slide1image.id = 'slide1image'
