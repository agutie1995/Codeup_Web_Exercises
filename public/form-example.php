<?php

var_dump($_POST);

?>

<!DOCTYPE html>
<html>
<head>
	<title>POST Example</title>
</head>
<body>
    <form method="POST" action="form-results.php">
        <label>Name</label>
        <input type="text" name="name"><br>
        <label>Number</label>
        <input type="text" name="number"><br>
        <input type="submit">
    </form>
</body>
</html>
<!-- Try injecting some malicious input into the form and see what happens.
Update all code where user input is displayed to use htmlspecialchars() and strip_tags() to prevent malicious inputs.
Test your updates with HTML and JavaScript to make sure your application is secure. -->