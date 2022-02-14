import modules as mx
import sys
import os
homedir = os.getcwd() + r'/files/Portfolio/'
sys.path.append(homedir)
data = mx.Data()
body = mx.Body()


### OBJECTS ###
text = mx.T()
text2 = mx.T()
t = mx.Table()
m = mx.Menu()
i = mx.Icon()
i.type = "x"
### CONTENT ###
body.content = [t]
text.content = "Text"
text2.content = "Text2"
t.content = [[m,i,text],[text,text,text]]

### PROPERTIES ###
m.spacing = "1"
i.height = "20"
