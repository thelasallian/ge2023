// Typing animation for "Fast Talk"
var typed = new Typed('#typed', {
    strings: ['Head to Head'],
    typeSpeed: 100,
    startDelay: 200,
    onComplete: function(self) {
        self.cursor.remove()
    }
});