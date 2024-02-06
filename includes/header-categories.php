<?php
// Fetch all unique categories
$sql = "SELECT DISTINCT search_category, vid_category FROM videos WHERE vid_category NOT LIKE 'pro%' ORDER BY search_category ASC";
$categories = mysqli_query($conn, $sql);
$categoryCount = mysqli_num_rows($categories);

while ($category = mysqli_fetch_assoc($categories)) {

    // Create a link to the archive page for the current category
    $categoryLink = 'archive.php#' . strtolower($category['vid_category']);

    // Display the category heading
    echo '<a href="' . $categoryLink . '"><h3 class="modal-category-heading">' . $category['search_category'] . '</h3></a>';
}
