<?php
var_dump($_GET);

function pageController()
{
    // Initialize an empty data array.
    $data = [];

    // Add data to be used in the html view.
    $data['counter'] = 0;

    if(isset($_GET['direction'])){
        if ($_GET['direction'] == 'up'){
            $_GET['count']++;
            $data['counter'] = $_GET['count'];
        } else if ($_GET['direction'] == 'down'){
            $_GET['count']--;
            $data['counter'] = $_GET['count'];
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
    <title>Counter</title>
</head>
<body>

    <h2><?= $counter ?></h2>

    <a href="?direction=up&count=<?=$counter ?>">Up</a>
    <a href="?direction=down&count=<?=$counter ?>">Down</a>

</body>
</html>

<!-- Add two links, one that says up and another that says down
Add an h2 that shows a number representing the current counter value (start at 0)
When up is clicked, the counter value should increase. When down is clicked, it should decrease
Up and down links will be GET requests back to the counter page itself
Add the PHP code needed to make that happen -->