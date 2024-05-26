<?php

$servername = "localhost";
$username = "root";
$password = "rootadmin";
$dbname = "mpwebs";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Failed connection: " . $conn->connect_error);
}
