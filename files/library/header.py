import modules as mx
from buttons import *

### Menu
class menu:
    def __init__(self, buttons=[], primary_color='white', accent_color='black', button_style='underline sharp', button_colors=None):
        self.buttons = buttons
        self.primary = primary_color
        self.accent = accent_color
        self.button_underline = True if 'underline' in button_style else False
        if 'rounded' in button_style: self.button_radius = 'rounded'
        elif 'sharp' in button_style: self.button_radius = 'sharp'
        else: self.button_radius = button_style.split(' ')[0]
        self.button_inverse = False if 'inverse' in button_style else True
        self.button_primary = button_colors.split()[0] if button_colors else self.primary
        self.button_accent = button_colors.split()[1] if button_colors else self.accent

    def c(self, inadmissible, dynamic):
        ### OBJECTS ###
        headermenu = mx.Nav()

        ### CONTENT ###
        buttons = list()
        for b in range(len(self.buttons)):
            button_b = button(self.buttons[b][0],self.buttons[b][1],self.buttons[b][2],self.buttons[b][2],primary_color=self.accent,accent_color=self.button_accent,width='92%',padding='1vh',radius=self.button_radius,underline=self.button_underline,inverse=self.button_inverse)
            button_b.id = 'navmenubutton'+str(b)
            button_b.cl = 'navmenubutton'
            buttons.append([button_b])
        headermenu.content = buttons
        headermenu.id = 'headermenu'
        headermenu.background_color = self.accent
        headermenu.var__accent_color = self.primary
        headermenu.position = 'relative'
        headermenu.tableid = 'headermenutable'
        return headermenu.c(inadmissible, dynamic)
        

### Header 1
class header:
    def __init__(self, logo_name, site_name, buttons=[], base_url='', position='fixed', primary_color='white', accent_color='black', navbar='normal', logo_height='75px', button_style='underline sharp', button_colors=None, button_width='auto', nav_switch='1000', underline=False):
        self.logo_url = 'images/' + logo_name
        self.site_name = site_name
        self.buttons = buttons
        self.primary = primary_color
        self.accent = accent_color
        self.logo_height = logo_height
        self.button_underline = True if 'underline' in button_style else False
        if 'rounded' in button_style: self.button_radius = 'rounded'
        elif 'sharp' in button_style: self.button_radius = 'sharp'
        else: self.button_radius = button_style.split(' ')[0]
        self.button_style = button_style
        self.button_colors = button_colors
        self.button_inverse = True if 'inverse' in button_style else False
        self.button_primary = button_colors.split()[0] if button_colors else self.primary
        self.button_accent = button_colors.split()[1] if button_colors else self.accent
        self.button_width = button_width
        self.navbar_rounded = False if navbar == 'normal' else True
        self.navbar_conditions = None if navbar == 'normal' else navbar
        self.nav_switch = [1000,750,500][min(range(len([1000,750,500])), key = lambda i: abs([1000,750,500][i]-int(nav_switch)))]
        self.position = position
        self.underline = '2px' if underline else '0px'
        self.base_url = base_url
        self.header_container = mx.C()

    def generate_header(self):
        ### OBJECTS ###
        header = mx.Nav()
        logo = mx.Image()
        title = mx.T()
        branding = mx.Link()
        menubar = mx.C()
        menuicon = mx.Menu()
        x = mx.X()
        navmenu = menu(self.buttons, primary_color=self.primary, accent_color=self.accent, button_style=self.button_style, button_colors=self.button_colors)

        ### CONTENT ###
        self.header_container.content = [header, navmenu]
        header.content = [[branding, menubar, menuicon]]
        branding.content = [logo, title]
        logo.src = self.logo_url
        title.content = self.site_name
        buttons = list()
        for b in range(len(self.buttons)):
            button_b = button(self.buttons[b][0],self.buttons[b][1],self.buttons[b][2],self.buttons[b][2],primary_color=self.button_primary,accent_color=self.button_accent,width=self.button_width,padding='1vh',radius=self.button_radius,underline=self.button_underline,inverse=self.button_inverse)
            button_b.id = 'navbutton'+str(b)
            button_b.cl = 'navbutton'
            buttons.append(button_b)
        menubar.content = buttons

        ### PROPERTIES ###
        self.header_container.position = self.position
        header.cl = 'nav'
        header.tablecl = 'navtable'
        header.background_color = self.primary
        self.header_container.var__accent_color = self.accent
        self.header_container.var__border_width = self.underline
        header.position = 'relative'
        branding.src = self.base_url
        branding.cl = 'navbrand'
        logo.cl = 'navlogo'
        logo.var__logo_height = self.logo_height
        title.cl = 'navtitle'
        title.type = 'h1'
        menuicon.radius = '1'
        menuicon.width = '3'
        menuicon.custom = '<animate xlink:href="#my-circle" attributeName="cx" from="50" to="450" dur="1s" begin="click" fill="freeze" />'
        menuicon.id = 'navmenuicon'
        menubar.cl = 'navmenubar'
        if self.navbar_rounded: menubar.border_radius = self.navbar_conditions.split(' ')[0]
        if self.navbar_rounded: menubar.background_color = self.navbar_conditions.split(' ')[1]
        for x in [1000, 750, 500]:
            if x <= self.nav_switch:
                exec('self.header_container.var__nav_display_' + str(x) + ' = "none"')
                exec('self.header_container.var__menu_display_' + str(x) + ' = "flex"')
            else:
                exec('self.header_container.var__nav_display_' + str(x) + ' = "flex"')
                exec('self.header_container.var__menu_display_' + str(x) + ' = "none"')
        
        ### IDENTIFIERS ###
        header.id = 'nav'
        header.tableid = 'navtabletype1'
        logo.id = 'navlogo'
        title.id = 'navtitle'

    def c(self, inadmissible, dynamic):
        return self.header_container.c(inadmissible, dynamic)
