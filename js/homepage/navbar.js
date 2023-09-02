const navDrawer = document.getElementById("nav-drawer"); /* Offcanvas vertical navbar */
const navAnchors = document.querySelectorAll(".nav-anchor"); /* All links in the navbar */
const greenLogo = document.getElementById("green-logo"); /* Green TLS logo in vertical navbar */

/**
 * This function toggles the nav drawer on and off, and the visibility
 * of the green TLS logo. Used in the hamburger menu (#hamburger-btn).
 */
function showNavDrawer() {
    navDrawer.classList.toggle("active"); // Toggle drawer visibility
    greenLogo.classList.toggle("hidden"); // Toggle logo visibility
}

/**
 * This function explicity closes the nav drawer and makes the green
 * TLS logo visible.
 */
function closeNavDrawer() {
    navDrawer.classList.remove("active"); // Hide drawer
    greenLogo.classList.remove("hidden"); // SHow green logo
}

// If a link was clicked, hide the navbar
/**
 * This block adds an event listener to each link in the navbar. If a link
 * is clicked, the nav drawer is closed and the green TLS logo is made visible.
 */
navAnchors.forEach(navLink => {
    navLink.addEventListener("click", function(event) {
        navDrawer.classList.remove("active"); // Hide drawer
        greenLogo.classList.remove("hidden"); // Show green logo
    });
});