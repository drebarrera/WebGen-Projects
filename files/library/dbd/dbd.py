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
button_names = ['About Me','Website Design','Data Mining','Audio Production','Other Services','Contact Me']
button_actions = ["redirect('https://www.drebarrera.com/');", "redirect('https://www.drebarrera.com/');", "redirect('https://www.drebarrera.com/');", "redirect('https://www.drebarrera.com/');", "redirect('https://www.drebarrera.com/');", "redirect('https://www.drebarrera.com/');"]
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
header.build()

### OBJECTS
page = Page()
slide1 = Slide()
slide1title = mx.T()
slide1emoji = mx.T()
slide1caption = mx.T()
slide1list = mx.X()
slide1image = mx.Image()
slide1subcaption = mx.T()
slide1button = Button('link','Portfolio',link_url="https://www.drebarrera.com",radius='rounded')
slide2 = Slide()
slide2title_c = mx.C()
slide2title = mx.T()
slide2supertitle = mx.T()
slide2leftsubtitle = mx.T()
slide2right = mx.T()
slide2iconlist = IconList()

### CONTENT
body.content = [header, page]
page.content = [slide1, slide2]

# SLIDE 1
slide1.content = [[[slide1image,slide1title,slide1emoji]],[[slide1caption,slide1list]],[[slide1subcaption, slide1button]]]
slide1image.src = 'images/profile.jpg'
slide1title.content = "Hi, I'm Dre!"
slide1emoji.content = "&#128075;"
slide1caption.content = "Welcome to my site! You are most likely here because you are looking for design services. More information can be found below, but first let me tell you a little about myself!"
slide1list.content = "<ul id='slide1caption'><li>I am finishing a degree in Computer Engineering at Purdue University.</li><li>8 years of experience in graphic design, website development, and programming.</li><li>Graduated high school at 16 years old, exceeding testing standards.</li><li>Reliable and ambitious hard worker who is dedicated to getting the job done with minimal hassel!</li></ul>"
slide1subcaption.content = "For more about me, visit my"

# SLIDE 2
slide2title_c.content = [slide2supertitle, slide2title]
slide2.content = [[[slide2title_c]],[[slide2leftsubtitle,slide2iconlist],[slide2right]],[[]]]
slide2supertitle.content = "Authentic, Aesthetic, and Effcicient"
slide2title.content = 'DESIGN THAT WILL \n<span style="color: #99ff99; margin-left: 25px;">BLOW YOU AWAY</span>'
slide2leftsubtitle.content = "Design Services"
slide2right.content = "This is placeholder text for the description of services."
slide2iconlist.content = [('images/vector_web1.png', 'Website Design', 'link' ,'https://www.drebarrera.com'),('images/vector_mine.png', 'Data Mining', 'link' ,'https://www.drebarrera.com'),('images/vector_web.png', 'Audio Production', 'link' ,'https://www.drebarrera.com'),('images/vector_web.png', 'Graphic Design', 'link' ,'https://www.drebarrera.com')]

### PROPERTIES
#body.background_color = 'rgb(50,50,50)'
# SLIDE 1
slide1.background = 'linear-gradient(175deg, rgb(250,250,250) 0%, #edf9fe 55%, #76aac2 85%, #36687d 100%)'
slide1.id = 'slide1'
slide1title.type = 'h2'
slide1emoji.type = 'h2'
slide1emoji.id = 'slide1emoji'
slide1caption.id = 'slide1caption'
slide1image.id = 'slide1image'
slide1subcaption.color = 'white'
slide1subcaption.font_weight = '300'
slide1button.id = 'slide1button'
slide1button.primary = '#F35046'
slide1button.accent = 'white'

# SLIDE 2
slide2.height = '800px'
slide2.background_color = 'rgb(50,50,50)'
slide2.id = 'slide2'
slide2title.type = 'h1'
slide2supertitle.type = 'h6'
slide2supertitle.color = '#ccffcc'
slide2leftsubtitle.type = 'h5'

### BUILD
slide1.build()
slide2.build()
