function displayAboutTheCover() {
    var aboutTheCover = document.getElementById("about-the-cover");

    
    aboutTheCover.style.opacity = "1";
    aboutTheCover.style.pointerEvents = "all";
}

function hideAboutTheCover() {
    var aboutTheCover = document.getElementById("about-the-cover");

    aboutTheCover.style.opacity = "0";
    aboutTheCover.style.pointerEvents = "none";
}