<?php

// wamp
$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "vidtest";
$port = "3308";

// atp
// $servername = "localhost";
// $dbUsername = "alltdjli_dev";
// $dbPassword = "Um+2W=$-N_b+";
// $dbName = "alltdjli_pas";

$mysqli = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName, $port);
if (!$mysqli) {
    die("Connection Failed: " . mysqli_connect_error());
}

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName, $port);
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
