<?php
var_dump($_REQUEST);

// inputHas($key): returns true or false based on whether the key is available.
function inputHas($key)
{
	if (isset($_REQUEST[$key])){
		return true;
	} else{
		return false;
	}
}

// inputGet($key): returns the value specified by the key, or null if the key is not set.
function inputGet($key)
{
	if (isset($_REQUEST[$key])){
		return $_REQUEST[$key];
	} else{
		return null;
	}
}

// escape($input): returns the input as a safely escaped string.
function escape($input)
{
	return htmlspecialchars(strip_tags($input));
}

//Now, go back to the ping/pong and user login lessons from PHP with HTML and require the functions file you created.
//Use the input wrapper functions you created in place of accessing $_GET or $_POST directly.
//Also, use the escape function anywhere you need to echo user input
?>