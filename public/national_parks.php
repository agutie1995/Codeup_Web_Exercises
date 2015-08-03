<?php

require_once '../parks_config.php';
require_once '../db_connect.php';

$parks = $dbc->query('SELECT * FROM national_parks')->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>National Parks</title>
</head>
<body>
    <table>
        <? foreach ($parks as $key => $park): ?>
            <tr>
                <th><?= $park['name']; ?><th>
            </tr>
            <tr>
                <td><?= $park['location']; ?></th>
            </tr>
            <tr>
                <td><?= $park['date_established']; ?></th>
            </tr>
            <tr>
                <td><?= $park['area_in_acres']; ?></th>
            </tr>
        <? endforeach; ?>

    </table>
</body>
</html>