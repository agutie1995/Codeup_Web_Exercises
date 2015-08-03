<?php
require_once 'parks_config.php';
require_once 'db_connect.php';

$dropQuery = ('DROP TABLE IF EXISTS national_parks');
$dbc->exec($dropQuery);

$createQuery = 'CREATE TABLE national_parks(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	name varchar (50) NOT NULL,
	location varchar(50) NOT NULL,
	date_established DATE NOT NULL,
	area_in_acres double(8, 2) NOT NULL,
	PRIMARY KEY (id)
)';

$dbc->exec($createQuery);