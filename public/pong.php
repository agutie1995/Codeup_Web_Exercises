<?php

require '../Input.php';

function pageController()
{
    // Initialize an empty data array.
    $data = [];

    // Add data to be used in the html view.
    $data['points'] = 0;

    if(Input::has('score')){
        if (Input::get('score') == 'hit'){
            $count = Input::get('count');
            $count++;
            $data['points'] = $count;
        } else if (Input::get('score') == 'miss'){
            //game over
            $data['points'] = 0;
            echo "GAME OVER";
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
	<title>Pong</title>
    <link rel="stylesheet" href="/css/pong.css">

</head>
<body>
	<h1>Pong</h1>
    <h2><?= $points ?></h2>

    <a href="?score=miss&count=<?=$points ?>">MISS</a>
    <a href="ping.php?score=hit&count=<?=$points ?>">HIT</a>

</body>
</html>

<!-- Each page should have 2 links, HIT and MISS
If you click hit, a counter increases and the game continues
If you click miss, that player missed and the game is over
Links in the ping page should go to the pong page and vice versa -->