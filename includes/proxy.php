<?php

function isValidUrl($url) {
    // Validate URL format
    if (!filter_var($url, FILTER_VALIDATE_URL)) {
        return false;
    }

    // Parse URL components
    $urlComponents = parse_url($url);

    // Check that the scheme is http or https
    if (!in_array($urlComponents['scheme'], ['http', 'https'])) {
        return false;
    }

    // Allow only specific domains (add domains as needed)
    $allowedDomains = ['kjv1611only.com', 'www.kjv1611only.com'];
    if (!in_array($urlComponents['host'], $allowedDomains)) {
        return false;
    }

    // Additional checks can be added here (e.g., specific paths)

    return true;
}

$url = urldecode($_GET['url']); // Get the URL of the remote .vtt file from the query string

if (isValidUrl($url)) {
    $data = file_get_contents($url); // Fetch the remote file
    if ($data === false) {
        header('HTTP/1.1 404 Not Found');
        echo 'Error: Unable to fetch the file';
    } else {
        header('Content-Type: text/vtt'); // Set the Content-Type header
        echo $data; // Output the file contents
    }
} else {
    header('HTTP/1.1 400 Bad Request');
    echo 'Error: Invalid URL';
}
