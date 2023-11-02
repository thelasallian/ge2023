// Typing animation for "Thoughts on a two-party system"
var typed = new Typed('#typed', {
    strings: ['Voter turnout in the last five years'],
    typeSpeed: 50,
    startDelay: 200,
    onComplete: function(self) {
        self.cursor.remove()
    }
});