// Typing animation for "Fast Talk"
var typed = new Typed('#typed', {
    strings: ['Fast Talk'],
    typeSpeed: 100,
    startDelay: 200,
    onComplete: function(self) {
        self.cursor.remove()
    }
});