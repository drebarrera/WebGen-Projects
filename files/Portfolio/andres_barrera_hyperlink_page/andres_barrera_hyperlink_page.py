import modules as mx
import sys
import os
homedir = os.getcwd() + r'/files/Portfolio/'
sys.path.append(homedir)
data = mx.Data()
body = mx.Body()
data.jquery_ui_script = False

### OBJECTS ###
background = mx.C()
center = mx.C()
title = mx.T()
note = mx.T()
link_content = ['Portfolio','GitHub','LinkedIn','Behance','Curriculum','Resume']
link_href = ['https://www.drebarrera.com/','https://www.github.com/drebarrera/','https://www.linkedin.com/in/drebarrera','https://www.behance.net/drebarrera/','https://www.drebarrera.com/resources/curriculum.pdf','https://www.drebarrera.com/resources/resume.pdf']
for ind in range(len(link_content)):
    exec('link'+str(ind)+' = mx.Link()')
    exec('linkT'+str(ind)+' = mx.T()')
    exec('link'+str(ind)+'.content = [linkT'+str(ind)+']')
    exec('linkT'+str(ind)+'.content = "'+link_content[ind]+'"')
    exec('link'+str(ind)+'.src = "'+link_href[ind]+'"')
    exec('link'+str(ind)+'.target = "_blank"')
    exec('link'+str(ind)+'.id = "link'+str(ind)+'"')

### CONTENT ###
body.content = [background, center]
center.content = [title]
title.content = 'dre barrera_'
for ind in range(len(link_content)):
    exec('center.content.append(link'+str(ind)+')')
center.content.append(note)
note.content = 'Made with Dre Barrera&#39;s <a href="https://github.com/drebarrera/WebGen" target="_blank">WebGen</a>'

### PROPERTIES ###
body.background_color = 'black'
background.id = 'background'
background.background_color = ''
center.id = 'center'
center.background_color = ''
title.id = 'title'
title.type = 'h1'
note.id = 'note'
