import modules as mx
import sys
import os
homedir = os.getcwd() + r'/files/Portfolio/'
sys.path.append(homedir)
data = mx.Data()
body = mx.Body()

from header import *
from alpenaerialproject import *
from forms import *
from visitInfo import *

data.title = "Dre Barrera | Alpen Aerial Project Brief"
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
formTable = mx.Table()
th0 = mx.X()
th1 = mx.T()
th2 = mx.T()
th3 = mx.T()
th4 = mx.T()
th5 = mx.T()
th6 = mx.T()
th7 = mx.T()
th8 = mx.T()
addButton = mx.T()
formend = mx.X()

### CONTENT ###
# Body
body.content = [main]

# Main
main.content = [nav, container]

# Container
container.content = [title, captionT, formC]
captionT.content = 'This form is for submitting project details to Alpen Aerial&#39;s design team. If you are submitting a revision to previously submitted project information, please include "REVISED" in the Project Name. If any media is necessary for the project, please email it to <a href="mailto:drebarrera@yahoo.com" class="pseudoLink">drebarrera@yahoo.com</a> <em>before or immediately after</em> the request is sent. If necessary, give us a call at <a href="tel:12105856279" class="pseudoLink">+1 (210) 585-6279</a> during business hours. Don&#39;t be shy to leave a voicemail! We will do our best to get back to you within 24 hours on the next business day.<br><br>'
formC.content = [contact]
title.content = 'Alpen Aerial Project Information Form'
contact.content = [form, formTable, formend]
form.content = '<form method="post" action="index.php"><label for="name">Submitter</label><select name="name" required><option>Client</option><option>Steve Kohl</option><option>Asher Noël</option><option>Andres Barrera</option></select><label for="project">Project Name</label><input type="text" name="project" required><label for="company">Client Company</label><input type="text" name="company"><label for="contact">Client Contact Name</label><input type="text" name="contact"><label for="clientEmail">Contact Email</label><input type="text" name="clientEmail"><label for="clientPhone">Contact Phone</label><input type="text" name="clientPhone"><label for="description">Project Description</label><textarea name="description" type="text" placeholder="Please provide a full description of the project. This includes where to find necessary media and project background information. Any unclear information will be resolved with the client contact." style="height:200px" required></textarea><!--table id="table"><tr><th>Icon</th><th>Type</th><th>Clickable/Not Clickable</th><th>Latitude/Longitude (optional)</th><th>Display Information (if clickable)</th><th>Other Descriptional Information (Media URLS,Positional Info,etc.)</th></tr></table><input type="submit" value="Submit" name="submit"><p style="color: white;"><?=$thankyou ?></p></form-->'

# FormTable
formTable.content = [[th0,th1,th2,th3,th4,th5,th6,th7,th8],[th0,addButton]]
th1.content = 'Icon Name'
th2.content = 'Icon Type'
th3.content = 'Clickable / Not Clickable'
th4.content = 'Icon Text Content (optional)'
th5.content = 'Icon Image Description / URL (optional)'
th6.content = 'Latitude/Longitude (optional)'
th7.content = 'Display Information (if clickable)'
th8.content = 'Other Descriptional Information (Media URLS,Positional Info,etc.)'
addButton.content = 'Add New Icon +'
formend.content = '<input type="submit" value="Submit" name="submit"><p style="color: white;"><?=$thankyou ?></p></form>'

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
captionT.id = "caption"
title.id = "title"
contact.id = "contact"
contact.background_color = "#005580"

#FormTable
formTable.background_color = ""
formTable.id = "formTable"
addButton.cl = 'button buttonRed'
addButton.id = 'addButton'
