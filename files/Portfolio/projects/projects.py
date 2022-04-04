import modules as mx
import sys
import os
homedir = os.getcwd() + r'/files/Portfolio/'
sys.path.append(homedir)
data = mx.Data()
body = mx.Body()
from header import *
from visitInfo import *
from alert import *

data.title = "Dre Barrera | Projects"
data.author = "Andres Barrera"

### OBJECTS ###
center = mx.C()
main = mx.C()
title = mx.T()
caption = mx.T()
captionLinks = mx.C()
interactiveA = mx.C()
interactiveT = mx.T()
contactA = mx.Link()
contactT = mx.T()
projectList = mx.X()

### CONTENT ###
# Body
body.content = [center]

# Center
center.content = [nav, main, alert]

# Main
main.content = [title, caption, captionLinks, projectList]
title.content = 'Projects'
caption.content = 'Peruse this page for details of my latest projects. To learn more about me in summary, check out my <span class="pseudoLink" id="interactive">Interactive Portfolio</span>! If you have any questions or comments, feel free to reach out on my <a href="https://drebarrera.com/contact/" target="_blank" class="pseudoLink">Contact Page</a>.'
captionLinks.content = [interactiveA, contactA]
interactiveA.content = [interactiveT]
interactiveT.content = 'Try the Interactive Portfolio!'
contactA.content = [contactT]
contactT.content = 'Contact'
projectList.content = '<p class="subject">Circuit Design Projects</p><br><ul class="list"><li>Digital WAV Player Design (Device / PCB Design and Microcontroller Programming, 2021)</li><p class="explanation">As part of Purdue University&#39;s <a href="https://engineering.purdue.edu/ECE/Academics/Undergraduates/UGO/CourseInfo/courseInfo?courseid=612&show=true&type=undergrad" target="_blank" class="pseudoLink">Microprocessor Systems and Interfacing</a> course, I worked with a team to build a Digital WAV Player capable of playing both 8-bit and 16-bit audio files with .wav extensions. My participation in the team was hardware design and system interfacing. In addition to this, I produced deliverables and cooresponded with course staff.<br><a href="https://www.drebarrera.com/resources/wav_player_project.pdf" target="_blank" class="button buttonPurple">Project Documentation</a><br></p><li>Optical Heart Rate Sensor Design (Device / Circuit Design With Analog and Digital Output, 2021)</li><p class="explanation">The final project for Purdue University&#39;s <a href="https://engineering.purdue.edu/ECE/Academics/Undergraduates/UGO/CourseInfo/courseInfo?courseid=727&show=true&type=undergrad" target="_blank" class="pseudoLink">Electrical Fundamentals II Lab</a> course provided the challenge of independently designing an optical heart rate sensor device. The successful project saw a functioning optical sensing subsystem, which analyzed changes in heart rate by detecting variations in an infrared diode&#39;s output through a subject&#39;s finger with a phototransistor.<br><a href="https://www.drebarrera.com/resources/optical_heart_rate_project.pdf" target="_blank" class="button buttonPurple">Project Documentation</a><br></p><li>Geoamperic Interpreter (Device / PCB Design and Industrial Application, 2020)</li><p class="explanation">While working for <a href="https://www.llsi.com" target="_blank" class="pseudoLink">Leak Location Services, Inc.</a>, a geomembrane liner inspection company, I realized that the tools used in industry needed an upgrade. With my knowledge of power systems, I independently designed a prototype device used to detect holes in geomembrane liners. The Geoamperic Interpreter reads voltage measurements used to identify subterranean defects in liners and correlates it to geographic data from the device&#39;s GPS. With custom software, the handheld device was able to accurately store data from large industrial project sites.<br><a href="https://www.drebarrera.com/resources/geovoltaic_interpreter_project.pdf" target="_blank" class="button buttonPurple">Project Documentation</a><br></p></ul><br><p class="subject">UI/UX Projects</p><br><ul class="list"><li>Alpen Aerial Client Project Brief Page (HTML, JavaScript, and PHP, 2022)</li><p class="explanation">The Project Brief page was independently designed with my UI Compiler, <a href="https://www.github.com/drebarrera/WebGen" class="pseudolink" target="_blank">WebGen</a>, to better the user experience of clients of <a href="https://www.alpenaerial.com" target="_blank" class="pseudolink">Alpen Aerial</a> by giving users a location to create, store, and edit project requests. Alpen Aerial is a company which designs aerial drone tours for the construction and destination location industries. As a project done out-of-contract, I reserve all creation rights to the system design.<br><a href="https://www.drebarrera.com/alpen-aerial-project/restricted/" target="_blank" class="button buttonRed">Alpen Aerial Client Project Brief Page</a><br></p><li>WebGen - Python Based UI Compiler (User Interface, Website Design, and Python, 2021/2022)</li><p class="explanation">WebGen is a custom Python to User Interface compiler with the goal of making website and app design cleaner and more efficient.  WebGen uses Python classes to represent HTML elements, creating repeated structures much more reliably than copy/paste. Javascript, CSS, and PHP global files can be created and linked to pages, giving creators the ability to use the same pieces of code on every site. WebGen was used to build this Portfolio and was updated in the process. WebGen operates much more smoothly than programming from scratch in HTML, while still presenting the customizable flexibility of creating a website through code.<br><a href="https://www.drebarrera.com/webgen" target="_blank" class="button buttonRed">WebGen Webpage</a><a href="https://github.com/drebarrera/WebGen" target="_blank" class="button buttonBlue">Project GitHub</a><br></p><li>Alpen Aerial Company Website Design (Website Design, 2021)</li><p class="explanation">While working for Alpen Aerial, a drone-based media solutions company, I developed a company website using Wix. Although Wix is a very basic website-building software, I was able to practice my UI/UX skills in development. The website features a simplistic design with opportunities for users to explore the product. Several backend pages were developed for easy client use to update the website portfolio, manage customers leads, and site membership.<br><a href="https://www.alpenaerial.com" target="_blank" class="button buttonRed">Alpen Aerial Website</a><br></p><li>Aesthetic Brand Design Partnership For Shopify Store Transfer (Data Collection / Website Design, 2021)</li><p class="explanation">The ABM Shopify Transfer was a project contribution I made to the store transfer of <a href="https://www.rejuvemdmedspa.com" target="_blank" class="pseudoLink">RejuveMD&#39;s</a> DermPro store to Shopify. In partnership with Aesthetic Brand Marketing (ABM), I developed a Basic program used to scan a Shopify webpage and populate an csv file with the content of desired website content. The final product was used to efficiently transfer 55 pages of DermPro store content without any help from the DermPro website building company itself. ABM was grateful for my contribution, as it saved their team many hours of copy/pasting content.<br><a href="https://github.com/drebarrera/ABM-Shopify-Transfer" target="_blank" class="button buttonBlue">Project GitHub</a><br></p><li>Old Portfolio Site Design (Website Design, 2021)</li><p class="explanation">Back in 2018, I developed the my portfolio site. Since, the website has gone through many changes, with it&#39;s most recent update in 2021. Although many links are broken, feel free to visit the old site with the button below.<br><a href="https://www.drebarrera.com/old/professional" target="_blank" class="button buttonRed">Old Portfolio Site</a><br></p></ul><br><p class="subject">Data Processing and Algorithm Projects</p><br><ul class="list"><li>OrgAI - Purdue University Organization AI Suggester (Python, 2022)</li><p class="explanation">OrgAI is a Python Artificial Intelligence Program created to suggest organizations at <a href="https://www.purdue.edu" target="_blank" class="pseudolink">Purdue University</a> based upon defined keywords. Using Selenium Browser Automation, OrgAI accesses Purdue&#39;s Organization Directory, <a href="https://boilerlink.purdue.edu" target="_blank" class="pseudolink">Boilerlink</a> and processes the site&#39;s language data. Each unique word presented by organization descriptions is rated based upon the frequency it is used within the directory and weight values generated as users make decisions. Data is continuously developed for suggestion accuracy as users rank organizations on a floating point scale of 0 to 1 based upon their interest. This program was independently created in two days.<br><a href="https://github.com/drebarrera/OrgAI" target="_blank" class="button buttonBlue">Project GitHub</a><br></p><li>Shortest Path Grid Traversal Program (C Programming and Data Structures / Algorithms, 2021)</li><p class="explanation">The final project of Purdue University&#39;s <a href="https://engineering.purdue.edu/ECE/Academics/Undergraduates/UGO/CourseInfo/courseInfo?courseid=542&show=true&type=undergrad" target="_blank" class="pseudoLink">Data Structures</a> course challenged me to independently develop a program capable of computing the shortest path from the top of a weighted grid to the bottom of the grid. This project required me to understand graph theory, structures, and most of all runtime analysis. Ultimately, my code ran flawlessly when tested with a large set of test cases alongside hundred of other student programs. Needless to say, what I gleaned most from the Data Structures course was an ability to debug for efficiency and accuracy.<br><a href="https://github.com/drebarrera/Shortest-Path-Grid-Traversal" target="_blank" class="button buttonBlue">Project GitHub</a><br></p><li>GPS-Based 3-Dimensional Coordinate Plotting Program (Python, MATLAB, and Data Processing, 2020)</li><p class="explanation">While working for <a href="https://www.llsi.com" target="_blank" class="pseudoLink">Leak Location Services, Inc.</a>, a geomembrane liner inspection company, I developed a system for geographically mapping large project sites. Using the basic GPS of a mobile phone, I was able to obtain the 3-dimensional coordinates of a site. These coordinates were then taken and plotted 3-dimensionally to produce a map of the project site. This system proved especially useful for determining the project site dimensions, tracking the location of liner defects, and producing client deliverables.<br><a href="https://www.github.com/drebarrera/GeoPlot-MATLAB" target="_blank" class="button buttonBlue">Project GitHub</a><br></p><li>WYd. Startup Directory Data Collection (VBA, HTML, Data Collection, and Business Development, 2020)</li><p class="explanation">In 2020, I participated in the development of an unsuccessful startup called WYd. (now known as clix). The student-led company attempted to produce a social app for finding friends and relationships on college campuses. In order to help the team analyze student demographics, I wrote a program capable of traversing the <a href="https://www.purdue.edu/directory/" target="_blank" class="pseudoLink">Purdue University Directory</a> and generating student information. This software which applied HTML, JavaScript, Python, and VBA and, over the course of 120 hours, gathered the public information of over 35,000 students for demographic purposes.<br><a href="https://www.drebarrera.com/resources/wyd_project.pdf" target="_blank" class="button buttonPurple">Project Documentation</a><br></p></ul><p class="subject">Multidisciplinary Engineering Projects</p><br><ul class="list"><li>Boy Scouts of America Terrace Planter Eagle Scout Project (CAD / Multidisciplinary Engineering, 2019)</li><p class="explanation">In the Summer of 2019, I was awarded the Boy Scouts of America Eagle Scout Rank, the highest achievement attainable from the six year program. Part of my required services for rank advancement was to contribute to my community through a meaningful project. It was my honor to design and construct a terrace planter for the Colonial Hills Elementary School in San Antonio, TX. Inspired by the ancient Incan people, the planter was designed using AutoCAD and hand built with a complete irrigation system.<br><a href="https://www.drebarrera.com/resources/planter_project.pdf" target="_blank" class="button buttonPurple">Project Documentation</a><br></p></ul><p class="subject">Visual, Auditory, and Cinematographic Projects</p><br><ul class="list"><li>f!&$ (the dropout series) (Multimedia Art, 2021)</li><p class="explanation">f!&$, also called "the dropout series" was a series I created the summer of 2021. In the time of uncertainty brought about by COVID-19, I found myself at a crossroads between dropping out of school for an extended period of time and sticking it out for my senior year. This may seem like an easy decision, but I honestly felt stuck. On one hand, getting a degree would help me achieve my professional goals quicker than without. On the other, sticking it out meant facing expensive tuition, dreadful classes, and a pandemic college experience. This series expresses the struggles of a global pandemic through the eyes of a university student.<br><a href="https://www.behance.net/gallery/134202847/f-S-%28the-dropout-series%29" target="_blank" class="button buttonYellow">Behance Gallery</a><br></p><li>Unearth (Music Video, 2021)</li><p class="explanation">For the Unearth music video, I channeled some of my darkest innermost emotions. In it, I reflect on my time in elementary school through high school where I was bullied and ultimately faced an internal struggle to keep my emotions contained. This video was filmed single handedly with a GoPro and some homemade fake blood. Both characters in the video are played by me and the shots were taken by me over a 48 hour period. Many hours went into filming and editing this video, so if you choose to watch, I hope that you enjoy.<br><a href="https://www.behance.net/gallery/134129035/Unearth-%28Official-Music-Video%29" target="_blank" class="button buttonYellow">Unearth Music Video</a><br></p><li>god. (Album, 2021)</li><p class="explanation">"god." is the second album in my planned trilogy. In my first album, "gold.", I wanted to write something organic. In this second album, I focused on honing my mixing and mastering skills to produce a better sounding album. "god." is dark, atmospheric, and deep. In it, I confess my struggles with relationship and religion.<br><a href="https://www.drebarrera.com/music/" target="_blank" class="button buttonYellow">Listen to My Music</a><br></p></ul>'

### PROPERTIES ###
# Center
center.id = 'center'
center.background_color = ""

# Main
main.id = 'main'
main.background_color = ""
title.id = 'title'
caption.id = "caption"
captionLinks.id = "captionLinks"
captionLinks.background_color = ""
interactiveA.id = "interactive2"
interactiveA.cl = 'button buttonYellow'
interactiveA.background_color = ""
contactA.cl = 'button buttonRedRing'
contactA.src = 'https://www.drebarrera.com/contact/'
