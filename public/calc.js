$(document).ready(function() {

    // Replace a character at a certain index in a string with a different character.
    String.prototype.replaceAt = function(index, character) {
        return this.substr(0, index) + character + this.substr(index + character.length);
    }

    // Has the user clicked the "=" button?
    var clickedEqual = false;

    // What happens when a user clicks a number or operation?
    $(".number, .operation").click(function() {
        // The value of the results element @ the top.
        var results = $("#results").val();

        // The user's clicked "=" AND the button they just clicked is a number?
        if (clickedEqual && $(this).hasClass("number")) {
            // Need to reset the results & place the current value of results into
            // the section for the previous value.
            $("#prev").text(results);
            results = "";
            // Reset the clickedEqual var as well.
            clickedEqual = false;
        } else if (clickedEqual) {
            // TODO
        }

        // What's the text of the button that was clicked?
        var text = $(this).text();

        // How to handle the text if the button was an operation.
        if ($(this).hasClass("operation")) {
            // If the button clicked has a value that is different than the symbol displayed.
            if ($(this).attr("value") != undefined) {
                text = " " + $(this).attr("value") + " ";
            } else {
                text = " " + text + " ";
            }
        }

        // Concatenate the results string w/ the text of the button clicked.
        results += text;

        // Set the results box to the new value.
        $("#results").val(results);
    });
    
    // What to do if the user clicks "=".
    $("#equals").click(function() {
        var results = $("#results").val();
        clickedEqual = true;

        // Check every character in the results string for specific ones.
        for (var i = 0; i < results.length; i++) {
            // Replace x with * because javascript doesn't think 'x' means multiplication.
            if (results[i] == "x") {
                results = results.replaceAt(i, "*");
            // Replace division symbols with slashes, because that's what javascript thinks division means.
            } else if (results[i] == String.fromCharCode(247)) {
                results = results.replaceAt(i, "/");
            }
        }

        $("#results").val(eval(results));
    });

    // What to do if the user clicks the "clear" button.
    $("#clear").click(function() {
        $("#prev").text($("#results").val());
        $("#results").val("");
    });
});