<?php

require 'constants.php';

$server_name = DB_HOST;
$user_name = DB_USER;
$password = DB_PASS;
$db = DB_NAME;

$conn = mysqli_connect($server_name, $user_name, $password, $db);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_erorr());
}

/*echo "Connected successfully!";*/

//EOF
