<?php
//list of 10 nouns and 10 adjectives
//seclect random word from each to creat one name

function serverNameGenerator()
{
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
        'Gandalf'
    );
    
    $randAdj = $adjectives[mt_rand(0, count($adjectives) -1)];
    $randNoun = $nouns[mt_rand(0, count($nouns) -1)];
    $serverName = "{$randAdj} {$randNoun}";
    return $serverName;
}

function pageController()
{
    // Initialize an empty data array.
    $data = array();

    // Add data to be used in the html view.
    $data['serverName'] = serverNameGenerator();


    // Return the completed data array.
    return $data;    
}
extract(pageController());

?>

<html>
<head>
    <title>Sever Name Generator</title>

    <link rel="stylesheet" href="/css/server-name-generator.css">
</head>
<body>
    <h1>SERVER NAME GENERATOR</h1>
    <h3><?= $serverName; ?></h3>
</body>
</html>