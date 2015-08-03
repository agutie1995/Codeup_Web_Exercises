<?php
require_once '../parks_config.php';
require_once '../db_connect.php';

$offset= isset($_GET['offset']) ? intval($_GET['offset']) : 0;

$stmt = $dbc->query("SELECT * FROM national_parks LIMIT 4 OFFSET $offset");

$parks = $stmt->fetchAll(PDO::FETCH_ASSOC);

$count= $dbc->query('SELECT count(*) FROM national_parks')->fetchColumn();
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
                <td><?= $park['location']; ?></td>
                <td><?= $park['date_established']; ?></td>
                <td><?= $park['area_in_acres']; ?></td>
            </tr>
        <? endforeach; ?>
    </table>

    <? if ($offset != 0):?>
        <a href="?offset=<?=$offset-4;?>">Prev</a>
    <? endif; ?> 

    <a href="?offset=0">1</a>

    <a href="?offset=4">2</a>
    
    <a href="?offset=8">3</a>

    <? if (($offset + 4)< $count): ?>
        <a href="?offset=<?=$offset+4;?>">Next</a> 
    <? endif; ?>

</script>
</body>
</html>