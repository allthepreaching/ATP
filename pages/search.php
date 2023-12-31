<?php
include_once '../includes/header.php';
?>

<!-- SEARCH RESULTS SECTION ***UPDATED*** -->
<section class="search-boxes">
    <div class="contain">
        <?php
        if (isset($_POST['submit-search'])) {
            $search = mysqli_real_escape_string($conn, $_POST['search']);

            // #### Get the state of the toggle/checkbox from the session variable
            $checkbox = $_SESSION['search-toggle'];

            // Initialize counters
            $videoCount = 0;
            $categoryCount = 0;

            // ##### Determine search criteria based on checkbox value
            $searchCriteria = $checkbox ? "name LIKE '%$search%' AND name NOT LIKE 'NULL'" : "search_category LIKE '%$search%' AND name NOT LIKE 'NULL'";

            // ##### Fetch all unique categories *** Updated to use search criteria ***
            $sql = "SELECT DISTINCT search_category FROM videos WHERE $searchCriteria ORDER BY search_category ASC";
            $categories = mysqli_query($conn, $sql);

            while ($category = mysqli_fetch_assoc($categories)) {
                $categoryCount++;

                // ##### Fetch all videos in the current category *** Updated to use search criteria ***
                $sql = "SELECT * FROM videos WHERE $searchCriteria AND search_category = '" . $category['search_category'] . "' ORDER BY name ASC";
                $videos = mysqli_query($conn, $sql);

                while ($video = mysqli_fetch_assoc($videos)) {
                    $videoCount++;
                }
            }

            // Display the counts
            echo '<div class="search-label">
                Search Results for "' . strtoupper(htmlentities($_POST['search'])) . '"
            </div>';
            echo '<div class="count-label">
                Found <span class="yellow-highlight">' . $videoCount . ' videos</span> in <span class="yellow-highlight">' . $categoryCount . ' categories</span> matching your search:
            </div>';

            // Reset the result pointer and loop again for output
            mysqli_data_seek($categories, 0);

            while ($category = mysqli_fetch_assoc($categories)) {
                // Fetch all videos in the current category
                $sql = "SELECT * FROM videos WHERE $searchCriteria AND search_category = '" . $category['search_category'] . "' ORDER BY name ASC";
                $videos = mysqli_query($conn, $sql);

                // Count all videos in the current category
                $videoCountPerCategory = mysqli_num_rows($videos);

                // If there is at least one video in the category
                if ($videoCountPerCategory > 0) {
                    // Fetch the first video to get the vid_category
                    $firstVideo = mysqli_fetch_assoc($videos);

                    // Create a link to the archive page for the current category
                    $categoryLink = 'archive.php#' . strtolower($firstVideo['vid_category']);

                    // Display the category heading and the number of videos
                    echo '<a href="' . $categoryLink . '"><h3 class="search-result-category-heading">' . $category['search_category'] . ' <span class="yellow-highlight video-count">(' . $videoCountPerCategory . ')</span></h3></a>';
        ?>
                    <!-- // Output the first video -->
                    <a href="video.php?id=<?php echo $firstVideo['id']; ?>" class="search-box" title="<?php echo $firstVideo['vid_title']; ?>">
                            <?php echo $firstVideo['vid_title']; ?>
                    </a>

                    <!-- // Fetch and output the rest of the videos -->
                    <?php
                    while ($video = mysqli_fetch_assoc($videos)) {
                    ?>
                        <a href="video.php?id=<?php echo $video['id']; ?>" class="search-box" title="<?php echo $video['vid_title']; ?>">
                                <?php echo $video['vid_title']; ?>
                        </a>
        <?php
                    }
                }
            }
        }
        ?>
    </div>
</section>

<?php include_once '../includes/footer.php'; ?>