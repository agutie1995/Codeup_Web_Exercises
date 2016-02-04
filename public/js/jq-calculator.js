$(document).ready(function() {
    'use strict';

    var leftDisplay = $('#leftTextBox');
    var middleDisplay = $('#middleTextBox');
    var rightDisplay = $('#rightTextBox');

    /* Add click events to buttons */
    $('.numButton').click(function(){
        var number = $(this).val();
        console.log(number);
    });

    $('.opButton').click(function(){
        var operator = $(this).val();
        console.log(operator);
    });

    /* Make values enter correct display box */
    function display (){
        console.log(this);
        if (middleDisplay.value == "") {
            leftDisplay.value += this.innerText
        } else {
            rightDisplay.value += this.innerText
        }
    }


    /* Clear when "C" is clicked */



    /* Evaluate equation */
    equalBtn.addEventListener('click', function equals () {
        if (middleDisplay.val() == "+"){
            leftDisplay.val() = parseFloat(leftDisplay.val()) + parseFloat(rightDisplay.val());
        } else if (middleDisplay.val() == "-"){
            leftDisplay.val() = parseFloat(leftDisplay.val()) - parseFloat(rightDisplay.val());
        } else if (middleDisplay.val() == "*"){
            leftDisplay.val() = parseFloat(leftDisplay.val()) * parseFloat(rightDisplay.val());
        } else if (middleDisplay.val() == "/"){
            leftDisplay.val() = parseFloat(leftDisplay.val()) / parseFloat(rightDisplay.val());
        }
        middleTextBox.val() = "";
        rightDisplay.val() = "";
    });


});