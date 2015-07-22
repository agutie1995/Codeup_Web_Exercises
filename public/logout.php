<?php
session_start();
if (isset($_GET['reset']) && $_GET['reset'] == 'true'){
    endSession();
    session_destroy();
    header("Location: http://codeup.dev/login.php");
    exit(); 
}

function endSession()
{
    $_SESSION = array();
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Logout</title>
</head>
<body>
    <h2 align="center">You have been successfully logged out</h2>
    <a href="?reset=true">Login Again?</a>

</body>
</html>