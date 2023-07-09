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