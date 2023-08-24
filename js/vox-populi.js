/**
 * This block of code will ensure all photos are displayed when the screen width
 * is large enough, even if it was previously small and some photos were initially hidden.
 */
const mediaQuery = window.matchMedia("(min-width: 769px)");
const photos = document.querySelectorAll(".grid-item");
const buttons = document.querySelectorAll(".vox-btn");

function setPhotosDisplay() {
    if (mediaQuery.matches) { //If the screen width is >= 768px
        // Display all photos
        photos.forEach(photo => {
            photo.style.display = "block";
        });
    } else { // If the screen width is < 768px
        // Display only the yes photos, by default
        photos.forEach(photo => {
            photo.style.display = photo.classList.contains("yes") ? "block" : "none";
        });

        // The yes button is active, by default
        buttons.forEach(button => {
            if (button.id === "yes") {
                button.classList.add("active");
            } else {
                button.classList.remove("active");
            }
        });
    }
}

// Listen for changes in screen width. If there are changes, run the setPhotosDisplay function
// to decide which photos are displayed.
mediaQuery.addEventListener("change", setPhotosDisplay);
setPhotosDisplay(); // Initial call


/**
 * This block of code will filter the grid items based on the button clicked.
 */

// For each Vox Populi button, add an event listener that will filter the grid items
// and set the active class if clicked.
buttons.forEach(button => {
    button.addEventListener("click", () => {
        const className = button.id; // Either "yes", "no", or "undecided"

        // For each photo, if it matches the stand (yes/no/undecided)
        // of the button clicked, display it. Otherwise, hide it.
        photos.forEach(photo => {
            photo.style.display = photo.classList.contains(className) ? "block" : "none";
        });

        // For each button, if it is the button clicked, add the "active" class.
        buttons.forEach(button => {
            if (button.id === className) {
                button.classList.add("active");
            } else {
                button.classList.remove("active");
            }
        })
    });
});
