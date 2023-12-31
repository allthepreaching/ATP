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

?>
<script src="../js/video-player.js" defer></script>

<!-- Video Container -->
<div class="video-container paused" data-volume-level="high">
    <img class="thumbnail-img" alt="Thumbnail Image">

    <!-- Video Controls Container -->
    <div id="video-controls-container" class="video-controls-container">

        <!-- Timeline Container -->
        <div class="timeline-container">
            <div class="timeline">
                <img class="preview-img" alt="Image description">
                <div class="thumb-indicator"></div>
            </div>
        </div>

        <!-- Controls Container -->
        <div class="controls">

            <!-- Rewind -->
            <button class="rewind-btn" title="Left Arrow = Rewind">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                    <path fill="currentColor" d="M860-240 500-480l360-240v480Zm-400 0L100-480l360-240v480Zm-80-240Zm400 0Zm-400 90v-180l-136 90 136 90Zm400 0v-180l-136 90 136 90Z" />
                </svg>
            </button>

            <!-- Play/Pause -->
            <button class="play-pause-btn" title="Spacebar/K = Play/Pause">
                <svg class="play-icon" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M8,5.14V19.14L19,12.14L8,5.14Z" />
                </svg>
                <svg class="pause-icon" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M14,19H18V5H14M6,19H10V5H6V19Z" />
                </svg>
            </button>

            <!-- Forward -->
            <button class="fast-forward-btn" title="Right Arrow = Fast Forward">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                    <path fill="currentColor" d="M100-240v-480l360 240-360 240Zm400 0v-480l360 240-360 240ZM180-480Zm400 0Zm-400 90 136-90-136-90v180Zm400 0 136-90-136-90v180Z" />
                </svg>
            </button>

            <!-- Volume Container -->
            <div class="volume-container">
                <button class="mute-btn">
                    <svg class="volume-high-icon" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M14,3.23V5.29C16.89,6.15 19,8.83 19,12C19,15.17 16.89,17.84 14,18.7V20.77C18,19.86 21,16.28 21,12C21,7.72 18,4.14 14,3.23M16.5,12C16.5,10.23 15.5,8.71 14,7.97V16C15.5,15.29 16.5,13.76 16.5,12M3,9V15H7L12,20V4L7,9H3Z" />
                    </svg>
                    <svg class="volume-low-icon" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M5,9V15H9L14,20V4L9,9M18.5,12C18.5,10.23 17.5,8.71 16,7.97V16C17.5,15.29 18.5,13.76 18.5,12Z" />
                    </svg>
                    <svg class="volume-muted-icon" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12,4L9.91,6.09L12,8.18M4.27,3L3,4.27L7.73,9H3V15H7L12,20V13.27L16.25,17.53C15.58,18.04 14.83,18.46 14,18.7V20.77C15.38,20.45 16.63,19.82 17.68,18.96L19.73,21L21,19.73L12,10.73M19,12C19,12.94 18.8,13.82 18.46,14.64L19.97,16.15C20.62,14.91 21,13.5 21,12C21,7.72 18,4.14 14,3.23V5.29C16.89,6.15 19,8.83 19,12M16.5,12C16.5,10.23 15.5,8.71 14,7.97V10.18L16.45,12.63C16.5,12.43 16.5,12.21 16.5,12Z" />
                    </svg>
                </button>
                <input class="volume-slider" type="range" min="0" max="1" step="any" value="1">
            </div>

            <!-- Duration Container -->
            <div class="duration-container">
                <div class="current-time">0:00</div>
                /
                <div class="total-time"></div>
            </div>

            <!-- Captions -->
            <button class="captions-btn">
                <svg viewBox="0 0 24 24">
                    <path fill="currentColor" d="M18,11H16.5V10.5H14.5V13.5H16.5V13H18V14A1,1 0 0,1 17,15H14A1,1 0 0,1 13,14V10A1,1 0 0,1 14,9H17A1,1 0 0,1 18,10M11,11H9.5V10.5H7.5V13.5H9.5V13H11V14A1,1 0 0,1 10,15H7A1,1 0 0,1 6,14V10A1,1 0 0,1 7,9H10A1,1 0 0,1 11,10M19,4H5C3.89,4 3,4.89 3,6V18A2,2 0 0,0 5,20H19A2,2 0 0,0 21,18V6C21,4.89 20.1,4 19,4Z" />
                </svg>
            </button>

            <!-- Playback Speed -->
            <button class="speed-btn wide-btn">
                1x
            </button>

            <!-- Mini Player -->
            <button class="mini-player-btn">
                <svg viewBox="0 0 24 24">
                    <path fill="currentColor" d="M21 3H3c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H3V5h18v14zm-10-7h9v6h-9z" />
                </svg>
            </button>

            <!-- Theater Mode -->
            <button class="theater-btn">
                <svg class="tall" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M19 6H5c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm0 10H5V8h14v8z" />
                </svg>
                <svg class="wide" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M19 7H5c-1.1 0-2 .9-2 2v6c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2zm0 8H5V9h14v6z" />
                </svg>
            </button>

            <!-- Fullscreen -->
            <button class="full-screen-btn">
                <svg class="open" viewBox="0 0 24 24">
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
    $sql = "SELECT * FROM videos WHERE id = ?";

    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);

    // Bind the video ID to the SQL statement
    $stmt->bind_param("i", $videoId);

    // Execute the SQL statement
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Fetch the video data
    while ($row = $result->fetch_assoc()) {

    ?>
        <!-- Video Input -->
        <video src="<?php echo $row['vid_url']; ?>" poster="<?php echo $row['thumb_url']; ?>">
            <!-- Video Track -->
            <track kind="captions" label="English" srclang="en" src="<?php echo $row['thumb_url']; ?>" default>
        </video>

    <?php } ?>
</div>