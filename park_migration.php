<?php
// The IP address to connect to
define('DB_HOST', '127.0.0.1');

// The database to connect to
define('DB_NAME', 'parks_db');

// The MySQL user to use
define('DB_USER', 'codeup');

// Password for the MySQL user
define('DB_PASS', 'password');

require_once 'db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS national_parks');

$query = 'CREATE TABLE national_parks(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	name varchar (50) NOT NULL,
	location varchar(50) NOT NULL,
	date_established DATE NOT NULL,
	area_in_acres double(8, 2) NOT NULL,
	PRIMARY KEY (id)
)';

$dbc->exec($query);