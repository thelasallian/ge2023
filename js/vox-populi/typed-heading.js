// Typing animation for "Thoughts on a two-party system"
var typed = new Typed('#typed', {
    strings: ['What projects or initiatives do you expect from the incoming USG Admin?'],
    typeSpeed: 40,
    startDelay: 200,
    onComplete: function(self) {
        self.cursor.remove()
    }
});