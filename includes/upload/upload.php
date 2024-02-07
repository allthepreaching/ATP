<?php

include_once '../dbh-live.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dir = 'csv'; // replace with your directory
$files = glob($dir . '/*.csv');
$importedRows = 0;
$importedIds = [];

if (count($files) > 0) {
    $file = $files[0]; // get the first csv file
    $row = 0;
    
    if (($handle = fopen($file, 'r')) !== false) {
        while (($data = fgetcsv($handle, 1000, ",")) !== false) {
            // Skip the header row
            if ($row == 0) {
                $row++;
                continue;
            }

            // Remove trailing commas from each string value
            foreach ($data as $key => $value) {
                $data[$key] = rtrim($value, ',');
            }

            $sql = "INSERT INTO videos (id, vid_category, search_category, vid_preacher, name, vid_title, vid_code, date, vid_url, thumb_url, pic_url, header_url, video_id, profile_id, main_category, clicks) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 0)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("issssssssssssss", $data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], date('Y-m-d H:i:s', strtotime(stripslashes(trim($data[7]))) + 0), $data[8], $data[9], $data[10], $data[11], $data[12], $data[13], $data[14]);

            if ($stmt->execute() === false) {
                echo 'Failed to import row: ' . implode(',', $data) . "\n";
                rename($file, $dir . '/error/' . basename($file));
                break;
            } else {
                $importedRows++;
                $importedIds[] = $conn->insert_id;
            }
        }

        fclose($handle);
        rename($file, $dir . '/archive/' . basename($file));
    } else {
        echo 'Failed to open file: ' . $file . "\n";
    }

    echo 'Number of imported rows: ' . $importedRows . "\n";
    echo 'IDs of imported rows: ' . implode(', ', $importedIds) . "\n";
} else {
    echo 'No CSV files found in directory: ' . $dir . "\n";
}
$stmt->close();
$conn->close();