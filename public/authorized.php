<?php
require_once 'function.php';
require_once '../Auth.php';
require_once '../Input.php';

session_start();
$sessionId = session_id();

if (Auth::check()){
    $_SESSION['LOGGED_IN_USER'];
} else{
	header("Location: http://codeup.dev/login.php");
    exit();
}

if (Input::has('logout') && $_GET['logout'] == 'true'){
    header("Location: http://codeup.dev/logout.php");
    exit();	
}
?>

<!DOCTYPE html>

<html>
<head>
    <title>Authorized</title>

    <link rel="stylesheet" href="/css/authorized.css">
</head>
<body>

    <h2>Login Successful</h2>
    <a href="?logout=true">Logout</a>

</body>
</html>