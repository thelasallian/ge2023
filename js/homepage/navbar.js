// When clicking the menu button, toggle the visibility of the links container
const linksContainer = document.getElementById("links-container");
const greenLogo = document.getElementById("green-logo");

function showLinks() {
    linksContainer.classList.toggle("active");
    greenLogo.classList.toggle("hidden");
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
    greenLogo.classList.remove("hidden");
}

// If a link was clicked, hide the navbar
const navAnchors = document.querySelectorAll(".nav-anchor");

navAnchors.forEach(navLink => {
  navLink.addEventListener("click", function(event) {
    // Remove the "active" class from the linksContainer
    linksContainer.classList.remove("active");
    greenLogo.classList.remove("hidden");
  });
});