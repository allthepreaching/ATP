<?php

$servername = "localhost";
$dbUsername = "admin";
$dbPassword = ")*(&%^$@#!A";
$dbName = "vidtest";
$port = "3308";

$mysqli = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName, $port);
if (!$mysqli) {
    die("Connection Failed: " . mysqli_connect_error());
}

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName, $port);
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
