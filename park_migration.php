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