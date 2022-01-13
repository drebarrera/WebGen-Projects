import modules as mx
import sys
import os
homedir = os.getcwd() + r'/files/Portfolio/'
sys.path.append(homedir)
data = mx.Data()
body = mx.Body()

from header import *
from alpenaerial import *
from forms import *
from visitInfo import *

data.title = "Dre Barrera | Alpen Aerial"
data.author = "Andres Barrera"

### OBJECTS ###
# Main
main = mx.C()
container = mx.C()
captionT = mx.T()
formC = mx.C()
title = mx.T()
contact = mx.C()
form = mx.X()

### CONTENT ###
# Body
body.content = [main]

# Main
main.content = [nav, container]

# Container
container.content = [title, captionT, formC]
captionT.content = 'Please give all possible information for a project before submitting a request. If any media is necessary for the project, please upload it to my Inbox on Dropbox or email it to me at <a href="mailto:drebarrera@yahoo.com" class="pseudoLink">drebarrera@yahoo.com</a> <em>before or immediately after</em> the request is sent. If necessary, give me a call at <a href="tel:12105856279" class="pseudoLink">+1 (210) 585-6279</a> during business hours. Don&#39;t be shy to leave a voicemail! I will do my best to get back to you within 24 hours on the next business day.<br><br>'
formC.content = [contact]
title.content = 'Alpen Aerial Work Request'
contact.content = [form]
form.content = '<form method="post" action="index.php"><label for="name">Admin</label><select name="name" required><option>Steve Kohl</option><option>Asher Noël</option><option>Andres Barrera</option></select><label for="project">Project Name</label><input type="text" name="project" required><label for="company">Client Company</label><input type="text" name="company"><label for="contact">Client Contact Name</label><input type="text" name="contact"><label for="clientEmail">Contact Email</label><input type="text" name="clientEmail"><label for="clientPhone">Contact Phone</label><input type="text" name="clientPhone"><label for="description">Project Description</label><textarea name="description" type="text" placeholder="Please provide a full description of the project. This includes where to find necessary media, icon placement, and client needs. Any unclear information will be resolved with the client contact." style="height:200px" required></textarea><input type="submit" value="Submit" name="submit"></form><p style="color: white;"><?=$thankyou ?></p>'

### PROPERTIES ###
# Body
body.background_color = "#fefefe"

# Main
main.id = "main"
main.background_color = ""

# Caption
container.id = "container"
container.background_color = ""

# Form
formC.id = "form"
formC.background_color = ""
title.id = "title"
contact.id = "contact"
contact.background_color = "#005580"
