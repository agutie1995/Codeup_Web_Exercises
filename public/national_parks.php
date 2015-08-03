<?php
require_once '../parks_config.php';
require_once '../db_connect.php';

$limit = 4;

$page = isset($_GET['page']) ? intval($_GET['page']) : 0;

$offset = $page * 4;

$stmt = $dbc->query("SELECT * FROM national_parks LIMIT $limit OFFSET $offset");

$parks = $stmt->fetchAll(PDO::FETCH_ASSOC);

$count= $dbc->query('SELECT count(*) FROM national_parks')->fetchColumn();

$numOfPages = floor($count / $limit);
?>

<!DOCTYPE html>
<html>
<head>
    <title>National Parks</title>
    <link rel="stylesheet" href="/css/national_parks.css">

</head>
<body>
    <h1>National Parks</h1>

    <table>
        <tr>
            <th>Name</th>
            <th>Location</th>
            <th>Date Established</th>
            <th>Area (in acres)</th>
        </tr>

        <? foreach ($parks as $park): ?>
            <tr>
                <td><?= $park['name']; ?></td>
                <td><?= $park['location']; ?></td>
                <td><?= $park['date_established']; ?></td>
                <td><?= $park['area_in_acres']; ?></td>
            </tr>
        <? endforeach; ?>
    </table>

    <div id='links'>
        <? if ($page != 0): ?>
            <a href="?page=<?= ($page - 1) ;?>">Previous Page</a> 
        <? endif; ?>

        <? if ($page < $numOfPages): ?>
            <a href="?page=<?= ($page + 1) ;?>">Next Page</a>
        <? endif; ?>
    </div>

</script>
</body>
</html>