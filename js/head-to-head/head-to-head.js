$(document).ready(function() {
    $("#cp-button").click(function() {
        $("#h2h-EB").removeClass("visible-grid");
        $("#h2h-CP").addClass("visible-grid");
        
        $("#eb-button").removeClass("button-green-active");
        $("#cp-button").addClass("button-green-active");
    });

    $("#eb-button").click(function() {
        $("#h2h-CP").removeClass("visible-grid");
        $("#h2h-EB").addClass("visible-grid");

        $("#cp-button").removeClass("button-green-active");
        $("#eb-button").addClass("button-green-active");
    });
});