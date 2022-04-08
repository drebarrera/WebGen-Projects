import modules as mx

### Header 1
class header1:
    def __init__(self, logo_name, site_name):
        self.logo_url = 'images/' + logo_name
        self.site_name = site_name

    def c(self, inadmissible, dynamic):
        ### OBJECTS ###
        header = mx.Nav(True)
        logo = mx.Image()
        title = mx.T()
        branding = mx.C(True)
        x = mx.X()

        ### CONTENT ###       
        header.content = [[branding, x]]
        branding.content = [logo, title]
        logo.src = self.logo_url
        title.content = self.site_name

        ### PROPERTIES ###
        header.cl = 'nav navtype1'
        header.tablecl = 'navtable navtype1table'
        branding.cl = 'navbrand'
        logo.cl = 'navlogo'
        title.cl = 'navtitle'
        title.type = 'h1'
        
        ### IDENTIFIERS ###
        header.id = 'nav'
        header.tableid = 'navtable'
        logo.id = 'navlogo'
        title.id = 'navtitle'
        
        return header.c(inadmissible, dynamic)
