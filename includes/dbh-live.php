<?php

$servername = "localhost";
$dbUsername = "alltdjli";
$dbPassword = "Um+2W=$-N_b+";
$dbName = "alltdjli_pas";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
