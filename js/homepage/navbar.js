// When clicking the menu button, toggle the visibility of the links container
const navDrawer = document.getElementById("nav-drawer");
const greenLogo = document.getElementById("green-logo");

function showNavDrawer() {
    navDrawer.classList.toggle("active");
    greenLogo.classList.toggle("hidden");
}

// Close the navbar on click
function closeNavDrawer() {
    navDrawer.classList.remove("active");
    greenLogo.classList.remove("hidden");
}

// If a link was clicked, hide the navbar
const navAnchors = document.querySelectorAll(".nav-anchor");

navAnchors.forEach(navLink => {
  navLink.addEventListener("click", function(event) {
    // Remove the "active" class from the navDrawer
    navDrawer.classList.remove("active");
    greenLogo.classList.remove("hidden");
  });
});