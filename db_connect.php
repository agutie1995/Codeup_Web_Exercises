<?php
// The IP address to connect to
define('DB_HOST', '127.0.0.1');

// The database to connect to
define('DB_NAME', 'employees');

// The MySQL user to use
define('DB_USER', 'codeup');

// Password for the MySQL user
define('DB_PASS', 'password');

$dbc = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);

$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);