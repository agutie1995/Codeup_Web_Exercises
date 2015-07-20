<?php
//list of 10 nouns and 10 adjectives
//seclect random word from each to creat one name

$adjectives = array(
    'Abominable',
    'Bewitched',
    'Zesty',
    'Fuzzy',
    'Suburban',
    'Minty',
    'Elastic',
    'Revolving',
    'Fiery',
    'Tepid',
    'Chocolate Covered'
);

$nouns = array(
    'Lightsaber',
    'Penguins',
    'Captain America',
    'Gatsby',
    'Jupiter',
    'Oxford Comma',
    'Snowman',
    'Minions',
    'Pluto',
    'Samuel L. Jackson',
    'Gandalf',
);

$randAdj = $adjectives[mt_rand(0, count($adjectives) -1)];
$randNoun = $nouns[mt_rand(0, count($nouns) -1)];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Sever Name Generator</title>

    <link rel="stylesheet" href="/css/server-name-generator.css">
</head>
<body>
    <!-- <h1>What's your server name?</h1> -->
    <h3><?php echo "$randAdj $randNoun" ?></h3>
</body>
</html>