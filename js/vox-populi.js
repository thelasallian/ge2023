const buttons = document.querySelectorAll(".vox-btn");
const photos = document.querySelectorAll(".grid-item");

// For each Vox Populi button, add an event listener that will filter the grid items
buttons.forEach(button => {
    button.addEventListener("click", () => {
        const className = button.id; // Either "yes", "no", or "undecided"

        // For each photo, if it matches the stand (yes/no/undecided)
        // of the button clicked, display it. Otherwise, hide it.
        photos.forEach(photo => {
            photo.style.display = photo.classList.contains(className) ? "block" : "none";
        });
    });
});
