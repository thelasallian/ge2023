// Typing animation for "Thoughts on a two-party system"
var typed = new Typed('#typed', {
    strings: ['Thoughts on a two-party system'],
    typeSpeed: 50,
    onComplete: function(self) {
        self.cursor.remove()
    }
});