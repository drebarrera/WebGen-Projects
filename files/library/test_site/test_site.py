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
header = header1('logo.png', 'Test Site')
button = button('link','Text','https://www.google.com',primary_color='#005580',accent_color='white',width='10vw',padding='0.5vh', underline=False, inverse=False)

### CONTENT ###
body.content = [header]

### PROPERTIES ###
