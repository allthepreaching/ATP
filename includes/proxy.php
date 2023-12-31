<?php
$url = $_GET['url']; // Get the URL of the remote .vtt file from the query string
$data = file_get_contents($url); // Fetch the remote file
header('Content-Type: text/vtt'); // Set the Content-Type header
echo $data; // Output the file contents
