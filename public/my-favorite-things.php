<?php

function pageController()
{
    // Initialize an empty data array.
    $data[] = array();

    // Add data to be used in the html view.
    $data['favoriteThings'] = array('Starbucks', 'Netflix', 'Shoes', 'Chick-Fil-A', 'Books', 'Blue Bell Ice Cream');

    // Return the completed data array.
    return $data;    
}

extract(pageController());

?>

<!DOCTYPE html>
<html>
<head>
    <title>My Favorite Things</title>
    
    <link rel="stylesheet" href="/css/favorite-things.css">
</head>
<body>
    <div>
        <h1>My Favorite Things</h1>
        <ol>
        <? foreach ($favoriteThings as $thing): ?>
            <li><?= $thing; ?></li>
        <? endforeach; ?>

        </ol>
    </div>
</body>
</html>