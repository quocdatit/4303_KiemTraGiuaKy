<?php

error_reporting(1);

// URL website
define('MY_URL', 'http://localhost/db2giuaky');

// Thông tin kết nối tới CSDL DB2
define('DB2_USER', 'db2admin');
define('DB2_PASS', '123456');
define('DB2_NAME', 'THIGK');

$connection = db2_connect(DB2_NAME, DB2_USER, DB2_PASS);

if (!$connection) {
	die("Can't connect to DB2");
}