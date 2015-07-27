<?php
// var_dump($_REQUEST);

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
?>