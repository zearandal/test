<?php

$server= "localhost";
$user= "root";
$password = "";
$db_name = "dry-run";

$connect = mysqli_connect($server, $user, $password, $db_name);

if (!$connect) {
	echo "Connection failed!";
}