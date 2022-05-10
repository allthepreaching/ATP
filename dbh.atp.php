<?php

$servername = "localhost";
$dbUsername = "alltdjli_dev";
$dbPassword = "Um+2W=$-N_b+";
$dbName = "alltdjli_pas";
$mysqli = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);
if (!$mysqli) {
    die("Connection Failed: " . mysqli_connect_error());
}

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
