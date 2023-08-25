// Typing animation for "On different pages"
var typed = new Typed('#typed', {
    strings: ['On different pages'],
    typeSpeed: 100,
    onComplete: function(self) {
        self.cursor.remove()
    }
});