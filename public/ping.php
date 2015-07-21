<?php

function pageController()
{
    // Initialize an empty data array.
    $data = [];

    // Add data to be used in the html view.
    $data['points'] = 0;

    if(isset($_GET['score'])){
        if ($_GET['score'] == 'hit'){
            $_GET['count']++;
            $data['points'] = $_GET['count'];
        } else if ($_GET['score'] == 'miss'){
            //game over
            $data['points'] = "GAME OVER";
        }
    }
    // Return the completed data array.
    return $data;    
}

extract(pageController());

?>

<!DOCTYPE html>
<html>
<head>
    <title>Ping</title>
    <link rel="stylesheet" href="/css/ping.css">

</head>
<body>
    <h1>Ping</h1>
    <h2><?= $points ?></h2>

    <a href="?score=miss&count=<?=$points ?>">MISS</a>
    <a href="pong.php?score=hit&count=<?=$points ?>">HIT</a>

</body>
</html>

<!-- Each page should have 2 links, HIT and MISS
If you click hit, a counter increases and the game continues
If you click miss, that player missed and the game is over
Links in the ping page should go to the pong page and vice versa -->