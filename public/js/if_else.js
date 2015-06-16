// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'blue'; // TODO: change this to your favorite color from the list

// TODO: Create a block of if/else statements to check for every color except indigo and violet.
if (favorite) {
	console.log(Blue is my favorite color.)
} else (color == 'red', 'orange', 'yellow', 'green') {
	console.log(This is not my favorite color.)
}


// TODO: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.
if (favorite) {
	message = "Blue is the color of the sky."
} else (color = 'red') {
	message = "Red is the color of roses."
} else (color = 'orange') {
	message = "Orange is the color of a basketball."
} else (color = 'yellow') {
	message = "Yellow is the color of the sun."
} else (color = 'green') {
	message = "Green is the color of grass."
}

// TODO: Have a final else that will catch indigo and violet.
// TODO: In the else, log: I do not know anything by that color.
if (favorite) {
	console.log(Blue is my favorite color.)
} else (color == 'red', 'orange', 'yellow', 'green', 'indigo', 'violet') {
	console.log(I do not know anything by that color.)
}

// TODO: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.
if (favorite) {
	message = "Yes, this is it!"
} else {
	message = "Nope. Not it."
}
