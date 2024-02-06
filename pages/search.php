<?php
include_once '../includes/header.php';
?>

<!-- SEARCH RESULTS SECTION ***UPDATED*** -->
<section class="search-boxes vh-100" style="padding-top: 160px;">
    <div class="" style="max-width: 100%; text-align: center;">
        <?php
        ini_set("allow_url_fopen", 1);
        if (isset($_GET['submit-search'])) {

            // Define the base URL
            $base_url = "http://localhost:8081/api/v1/search/exact";

            // Define the query parameters
            $searchQuery = $_GET['advanced-search'];
            $categoryInfoQuery = $_GET['search'];
            $maxResults = 600;

            // Construct the full URL with query parameters
            $url = $base_url . "?query=" . urlencode($searchQuery) . "&categoryInfo=" . urlencode($categoryInfoQuery) . "&maxResults=" . $maxResults;

            // Fetch the JSON data from the URL
            $json = file_get_contents($url);

            // Decode the JSON data to a PHP array
            $data = json_decode($json, true);

            foreach ($data as $parent) {
                $subtitlePath = $parent["subtitlePath"];
                $parts = explode("/", $subtitlePath);
                $mediaName = str_replace('_', ' ', pathinfo(end($parts), PATHINFO_FILENAME));
                $categoryInfo = str_replace('_', ' ', $parts[1]);
                if (strpos($categoryInfo, '.') !== false) {
                    $categoryInfo = substr($categoryInfo, 0, strrpos($categoryInfo, "."));
                }
                //

                echo '<div class="col-md-6 align-items-center">';

                echo '<a href="video.php?path=' . urlencode($parent["subtitlePath"]) . '"><span class="h4" style="color: #dbab83">' . $categoryInfo . '</span><span class="h4" style="color: white">: ' . $mediaName . ' </span></a>';

                foreach ($parent["subtitles"] as $child) {
                    echo '<a href="video.php?path=' . urlencode($parent["subtitlePath"]) . '&time=' . htmlspecialchars($child["timestamp"]) . '" class="search-box">';
                    echo htmlspecialchars($child["text"]);
                    echo '</p>';
                }

                echo '</div>';
            }
        }
        ?>
    </div>
</section>

<?php include_once '../includes/footer.php';
include_once '../log-script.php';
?>