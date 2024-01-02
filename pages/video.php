<?php

include_once '../includes/header.php';

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {

    // Get the video ID from the URL
    $videoId = $_GET['id'];
} else {

    // Redirect to the home page if the video ID is not set
    header('Location: ../index.php');
    exit();
}

// Prepare and execute SQL statement
$query = $conn->prepare("SELECT vid_url FROM videos WHERE id = ?");
$query->bind_param("i", $videoId); // "i" indicates the variable type is integer

$query->execute();

$query->bind_result($vid_url);

if ($query->fetch()) {
    // $vid_url now holds the value from the database
} else {
    echo "No results found";
}

$query->close();
?>

<!-- Video Player Script -->
<script src="../js/video-player.js" defer></script>

<!-- Video Container -->
<div class="video-container paused" data-volume-level="high">

    <!-- Video Controls Container -->
    <div id="video-controls-container" class="video-controls-container">

        <!-- Timeline Container -->
        <div class="timeline-container">
            <div class="timeline">
                <div class="thumb-indicator"></div>
            </div>
        </div>

        <!-- Controls -->
        <div class="controls">

            <!-- Rewind Button -->
            <button class="rewind-btn tooltip">
                <span class="tooltiptext">&larr;</span>
                <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30">
                    <path fill="currentColor" d="M860-240 500-480l360-240v480Zm-400 0L100-480l360-240v480Zm-80-240Zm400 0Zm-400 90v-180l-136 90 136 90Zm400 0v-180l-136 90 136 90Z" />
                </svg>
            </button>

            <!-- Play Pause Button -->
            <button class="play-pause-btn tooltip">
                <span class="tooltiptext">K</span>
                <svg class="play-icon" height="30" width="30" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M8,5.14V19.14L19,12.14L8,5.14Z" />
                </svg>
                <svg class="pause-icon" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M14,19H18V5H14M6,19H10V5H6V19Z" />
                </svg>
            </button>

            <!-- Fast Forward Button -->
            <button class="forward-btn tooltip">
                <span class="tooltiptext">&rarr;</span>
                <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30">
                    <path fill="currentColor" d="M100-240v-480l360 240-360 240Zm400 0v-480l360 240-360 240ZM180-480Zm400 0Zm-400 90 136-90-136-90v180Zm400 0 136-90-136-90v180Z" />
                </svg>
            </button>

            <!-- Volume Container -->
            <div class="volume-container">
                <button class="mute-btn tooltip">
                    <span class="tooltiptext">M</span>
                    <svg height="30" width="30" class="volume-high-icon" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M14,3.23V5.29C16.89,6.15 19,8.83 19,12C19,15.17 16.89,17.84 14,18.7V20.77C18,19.86 21,16.28 21,12C21,7.72 18,4.14 14,3.23M16.5,12C16.5,10.23 15.5,8.71 14,7.97V16C15.5,15.29 16.5,13.76 16.5,12M3,9V15H7L12,20V4L7,9H3Z" />
                    </svg>
                    <svg height="30" width="30" class="volume-low-icon" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M5,9V15H9L14,20V4L9,9M18.5,12C18.5,10.23 17.5,8.71 16,7.97V16C17.5,15.29 18.5,13.76 18.5,12Z" />
                    </svg>
                    <svg height="30" width="30" class="volume-muted-icon" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12,4L9.91,6.09L12,8.18M4.27,3L3,4.27L7.73,9H3V15H7L12,20V13.27L16.25,17.53C15.58,18.04 14.83,18.46 14,18.7V20.77C15.38,20.45 16.63,19.82 17.68,18.96L19.73,21L21,19.73L12,10.73M19,12C19,12.94 18.8,13.82 18.46,14.64L19.97,16.15C20.62,14.91 21,13.5 21,12C21,7.72 18,4.14 14,3.23V5.29C16.89,6.15 19,8.83 19,12M16.5,12C16.5,10.23 15.5,8.71 14,7.97V10.18L16.45,12.63C16.5,12.43 16.5,12.21 16.5,12Z" />
                    </svg>
                </button>

                <!-- Volume Slider -->
                <input class="volume-slider" type="range" min="0" max="1" step="any" value="1">
            </div>

            <!-- Duration Container -->
            <div class="duration-container">
                <div class="current-time">0:00</div>
                /
                <div class="total-time"></div>
            </div>

            <!-- MP3 Container -->
            <a href="<?php echo str_replace('.mp4', '.mp3', $vid_url); ?>">
                <button class="mp3-btn tooltip">
                    <span class="tooltiptext">Download MP3</span>
                    <svg height="22" width="30" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.5 3.5H14V3.29289L13.8536 3.14645L13.5 3.5ZM10.5 0.5L10.8536 0.146447L10.7071 0H10.5V0.5ZM2.5 6.5L2.85355 6.14645C2.71055 6.00345 2.4955 5.96067 2.30866 6.03806C2.12182 6.11545 2 6.29777 2 6.5H2.5ZM3.5 7.5L3.14645 7.85355L3.5 8.20711L3.85355 7.85355L3.5 7.5ZM4.5 6.5H5C5 6.29777 4.87818 6.11545 4.69134 6.03806C4.5045 5.96067 4.28945 6.00345 4.14645 6.14645L4.5 6.5ZM6.5 6.5V6H6V6.5H6.5ZM12.5 6.5L12.9 6.8C13.0136 6.64849 13.0319 6.44579 12.9472 6.27639C12.8625 6.107 12.6894 6 12.5 6V6.5ZM11 8.5L10.6 8.2C10.4864 8.35151 10.4681 8.55421 10.5528 8.72361C10.6375 8.893 10.8106 9 11 9V8.5ZM2 5V1.5H1V5H2ZM13 3.5V5H14V3.5H13ZM2.5 1H10.5V0H2.5V1ZM10.1464 0.853553L13.1464 3.85355L13.8536 3.14645L10.8536 0.146447L10.1464 0.853553ZM2 1.5C2 1.22386 2.22386 1 2.5 1V0C1.67157 0 1 0.671573 1 1.5H2ZM1 12V13.5H2V12H1ZM2.5 15H12.5V14H2.5V15ZM14 13.5V12H13V13.5H14ZM12.5 15C13.3284 15 14 14.3284 14 13.5H13C13 13.7761 12.7761 14 12.5 14V15ZM1 13.5C1 14.3284 1.67157 15 2.5 15V14C2.22386 14 2 13.7761 2 13.5H1ZM3 11V6.5H2V11H3ZM2.14645 6.85355L3.14645 7.85355L3.85355 7.14645L2.85355 6.14645L2.14645 6.85355ZM3.85355 7.85355L4.85355 6.85355L4.14645 6.14645L3.14645 7.14645L3.85355 7.85355ZM4 6.5V11H5V6.5H4ZM6.5 7H7.5V6H6.5V7ZM7 11V8.5H6V11H7ZM7 8.5V6.5H6V8.5H7ZM7.5 8H6.5V9H7.5V8ZM8 7.5C8 7.77614 7.77614 8 7.5 8V9C8.32843 9 9 8.32843 9 7.5H8ZM7.5 7C7.77614 7 8 7.22386 8 7.5H9C9 6.67157 8.32843 6 7.5 6V7ZM10 7H12.5V6H10V7ZM12.1 6.2L10.6 8.2L11.4 8.8L12.9 6.8L12.1 6.2ZM11 9H11.5V8H11V9ZM11.5 10H10V11H11.5V10ZM12 9.5C12 9.77614 11.7761 10 11.5 10V11C12.3284 11 13 10.3284 13 9.5H12ZM11.5 9C11.7761 9 12 9.22386 12 9.5H13C13 8.67157 12.3284 8 11.5 8V9Z" fill="#ffffff" />
                    </svg>
                </button>
            </a>

            <!-- Captions Container -->
            <button class="captions-btn tooltip">
                <span class="tooltiptext">C</span>
                <svg height="30" width="30" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M18,11H16.5V10.5H14.5V13.5H16.5V13H18V14A1,1 0 0,1 17,15H14A1,1 0 0,1 13,14V10A1,1 0 0,1 14,9H17A1,1 0 0,1 18,10M11,11H9.5V10.5H7.5V13.5H9.5V13H11V14A1,1 0 0,1 10,15H7A1,1 0 0,1 6,14V10A1,1 0 0,1 7,9H10A1,1 0 0,1 11,10M19,4H5C3.89,4 3,4.89 3,6V18A2,2 0 0,0 5,20H19A2,2 0 0,0 21,18V6C21,4.89 20.1,4 19,4Z" />
                </svg>
            </button>

            <!-- Speed Container -->
            <button class="tooltip">
                <span class="tooltiptext">Playback Speed</span>
                <span class="speed-btn wide-btn">1X</span>
            </button>

            <!-- Mini player -->
            <button class="mini-btn tooltip">
                <span class="tooltiptext">P</span>
                <svg height="30" width="30" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M21 3H3c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H3V5h18v14zm-10-7h9v6h-9z" />
                </svg>
            </button>

            <!-- Theater Mode -->
            <button class="theater-btn tooltip">
                <span class="tooltiptext">T</span>
                <svg height="30" width="30" class="tall" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M19 6H5c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm0 10H5V8h14v8z" />
                </svg>
                <svg class="wide" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M19 7H5c-1.1 0-2 .9-2 2v6c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2zm0 8H5V9h14v6z" />
                </svg>
            </button>

            <!-- Full Screen -->
            <button class="fullscreen-btn tooltip">
                <span class="tooltiptext">F</span>
                <svg height="30" width="30" class="open" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z" />
                </svg>
                <svg class="close" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M5 16h3v3h2v-5H5v2zm3-8H5v2h5V5H8v3zm6 11h2v-3h3v-2h-5v5zm2-11V5h-2v5h5V8h-3z" />
                </svg>
            </button>
        </div>
    </div>

    <?php

    // SQL query to fetch the video
    $sql = "SELECT id, vid_url, thumb_url FROM videos WHERE id = ?";

    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);

    // Bind the video ID to the SQL statement
    $stmt->bind_param("i", $videoId);

    // Execute the SQL statement
    $stmt->execute();

    // Bind the result columns to variables
    $stmt->bind_result($id, $vid_url, $thumb_url);

    // Fetch the video data
    while ($stmt->fetch()) {
        // Video Input
        $posterUrl = (!empty($thumb_url)) ? $thumb_url : '../images/default-video-thumb.jpg';
    ?>
        <video src="<?php echo $vid_url; ?>" poster="<?php echo $posterUrl; ?>">

            <!-- Video Track -->
            <track kind="captions" label="English" srclang="en" src="../includes/proxy.php?url=<?php echo urlencode(str_replace('.mp4', '.vtt', $vid_url)); ?>">
        </video>
    <?php
    }

    $stmt->close();
    ?>

</div>
<?php

// SQL query to fetch the video
$sql = "SELECT id, vid_category, vid_title, search_category, main_category FROM videos WHERE id = ?";

// Prepare the SQL statement
$stmt = $conn->prepare($sql);

// Bind the video ID to the SQL statement
$stmt->bind_param("i", $videoId);

// Execute the SQL statement
$stmt->execute();

// Bind the result columns to variables
$stmt->bind_result($id, $vid_category, $vid_title, $search_category, $main_category);

// Fetch the video data
while ($stmt->fetch()) {

    // Create a link to the archive page for the current category
    $searchCategoryLink = 'archive.php#' . strtolower($vid_category);

    // Video Info Container
?>
    <div class="video-info-container">
        <div class="video-info">
            <div class="video-info-title">
                <?php echo $vid_title; ?>
            </div>
            <a href="<?php echo $searchCategoryLink ?>" class="video-info-search-category">
                <?php echo $search_category; ?>
            </a>
            <div class="video-info-main-category">
                <?php echo $main_category; ?>
            </div>
        </div>
    </div>
<?php
}

$stmt->close();
?>