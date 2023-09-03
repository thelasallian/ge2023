const navSticky = document.getElementById("nav-sticky"); /* Sticky navbar */
const navDrawer = document.getElementById("nav-drawer"); /* Offcanvas vertical navbar */
const navAnchors = document.querySelectorAll(".nav-anchor"); /* All links in the navbar */
const greenLogo = document.getElementById("green-logo"); /* Green TLS logo in vertical navbar */

/**
 * This function toggles the nav drawer on and off, and the visibility
 * of the green TLS logo. Used in the hamburger menu (#hamburger-btn).
 */
function showNavDrawer() {
    navDrawer.classList.add("active"); // Toggle drawer visibility
    navSticky.classList.add("hidden"); // Toggle logo visibility
}

/**
 * This function explicity closes the nav drawer and makes the green
 * TLS logo visible.
 */
function closeNavDrawer() {
    navDrawer.classList.remove("active"); // Hide drawer
    navSticky.classList.remove("hidden"); // SHow green logo
}

/**
 * This block adds an event listener to each link in the navbar. If a link
 * is clicked, the nav drawer is closed and the green TLS logo is made visible.
 */
navAnchors.forEach(navLink => {
    navLink.addEventListener("click", function(event) {
        navDrawer.classList.remove("active"); // Hide drawer
        navSticky.classList.remove("hidden"); // Show green logo
    });
});

window.addEventListener("scroll", function(event) {
    navDrawer.classList.remove("active"); // Hide drawer
    navSticky.classList.remove("hidden"); // Show green logo
});