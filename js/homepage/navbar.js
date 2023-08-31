// When clicking the menu button, toggle the visibility of the links container
const linksContainer = document.getElementById("links-container");
const greenLogo = document.getElementById("green-logo");

function showLinks() {
    linksContainer.classList.toggle("active");
    greenLogo.style.opacity = "0";
}

// Show only the navbar when beyond the header
const header = document.querySelector('header');
const nav = document.querySelector('nav');

const headerHeight = header.offsetHeight;

window.addEventListener('scroll', () => {
    const scrollPos = window.scrollY;

    if (scrollPos > headerHeight) {
        nav.classList.add("active");
    } else {
        nav.classList.remove("active");
        linksContainer.classList.remove("active");
    }
});

// Close the navbar on click
function closeLinks() {
    linksContainer.classList.remove("active");
    greenLogo.style.opacity = "1";
}