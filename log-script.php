<?php
// Database connection parameters
$servername = "localhost";
$dbUsername = "alltdjli";
$dbPassword = "Um+2W=$-N_b+";
$dbName = "alltdjli_statistics";

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

$db = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);
if (!$db) {
    die("Connection Failed: " . mysqli_connect_error());
}
echo 'hello';
// Get the search parameters from the query string

$stmt = $db->prepare("
    INSERT INTO SearchLog (searchQuery, advancedSearchQuery, requestIP, userAgent)
    VALUES (?, ?, ?, ?)
");

// Bind the values to the SQL statement
$stmt->bind_param("ssss", $categoryInfoQuery,$searchQuery,$_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT']);

// Execute the SQL statement
$stmt->execute();

//error_log("Executed search logging script with search query: $searchQuery and advanced search query: $advancedSearchQuery");

// Close the statement and the connection
$stmt->close();
$db->close();
