import modules as mx

### OBJECTS ###
nav = mx.C()
nav_center = mx.C()
menu = mx.C()
htitleA = mx.Link()
htitleT = mx.T()
option1A = mx.C()
option1T = mx.T()
option2A = mx.C()
option2T = mx.T()
option3A = mx.Link()
option3T = mx.T()

### CONTENT ###
# Nav
nav.content = [nav_center]
nav_center.content = [htitleA, menu]

# Menu
menu.content = [option1A, option2A, option3A]

# Title
htitleA.content = [htitleT]
htitleT.content = 'WebGen'

# Options
option1A.content = [option1T]
option1T.content = 'Download'
option2A.content = [option2T]
option2T.content = 'Code'
option3A.content = [option3T]
option3T.content = 'Creator'

### PROPERTIES ###
nav.id = "nav"
nav.background_color = "#fefefe"
nav_center.id = "nav_center"
nav_center.background_color = ""
menu.id = "menu"
menu.background_color = ""
htitleA.id = "htitle"
htitleA.src = "https://www.drebarrera.com/webgen"
option1A.onclick = 'click1()'
option2A.onclick = 'click2()'
option3A.src = 'https://www.drebarrera.com/'
option3A.target = "_blank"
option1A.cl = "button"
option2A.cl = "button"
option3A.cl = "button"
