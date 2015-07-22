<?php
session_start();
$sessionId = session_id();
var_dump($sessionId);

// if (!empty($_SESSION['LOGGED_IN_USER'])) {
//     $viewCount = $_SESSION['LOGGED_IN_USER'];
// } else {
//     header("Location: http://codeup.dev/login.php");
//     exit();
// }

// if (isset($_GET['logout']) && $_GET['logout'] == 'true'){
//     header("Location: http://codeup.dev/logout.php");
//     exit();	
// }
?>

<!DOCTYPE html>

<html>
<head>
    <title>Authorized</title>
</head>
<body>

    <h2 align="center">Login Successful</h2>
    <a href="?logout=true">Logout</a>

</body>
</html>