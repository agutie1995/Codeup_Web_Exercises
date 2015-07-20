<?php

$favoriteThings = array('Starbucks', 'Netflix', 'Shoes', 'Chick-Fil-A', 'Books', 'Blue Bell Ice Cream');

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
        <?php foreach ($favoriteThings as $thing) { ?>
            <li><?php echo $thing; ?></li>
        <?php } ?>

        </ol>
    </div>
</body>
</html>