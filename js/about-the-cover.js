function displayAboutTheCover() {
    var logo = document.getElementById("logo-wrapper");
    var text = document.getElementById("header-text-wrapper");
    var aboutTheCover = document.getElementById("about-the-cover");

    logo.style.display = "none";
    text.style.display = "none";
    aboutTheCover.style.display = "flex";
}

function hideAboutTheCover() {
    var logo = document.getElementById("logo-wrapper");
    var text = document.getElementById("header-text-wrapper");
    var aboutTheCover = document.getElementById("about-the-cover");

    logo.style.display = "block";
    text.style.display = "block";
    aboutTheCover.style.display = "none";
}