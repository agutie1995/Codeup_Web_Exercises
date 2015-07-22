<?php

$name = isset($_POST['name']) ? $_POST['name'] : '';
$number = isset($_POST['number']) ? $_POST['number'] : '';

?>

<!DOCTYPE html>
<html>
<head>
	<title>POST Results</title>
</head>
<body>
    <h2>Name</h2>
    <p><?php echo htmlspecialchars(strip_tags($name)); ?></p>
    <h2>Number</h2>
    <p><?php echo htmlspecialchars(strip_tags($number)); ?></p>
    <a href="form-example.php">Back</a>
</body>
</html>
<!-- Try injecting some malicious input into the form and see what happens.
Update all code where user input is displayed to use htmlspecialchars() and strip_tags() to prevent malicious inputs.
Test your updates with HTML and JavaScript to make sure your application is secure. -->