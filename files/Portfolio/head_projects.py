import modules as mx

class Header():
    def __init__(self, title, title_url, button_content, button_urls, onclick_functions):
        self.title = title
        self.title_url = title_url
        self.num_buttons = len(button_content)
        self.content = button_content
        self.urls = button_urls
        self.onclick_f = onclick_functions
        if len(self.urls) != self.num_buttons or len(self.onclick_f) != self.num_buttons:
            print('[!!!] Uneven list size. Make sure that button_content, button_urls, and onclick_functions are the same size.') 

    def c(self, inadmissible, dynamic):
        ### OBJECTS ###
        nav = mx.C()
        nav_center = mx.C()
        menu = mx.C()

        ### TITLE CONSTRUCTION ###
        if self.title_url != None:
            htitle = mx.Link()
        else:
            htitle = mx.C()
        htitleT = mx.T()
        htitleT.content = self.title
        htitle.content = [htitleT]
        htitle.id = "htitle"

        ### BUTTON CONSTRUCTION ###
        buttons = list()
        for b_ind in range(self.num_buttons):
            if self.urls[b_ind] != None:
                button = mx.Link()
                button.src = self.urls[b_ind]
            else:
                button = mx.C()
                if self.onclick_f[b_ind] != None:
                    button.onclick = self.onclick_f[b_ind]
                    button.target = "_blank"
            buttonT = mx.T()
            buttonT.content = self.content[b_ind]
            button.content = [buttonT]
            button.cl = "button"
            buttons.append(button)
        menu.content = buttons

        ### CONTENT ###
        # Nav
        nav.content = [nav_center]
        nav_center.content = [htitle, menu]
        
        ### PROPERTIES ###
        nav.id = "nav"
        nav.background_color = "#fefefe"
        nav_center.id = "nav_center"
        menu.id = "menu"

        return nav.c(inadmissible, dynamic)
