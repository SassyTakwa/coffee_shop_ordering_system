<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "coffee_shop";

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Database connection failed");
}
?>