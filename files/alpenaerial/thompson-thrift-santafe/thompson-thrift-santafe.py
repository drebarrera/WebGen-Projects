import modules as mx
import sys
import os
homedir = os.getcwd() + r'/files/Portfolio/'
sys.path.append(homedir)
data = mx.Data()
body = mx.Body()

### OBJECTS ###
center = mx.C()
linkBox = mx.C()
link1 = mx.Link()
link1T = mx.T()
link2 = mx.Link()
link2T = mx.T()
link3 = mx.Link()
link3T = mx.T()
link4 = mx.Link()
link4T = mx.T()

### CONTENT ###
body.content = [center]
center.content = [linkBox]
linkBox.content = [link1, link2, link3, link4]
link1.content = [link1T]
link1T.content = 'TrailLink - About the Trail'
link2.content = [link2T]
link2T.content = 'El Paso County - New Santa Fe Regional Trail'
link3.content = [link3T]
link3T.content = 'Best Colleges - United States Air Force Academy'
link4.content = [link4T]
link4T.content = 'CBS Denver - USAFA COVID-19 Policy'

### PROPERTIES ###
center.id = 'center'
linkBox.id = 'linkBox'
linkBox.background_color = ''
link1.src = 'https://www.traillink.com/trail/new-santa-fe-regional-trail/'
link1.target = '_blank'
link2.src = 'https://communityservices.elpasoco.com/parks-and-recreation/new-santa-fe-regional-trail/'
link2.target = '_blank'
