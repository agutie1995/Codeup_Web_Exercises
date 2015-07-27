<?php
require_once 'function.php';
require_once '../Auth.php';

session_start();
$sessionId = session_id();

$LOGGED_IN_USER = false;


$username = inputHas('username') ? escape(strtolower($_POST['username'])) == "guest" : '';
$password = password_verify('password', Auth::$pass);

Auth::attempt($username, $password);

// if (inputHas('username') && inputHas('password')){
//     if ($username && $password){
//         $_SESSION["LOGGED_IN_USER"] = $_POST["username"];
//         //Redirect browser
//         header("Location: http://codeup.dev/authorized.php");
//         exit();
//     } else {
//         echo "Login Failed.";
//     }
// }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <link rel="stylesheet" href="/css/login.css">
</head>
<body>

    <h2>Login</h2>
    <div>
        <form method="POST">
            <input id="username" type="text" name="username" placeholder="Username" autofocus><br>
            <input id="password" type="password" name="password" placeholder="Password"><br>
            <button type="submit">Login</button>
        </form>
    </div>

</body>
</html>

<!-- Open the login.php page and add the appropriate code to initialize a session variable LOGGED_IN_USER to the username of the logged in user if the correct username and password is specified.
Add a check to the login.php page to see if the user is logged in and then if they are, redirect to the authorized.php page instead of showing the login page.
Add a check to the authorized.php page to redirect to the login.php page if a user is not logged in. If they are, display their username after the authorized message.
Add a logout.php file. Use the endSession method from the examples in this lesson to perform a logout when that page is accessed, and then redirect to the login page.
Add a link to the authorized.php page that goes to logout.php.
Test logging in, logging out, and accessing the authorized page without being logged in to make sure everything works as expected. -->
