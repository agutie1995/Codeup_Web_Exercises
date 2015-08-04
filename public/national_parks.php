<?php
require_once '../parks_config.php';
require_once '../db_connect.php';
require_once '../function.php';
require_once '../Input.php';

$limit = 4;
$page = isset($_GET['page']) ? intval($_GET['page']) : 0;
$offset = $page * 4;

//prepare
$stmt = $dbc->prepare('SELECT * FROM national_parks LIMIT :limit OFFSET :offset');
//bind
$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
//execute
$stmt->execute();
$parks = $stmt->fetchAll(PDO::FETCH_ASSOC);

$count = $dbc->query('SELECT count(*) FROM national_parks')->fetchColumn();

$numOfPages = floor($count / $limit);

if (!empty($_POST)){
    $stmt = $dbc->prepare('INSERT INTO national_parks (name, location, date_established, area_in_acres, description)
            VALUES (:name, :location, :date_established, :area_in_acres, :description)');

    $stmt->bindValue(':name', escape(trim($_POST['name'])), PDO::PARAM_STR);
    $stmt->bindValue(':location',  escape(trim($_POST['location'])),  PDO::PARAM_STR);
    $stmt->bindValue(':date_established',  escape(trim($_POST['date_established'])),  PDO::PARAM_STR);
    $stmt->bindValue(':area_in_acres',  escape(trim($_POST['area_in_acres'])),  PDO::PARAM_STR);
    $stmt->bindValue(':description',  escape(trim($_POST['description'])),  PDO::PARAM_STR);

    $stmt->execute();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>National Parks</title>
    <link rel="stylesheet" href="/css/national_parks.css">

</head>
<body>
    <h1>National Parks</h1>
    <div id="container">
        <table>
            <tr>
                <th>Name</th>
                <th>Location</th>
                <th>Date Established</th>
                <th>Area (in acres)</th>
                <th>Description</th>
            </tr>

            <? foreach ($parks as $park): ?>
                <tr>
                    <td><?= $park['name']; ?></td>
                    <td><?= $park['location']; ?></td>
                    <td><?= date_format(date_create($park['date_established']), 'F, j, Y'); ?></td>
                    <td><?= number_format($park['area_in_acres']); ?></td>
                    <td><?= $park['description']; ?></td>
                </tr>
            <? endforeach; ?>
        </table>

        <div id='links'>
            <? if ($page != 0): ?>
                <a href="?page=<?= ($page - 1); ?>">Previous Page</a> 
            <? endif; ?>

            <? if ($page < $numOfPages): ?>
                <a href="?page=<?= ($page + 1); ?>">Next Page</a>
            <? endif; ?>
        </div>
        <div id='form'>
            <form method="POST">
                <label>Park Name:</label>
                <input id="name" type="text" name="name" placeholder="Park Name">

                <label>Location: </label>
                <input id="location" type="text" name="location" placeholder="ie: Texas"><br>

                <label>Date Established: </label>
                <input id="date_established" type="text" name="date_established" placeholder="YYYY-MM-DD">

                <label>Area (in acres): </label>
                <input id="area_in_acres" type="text" name="area_in_acres" placeholder="Area in acres"><br>

                <label>Description: </label>
                <input id="description" type="text" name="description" placeholder="Max: 500 charactrers"><br>
                <button id="submit" type="submit">Submit</button>
            </form>
        </div>

    </div>

</body>
</html>