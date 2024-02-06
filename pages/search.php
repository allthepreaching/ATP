<?php
include_once '../includes/header.php';
?>

<!-- SEARCH RESULTS SECTION ***UPDATED*** -->
<section class="search-boxes vh-100" style="padding-top: 160px;">
    <div class="" style="max-width: 100%; text-align: center;">
        <?php
        //enable this function
        ini_set("allow_url_fopen", 1);
        //this is not particularly important to check but whatever it works fine this way
        if (isset($_GET['submit-search'])) {

            // Define the base URL
            $base_url = "http://localhost:8081/api/v1/search/exact";

            // Define the query parameters
            $searchQuery = $_GET['advanced-search']; //right search bar
            $categoryInfoQuery = $_GET['search']; //left search bar
            $maxResults = 600; //How many results to return from the search engine, default is 300 if this parameter is not sent

            // Construct the full URL with query parameters, this URL calls the API on subtitle FTS backend
            $url = $base_url . "?query=" . urlencode($searchQuery) . "&categoryInfo=" . urlencode($categoryInfoQuery) . "&maxResults=" . $maxResults;

            // Fetch the JSON data from the URL, this is basically calling the API
            $json = file_get_contents($url);

            // Decode the JSON data to a PHP array
            $data = json_decode($json, true);

            foreach ($data as $parent) {
                //Prepare strings to show them nicely in search results
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
                //loop through individual cues of each video, prepare path for opening video.php with the data it needs to open the right video at the right time
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
//this script is just here to log the search query
include_once '../log-script.php';
?>