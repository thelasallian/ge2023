function displayAboutTheCover() {
    var logo = document.getElementById("logo-wrapper");
    var text = document.getElementById("header-text-wrapper");
    var aboutTheCover = document.getElementById("about-the-cover");
    var art = document.getElementById("cover-art-img");

    logo.style.display = "none";
    text.style.display = "none";
    aboutTheCover.style.display = "flex";
    art.classList.add("py-0");
}

function hideAboutTheCover() {
    var logo = document.getElementById("logo-wrapper");
    var text = document.getElementById("header-text-wrapper");
    var aboutTheCover = document.getElementById("about-the-cover");
    var art = document.getElementById("cover-art-img");

    logo.style.display = "block";
    text.style.display = "block";
    aboutTheCover.style.display = "none";
    art.classList.remove("py-0");
}