import modules as mx
import sys
import os
homedir = os.getcwd() + r'/files/Portfolio/'
sys.path.append(homedir)
data = mx.Data()
body = mx.Body()

### OBJECTS ###
x = mx.C()

### CONTENT ###
body.content = [x]

### PROPERTIES ###
x.id = 'x'
x.background_color = ''
