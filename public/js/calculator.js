'use strict';

//declare buttons
var oneBtn = document.getElementById('numOne');
var twoBtn = document.getElementById('numTwo');
var threeBtn = document.getElementById('numThree');
var fourBtn = document.getElementById('numFour');
var fiveBtn = document.getElementById('numFive');
var sixBtn = document.getElementById('numSix');
var sevenBtn = document.getElementById('numSeven');
var eightBtn = document.getElementById('numEight');
var	nineBtn = document.getElementById('numNine');
var zeroBtn = document.getElementById('numZero');
var addBtn = document.getElementById('add')
var subtrtactBtn = document.getElementById('subtract')
var multiplyBtn = document.getElementById('multiply')
var divideBtn = document.getElementById('divide')
var equalBtn = document.getElementById('equal')
var clearBtn = document.getElementById('clear')

var leftDisplay = document.getElementById('leftTextBox');
var middleDisplay = document.getElementById('middleTextBox');
var rightDisplay = document.getElementById('rightTextBox');

//numbers in display

//calc functions in display
addBtn 

//clear display when 'C' is clicked on

clearBtn.addEventListener(click, function(){
	document.getElementById('leftTextBox').value = 0;
	document.getElementById('middleTextBox').value = 0;
	document.getElementById('rightTextBox').value = 0;
});

//equal - display answer in leftTextBox

//add and subtract

//multiply and divide
