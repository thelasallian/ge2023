// Wait for the document to be ready
$(document).ready(function () {
    // Select the dropdown element
    var $selectIssue = $("#select-issue");
    
    // Define a function to change candidate text color based on the selected issue
    function changeCandidateTextColor(selectedIssue) {
        // Loop through the candidates in fast-talk.json
        $.each(fastTalkData.candidates, function (index, candidate) {
            // Get the candidate element by their surname
            var $candidateElement = $("#" + candidate.identifier);
            
            // Check the value for the selected issue for this candidate
            var issueValue = candidate[selectedIssue];
            
            // Define colors for "yes" and "no" values
            var imgYes = "assets/fast-talk/yes.svg";
            var imgNo = "assets/fast-talk/no.svg";
            var img0_0 = "assets/fast-talk/0-0.svg";
            var img0_5 = "assets/fast-talk/0-5.svg";
            var img1_0 = "assets/fast-talk/1-0.svg";
            var img1_5 = "assets/fast-talk/1-5.svg";
            var img2_0 = "assets/fast-talk/2-0.svg";
            var img2_5 = "assets/fast-talk/2-5.svg";
            var img3_0 = "assets/fast-talk/3-0.svg";
            var img3_5 = "assets/fast-talk/3-5.svg";
            var img4_0 = "assets/fast-talk/4-0.svg";
            
            // Update the text color based on the issue value
            // if (issueValue === "yes") {
            //     $candidateElement.attr("src", imgYes);
            //     console.log("Changged")
            // } else if (issueValue === "no") {
            //     $candidateElement.attr("src", imgNo);
            // }

            switch (issueValue) {
                case "yes": $candidateElement.attr("src", imgYes);  break;
                case "no":  $candidateElement.attr("src", imgNo);   break;
                case 0: $candidateElement.attr("src", img0_0); break;
                case 0.5: $candidateElement.attr("src", img0_5); break;
                case 1: $candidateElement.attr("src", img1_0); break;
                case 1.5: $candidateElement.attr("src", img1_5); break;
                case 2: $candidateElement.attr("src", img2_0); break;
                case 2.5: $candidateElement.attr("src", img2_5); break;
                case 3: $candidateElement.attr("src", img3_0); break;
                case 3.5: $candidateElement.attr("src", img3_5); break;
                case 4: $candidateElement.attr("src", img4_0); break;
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

        var selectedOptgroup = $(this).find(':selected').parent('optgroup');
        
        if (selectedOptgroup.attr('id') === 'graded-optgroup') {
            // Hide elements with class "cap"
            $(".cap").hide();
        } else {
            // Show elements with class "eb" and "cap"
            $(".eb, .cap").show();
        }
        
        // Change the candidate text color based on the selected issue
        changeCandidateTextColor(selectedIssue);
    });
    
    // Get JSON data and it as an associative array into a variable
    var fastTalkData = {};
    $.ajax({
        url: "https://raw.githubusercontent.com/thelasallian/ge2023/main/json/fast-talk.json",
        // url: "json/fast-talk.json",
        async: false,
        dataType: 'json',
        success: function (data) {
            fastTalkData = data;
        }
    });
});
