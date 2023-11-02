// Wait for the document to be ready
$(document).ready(function () {
    // Select the dropdown element
    var $selectIssue = $("#select-issue");
    
    // Define a function to change candidate text color based on the selected issue
    function changeCandidateTextColor(selectedIssue) {
        // Loop through the candidates in fast-talk.json
        $.each(fastTalkData.candidates, function (index, candidate) {
            // Get the candidate element by their surname
            var $candidateElement = $("#" + candidate.surname);
            
            // Check the value for the selected issue for this candidate
            var issueValue = candidate[selectedIssue];
            
            // Define colors for "yes" and "no" values
            var imgYes = "assets/fast-talk/yes.svg";
            var imgNo = "assets/fast-talk/no.svg";
            
            // Update the text color based on the issue value
            if (issueValue === "yes") {
                $candidateElement.attr("src", imgYes);
                console.log("Changged")
            } else if (issueValue === "no") {
                $candidateElement.attr("src", imgNo);
            }
        });

        // Trigger animation
        $(".candidate-stand").addClass("scale-in-center");
        setTimeout(function(){
            $('.candidate-stand').removeClass('scale-in-center');
            $(".candidate-stand").css("opacity", "1");
        },1000);
    }
    
    // Attach a change event handler to the select dropdown
    $selectIssue.on("change", function () {
        // Get the selected issue
        var selectedIssue = $(this).val();
        
        // Change the candidate text color based on the selected issue
        changeCandidateTextColor(selectedIssue);
    });
    
    // Load the fast-talk.json data
    var fastTalkData;
    $.getJSON("json/fast-talk.json", function (data) {
        fastTalkData = data;
    });
});
