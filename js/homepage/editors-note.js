function toggleReadMore() {
    var readMoreSpan = document.querySelector('.read-more');
    var readMoreBtn = document.querySelector('#read-more-btn');

    if (window.innerWidth <= 425) {
        readMoreSpan.style.display = 'none';
        readMoreBtn.style.display = 'inline';
    } else {
        readMoreSpan.style.display = 'inline';
        readMoreBtn.style.display = 'none';
    }
}
toggleReadMore(); // Call the function initially to set the initial visibility based on screen size
window.addEventListener('resize', toggleReadMore); // Listen for window resize events to update visibility


function revealReadMore() {
    var readMoreSpan = document.querySelector('.read-more');
    var readMoreBtn = document.querySelector('#read-more-btn');

    if (readMoreSpan.style.display === 'none' || readMoreSpan.style.display === '') {
        readMoreSpan.style.display = 'inline';
        readMoreBtn.textContent = 'Read Less';
    } else {
        readMoreSpan.style.display = 'none';
        readMoreBtn.textContent = 'Read More';
    }
}


