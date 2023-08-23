function displayAboutTheCover() {
    var header = document.getElementById("header");
    var aboutTheCover = document.getElementById("about-the-cover");

    // Hide header
    header.style.opacity = "0";
    header.style.pointerEvents = "none";

    // Display about the cover
    aboutTheCover.style.opacity = "1";
    aboutTheCover.style.pointerEvents = "all";
}

function hideAboutTheCover() {
    var header = document.getElementById("header");
    var aboutTheCover = document.getElementById("about-the-cover");

    // Hide about the cover
    aboutTheCover.style.opacity = "0";
    aboutTheCover.style.pointerEvents = "none";

    // Display header
    header.style.opacity = "1";
    header.style.pointerEvents = "all";
}