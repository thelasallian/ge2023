// Get the container element
var btnContainer = document.getElementById("mb-vox-populi-button-grp");

// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName("custom-button");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

function showVoxPopYes() {
    var yes = document.getElementById("vox-populi-yes");
    var undecided = document.getElementById("vox-populi-undecided");
    var no = document.getElementById("vox-populi-no");

    yes.style.display = "flex";
    undecided.style.display = "none";
    no.style.display = "none";
}

function showVoxPopUndecided() {
    var yes = document.getElementById("vox-populi-yes");
    var undecided = document.getElementById("vox-populi-undecided");
    var no = document.getElementById("vox-populi-no");

    yes.style.display = "none";
    undecided.style.display = "flex";
    no.style.display = "none";
}

function showVoxPopNo() {
    var yes = document.getElementById("vox-populi-yes");
    var undecided = document.getElementById("vox-populi-undecided");
    var no = document.getElementById("vox-populi-no");

    yes.style.display = "none";
    undecided.style.display = "none";
    no.style.display = "flex";
}