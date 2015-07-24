<?php
$heading = "This is the header";
$footing = "This is the footer";
$navbar = "About Contact Page3";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Include</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>
<body>
    <div>
        <? include 'template/navbar.php'; ?>
        <? include 'template/header.php'; ?>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>

        <? include 'template/footer.php'; ?>
    </div>

</body>
</html>