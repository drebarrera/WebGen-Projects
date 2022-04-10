import modules as mx
from buttons import *

### Header 1
class header1:
    def __init__(self, logo_name, site_name, buttons=[], primary_color='white', accent_color='black', navbar='normal', logo_height='8vh', button_style='underline sharp', button_colors=None, button_width='auto', nav_switch='1000'):
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
        self.button_inverse = True if 'inverse' in button_style else False
        self.button_primary = button_colors.split()[0] if button_colors else self.primary
        self.button_accent = button_colors.split()[1] if button_colors else self.accent
        self.button_width = button_width
        self.navbar_rounded = False if navbar == 'normal' else True
        self.navbar_conditions = None if navbar == 'normal' else navbar
        self.nav_switch = [1000,750,500][min(range(len([1000,750,500])), key = lambda i: abs([1000,750,500][i]-int(nav_switch)))]

    def c(self, inadmissible, dynamic):
        ### OBJECTS ###
        header = mx.Nav()
        logo = mx.Image()
        title = mx.T()
        branding = mx.C()
        menubar = mx.C()
        menuicon = mx.Icon()
        x = mx.X()

        ### CONTENT ###       
        header.content = [[branding, menubar, menuicon]]
        branding.content = [logo, title]
        logo.src = self.logo_url
        logo.var__logo_height = self.logo_height
        title.content = self.site_name
        buttons = list()
        for b in range(len(self.buttons)):
            button_b = button(self.buttons[b][0],self.buttons[b][1],self.buttons[b][2],self.buttons[b][2],primary_color=self.button_primary,accent_color=self.button_accent,width=self.button_width,padding='1vh', radius=self.button_radius, underline=self.button_underline, inverse=self.button_inverse)
            button_b.id = 'navbutton'+str(b)
            button_b.cl = 'navbutton'
            buttons.append(button_b)
        menubar.content = buttons

        ### PROPERTIES ###
        header.cl = 'nav navtype1'
        header.tablecl = 'navtable navtype1table'
        header.background_color = self.primary
        header.var__accent_color = self.accent
        branding.cl = 'navbrand'
        logo.cl = 'navlogo'
        title.cl = 'navtitle'
        title.type = 'h1'
        menuicon.radius = '1'
        menuicon.width = '3'
        menuicon.id = 'navmenuicon'
        menubar.cl = 'navmenubar'
        if self.navbar_rounded: menubar.border_radius = self.navbar_conditions.split(' ')[0]
        if self.navbar_rounded: menubar.background_color = self.navbar_conditions.split(' ')[1]
        for x in [y for y in [1000, 750, 500] if y <= self.nav_switch]:
            exec('menubar.var__nav_display_' + str(x) + ' = "none"')
        
        ### IDENTIFIERS ###
        header.id = 'nav'
        header.tableid = 'navtabletype1'
        logo.id = 'navlogo'
        title.id = 'navtitle'
        
        return header.c(inadmissible, dynamic)
