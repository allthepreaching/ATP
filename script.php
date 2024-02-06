<?php
include_once 'inc/dbh-live.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Read the file into an array, one line per element
$file = file('output.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Filter the array to remove any lines that don't start with 'http'
$urls = array_filter($file, function ($line) {
    return strpos($line, 'http') === 0;
});

// Prepare the SQL statement
$stmt = $conn->prepare("UPDATE videos SET shorts = 1 WHERE vid_url = ?");

// Loop through the URLs
foreach ($urls as $url) {
    // Bind the URL to the SQL statement
    $stmt->bind_param("s", $url);

    // Execute the SQL statement
    $stmt->execute();
    if ($stmt->error) {
        echo "Error: " . $stmt->error;
    }
}

// Close the statement
$stmt->close();

// Close the connection
$conn->close();

