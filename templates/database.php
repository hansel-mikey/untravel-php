<?php
$host = "localhost";
$db_name = "db";
$username = "root";
$password = "";

$mysqli = new mysqli($host, $username, $password, $db_name);

// checking the connection of the database
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}
return $mysqli;

