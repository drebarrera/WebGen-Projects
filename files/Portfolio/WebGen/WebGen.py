import modules as mx
import sys
import os
homedir = os.getcwd() + r'/files/Portfolio/'
sys.path.append(homedir)
data = mx.Data()
body = mx.Body()
from head_webgen import *
data.title = "WebGen | Software for Efficient and Clean UI Design"

### OBJECTS ###
center = mx.C()
webgen_title = mx.T()
code_slide = mx.C()
code_box = mx.C()
code = mx.T()
heading = mx.T()
subheading = mx.T()
subsubheading = mx.T()
code = mx.T()
documentation = mx.C()
doc_title = mx.T()

### CONTENT ###
body.content = [center]
center.content = [nav, webgen_title, code_slide]
webgen_title.content = "WEBGEN"
code_slide.content = [code_box, documentation]
code_box.content = [heading, subheading, subsubheading, code]
heading.content = "WebGen"
subheading.content = "Software for Efficient and Clean UI Design."
subsubheading.content = "Check out the WebGen Python code for this page below!"
code.content = ""
documentation.content = [doc_title]
doc_title.content = "- DOCUMENTATION -"

### PROPERTIES ###
center.display = "flex"
center.justify_content = "center"
webgen_title.color = "rgba(230,230,230,1)"
webgen_title.position = "fixed"
webgen_title.id = "webgen_title"
code_slide.id = "code_slide"
code_slide.position = "relative"
code_slide.display = "flex"
code_slide.justify_content = "center"
code_box.id = "code_box"
code_box.background_color = "rgba(60,60,60,1)"
code_box.overflow_y = "auto"
heading.color = "white"
heading.type = "h1"
heading.font_weight = "300"
subheading.color = "white"
subheading.type = "h4"
subheading.font_weight = "300"
subsubheading.font_family = "Courier New"
subsubheading.color = "white"
code.id = "code"
code.font_family = "Courier New"
code.color = "#23d5ab"
documentation.id = "doc"
documentation.background_color = "rgba(245,245,245,1)"
documentation.display = "flex"
documentation.justify_content = "center"
documentation.position = "absolute"
documentation.z_index = "5"
doc_title.id = "doc_title"
doc_title.color = "rgba(60,60,60,1)"
doc_title.font_weight = "300"
