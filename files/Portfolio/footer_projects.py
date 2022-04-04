import modules as mx

class Footer():
    def __init__(self, title):
        self.title = title

    def c(self, inadmissible, dynamic):
        ### OBJECTS ###
        footer = mx.C()
        footer_title = mx.T()
        footer_center = mx.C()
        footer_left = mx.C()
        footer_left_content = mx.X()

        ### CONTENT ###
        footer.content = [footer_center, footer_title]
        footer_title.content = self.title
        footer_center.content = [footer_left]
        footer_left.content = [footer_left_content]
        footer_left_content.content = 'Designed by Dre\n<a href="https://www.drebarrera.com/"> | Dre Barrera</a>\n<a href="https://www.drebarrera.com/contact/"> | Contact</a>\n<a href="https://www.drebarrera.com/projects"> | Projects</a>'

        ### PROPERTIES ###
        footer.id = "footer"
        footer.color = "white"
        footer.background_color = "rgba(60,60,60,1)"
        footer.bottom = "0"
        footer.display = "flex"
        footer.justify_content = "center"
        footer.align_items = "center"
        footer_title.id = "footer_title"
        footer_title.color = "white"
        footer_title.position = "absolute"
        footer_center.id = "footer_center"
        footer_center.display = "flex"
        footer_center.align_content = "center"
        footer_left.float = "left"
        footer_left.clear = "right"
        footer_left.white_space = "pre-wrap"
        return footer.c(inadmissible, dynamic)
