<?php

include_once 'dbh-live.php';

// Prepare the SQL statement with placeholders for the values
$sql = "INSERT INTO videos (id, vid_category, search_category, vid_preacher, name, vid_title, vid_code, date, vid_url, thumb_url, pic_url, header_url, video_id, profile_id, main_category) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Prepare the statement
$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param("sssssssssssssss", $id, $vid_category, $search_category, $vid_preacher, $name, $vid_title, $vid_code, $date, $vid_url, $thumb_url, $pic_url, $header_url, $video_id, $profile_id, $main_category);

// Loop through the submitted values and execute the statement for each set of values
foreach ($_POST['id'] as $key => $value) {
  $id_arr = explode(',', trim($_POST['id'][$key]));
  $vid_category_arr = explode(',', trim($_POST['vid_category'][$key]));
  $search_category_arr = explode(',', trim($_POST['search_category'][$key]));
  $vid_preacher_arr = explode(',', trim($_POST['vid_preacher'][$key]));
  $name_arr = explode(',', trim($_POST['name'][$key]));
  $vid_title_arr = explode(',', trim($_POST['vid_title'][$key]));
  $vid_code_arr = explode(',', trim($_POST['vid_code'][$key]));
  $date_arr = explode(',', trim($_POST['date'][$key]));
  $vid_url_arr = explode(',', trim($_POST['vid_url'][$key]));
  $thumb_url_arr = explode(',', trim($_POST['thumb_url'][$key]));
  $pic_url_arr = explode(',', trim($_POST['pic_url'][$key]));
  $header_url_arr = explode(',', trim($_POST['header_url'][$key]));
  $video_id_arr = explode(',', trim($_POST['video_id'][$key]));
  $profile_id_arr = explode(',', trim($_POST['profile_id'][$key]));
  $main_category_arr = explode(',', trim($_POST['main_category'][$key]));

  foreach ($id_arr as $index => $id) {
    // Get the values for this row
    $id = stripslashes(trim($id_arr[$index]));
    $vid_category = stripslashes(trim($vid_category_arr[$index]));
    $search_category = stripslashes(trim($search_category_arr[$index]));
    $vid_preacher = stripslashes(trim($vid_preacher_arr[$index]));
    $name = stripslashes(trim($name_arr[$index]));
    $vid_title = stripslashes(trim($vid_title_arr[$index]));
    $vid_code = stripslashes(trim($vid_code_arr[$index]));
    $date = date('Y-m-d H:i:s', strtotime(stripslashes(trim($date_arr[$index]))) + 0); // Add 0 seconds to the date/time value
    $vid_url = stripslashes(trim($vid_url_arr[$index]));
    $thumb_url = stripslashes(trim($thumb_url_arr[$index]));
    $pic_url = stripslashes(trim($pic_url_arr[$index]));
    $header_url = stripslashes(trim($header_url_arr[$index]));
    $video_id = stripslashes(trim($video_id_arr[$index]));
    $profile_id = stripslashes(trim($profile_id_arr[$index]));
    $main_category = stripslashes(trim($main_category_arr[$index]));

    // Execute the statement
    $stmt->execute();
  }
}

$stmt->close();
$conn->close();

// Redirect to index.php
echo '<script type="text/javascript">alert("Data inserted successfully"); window.location.href = "../index.php";</script>';
