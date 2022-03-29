import modules as mx
import sys
import os
homedir = os.getcwd() + r'/files/Portfolio/'
sys.path.append(homedir)
data = mx.Data()
body = mx.Body()
from head_webgen import *

### OBJECTS ###
center = mx.C()
code_slide = mx.C()
code_box = mx.C()
code = mx.T()
heading = mx.T()
subheading = mx.T()
subsubheading = mx.T()


### CONTENT ###
body.content = [center]
center.content = [nav, code_slide]
code_slide.content = [code_box]

### PROPERTIES ###
code_slide.id = "code_slide"
code_slide.position = "relative"
code_slide.display = "flex"
code_slide.justify_content = "center"
code_box.id = "code_box"
