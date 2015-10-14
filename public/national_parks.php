<?php
require_once '../parks_config.php';
require_once '../db_connect.php';
require_once '../function.php';
require_once '../Input.php';

$limit = 4;
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$offset = ($page - 1) * $limit;

$count = $dbc->query('SELECT count(*) FROM national_parks')->fetchColumn();

$numOfPages = ceil($count / $limit);

//prepare
$stmt = $dbc->prepare('SELECT * FROM national_parks LIMIT :limit OFFSET :offset');
//bind
$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
//execute
$stmt->execute();
$parks = $stmt->fetchAll(PDO::FETCH_ASSOC);


$errors = [];
if (!empty($_POST)){

    try {
        $name = Input::getString('name');
    } catch (Exception $e) {
        $errors[] = $e->getMessage() . PHP_EOL;
    }

    try {
        $location = Input::getString('location');
    } catch (Exception $e){
        $erros[] = $e->getMessage() . PHP_EOL;
    }

    try {
        $date_established = $_POST['date_established'];
    } catch (Exception $e) {
        $errors[] = $e->getMessage() . PHP_EOL;
    }

    try {
        $area_in_acres = Input::getNumber('area_in_acres');
    } catch (Exception $e) {
        $errors[] = $e->getMessage() . PHP_EOL;
    }

    try {
        $description = Input::getString('description');
    } catch (Exception $e) {
        $errors[] = $e->getMessage() . PHP_EOL;
    }

    if (empty($errors)){
        $stmt = $dbc->prepare('INSERT INTO national_parks (name, location, date_established, area_in_acres, description)
                VALUES (:name, :location, :date_established, :area_in_acres, :description)');

        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->bindValue(':location', $location, PDO::PARAM_STR);
        $stmt->bindValue(':date_established', $date_established, PDO::PARAM_STR);
        $stmt->bindValue(':area_in_acres', $area_in_acres, PDO::PARAM_STR);
        $stmt->bindValue(':description', $description, PDO::PARAM_STR);
                
        $stmt->execute();
        $_POST = [];
    }
}

$states = array(
    'AL'=>'Alabama',
    'AK'=>'Alaska',
    'AZ'=>'Arizona',
    'AR'=>'Arkansas',
    'CA'=>'California',
    'CO'=>'Colorado',
    'CT'=>'Connecticut',
    'DE'=>'Delaware',
    'DC'=>'District of Columbia',
    'FL'=>'Florida',
    'GA'=>'Georgia',
    'HI'=>'Hawaii',
    'ID'=>'Idaho',
    'IL'=>'Illinois',
    'IN'=>'Indiana',
    'IA'=>'Iowa',
    'KS'=>'Kansas',
    'KY'=>'Kentucky',
    'LA'=>'Louisiana',
    'ME'=>'Maine',
    'MD'=>'Maryland',
    'MA'=>'Massachusetts',
    'MI'=>'Michigan',
    'MN'=>'Minnesota',
    'MS'=>'Mississippi',
    'MO'=>'Missouri',
    'MT'=>'Montana',
    'NE'=>'Nebraska',
    'NV'=>'Nevada',
    'NH'=>'New Hampshire',
    'NJ'=>'New Jersey',
    'NM'=>'New Mexico',
    'NY'=>'New York',
    'NC'=>'North Carolina',
    'ND'=>'North Dakota',
    'OH'=>'Ohio',
    'OK'=>'Oklahoma',
    'OR'=>'Oregon',
    'PA'=>'Pennsylvania',
    'RI'=>'Rhode Island',
    'SC'=>'South Carolina',
    'SD'=>'South Dakota',
    'TN'=>'Tennessee',
    'TX'=>'Texas',
    'UT'=>'Utah',
    'VT'=>'Vermont',
    'VA'=>'Virginia',
    'WA'=>'Washington',
    'WV'=>'West Virginia',
    'WI'=>'Wisconsin',
    'WY'=>'Wyoming',
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>National Parks</title>
    <link rel="stylesheet" href="/css/national_parks.css">

</head>
<body>
    <div>
        <div>
            <h1>National Parks</h1>
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
                        <td><?= date_format(date_create($park['date_established']), 'F j, Y'); ?></td>
                        <td><?= number_format($park['area_in_acres']); ?></td>
                        <td><?= $park['description']; ?></td>
                    </tr>
                <? endforeach; ?>
            </table>
            <div id='links'>
                <? if ($page != 1): ?>
                    <a href="?page=<?= ($page - 1); ?>">Previous Page</a> 
                <? endif; ?>

                <? if ($page < $numOfPages): ?>
                    <a href="?page=<?= ($page + 1); ?>">Next Page</a>
                <? endif; ?>
            </div>

            <?php foreach ($errors as $error): ?>
                <p id="error"><?= $error . PHP_EOL ;?></p>
            <?php endforeach; ?>

            <div id='form'>
                <p>* Required Fields</p>
                <form method="POST">
                    <label class="name">*Park Name:</label>
                    <input value="<?= isset($_POST['name']); ?>" class="name" type="text" name="name" placeholder="Park Name">

                    <label class="location">*Location: </label>
                    <select value="<?= isset($_POST['location']); ?>" class="location" name="location">
                        <?foreach ($states as $state):?>
                            <option><?= $state; ?></option>
                        <? endforeach?>
                    </select><br>

                    <label class="date_established">*Date Established: </label>
                    <input value="<?= isset($_POST['date_established']); ?>" class="date_established" type="date" name="date_established">

                    <label class="area_in_acres">*Area (in acres): </label>
                    <input value="<?= isset($_POST['area_in_acres']); ?>" class="area_in_acres" type="number" name="area_in_acres" placeholder="Area in acres"><br>

                    <label class="description">*Description:</label><br>
                    <textarea value="<?= isset($_POST['description']); ?>" class="description" type="text" name="description" placeholder="Max: 500 characters"></textarea><br>
                    <button id="submit" type="submit">Submit</button>
                </form>
            </div>
        </div>  
    </div>
</body>
</html>