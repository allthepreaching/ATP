<?php

//variables for all the things used below are in header.php so they can be used for URL preview
include_once '../includes/header.php';


// Check if the 'id' parameter is set in the URL
if (!isset($_GET['path']) && !isset($_GET['id'])) {
    // Redirect to the home page if the video ID is not set
    header('Location: ../index.php');
    exit();
}

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
            <button data-time="<?php echo $vid_start_time ?>" class="play-pause-btn tooltip">
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


            <!-- TXT Container -->
            <a href="<?php echo $vtt_to_txt_url; ?>">
                <button class="mp3-btn tooltip">
                    <span class="tooltiptext">Download TXT transcript</span>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="256" height="256" viewBox="0 0 256 256" xml:space="preserve">

                        <defs>
                        </defs>
                        <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                            <path d="M 77.474 17.28 L 61.526 1.332 C 60.668 0.473 59.525 0 58.311 0 H 15.742 c -2.508 0 -4.548 2.04 -4.548 4.548 v 80.904 c 0 2.508 2.04 4.548 4.548 4.548 h 58.516 c 2.508 0 4.549 -2.04 4.549 -4.548 V 20.496 C 78.807 19.281 78.333 18.138 77.474 17.28 z M 61.073 5.121 l 12.611 12.612 H 62.35 c -0.704 0 -1.276 -0.573 -1.276 -1.277 V 5.121 z M 15.742 3 h 42.332 v 13.456 c 0 2.358 1.918 4.277 4.276 4.277 h 13.457 v 33.2 H 14.194 V 4.548 C 14.194 3.694 14.888 3 15.742 3 z M 74.258 87 H 15.742 c -0.854 0 -1.548 -0.694 -1.548 -1.548 V 56.934 h 61.613 v 28.519 C 75.807 86.306 75.112 87 74.258 87 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <path d="M 34.604 62.687 h -8.816 c -0.829 0 -1.5 0.672 -1.5 1.5 s 0.671 1.5 1.5 1.5 h 2.908 v 15.164 c 0 0.828 0.671 1.5 1.5 1.5 s 1.5 -0.672 1.5 -1.5 V 65.687 h 2.908 c 0.829 0 1.5 -0.672 1.5 -1.5 S 35.432 62.687 34.604 62.687 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <path d="M 46.69 72.519 l 4.021 -7.599 c 0.387 -0.731 0.107 -1.64 -0.625 -2.027 c -0.729 -0.385 -1.639 -0.107 -2.027 0.625 l -3.065 5.794 l -3.066 -5.794 c -0.388 -0.732 -1.294 -1.012 -2.027 -0.625 c -0.732 0.388 -1.012 1.296 -0.624 2.027 l 4.02 7.599 l -4.02 7.599 c -0.388 0.731 -0.108 1.64 0.624 2.027 c 0.224 0.118 0.464 0.174 0.7 0.174 c 0.538 0 1.058 -0.29 1.327 -0.799 l 3.066 -5.794 l 3.065 5.794 c 0.27 0.509 0.789 0.799 1.327 0.799 c 0.237 0 0.477 -0.056 0.7 -0.174 c 0.732 -0.388 1.012 -1.296 0.625 -2.027 L 46.69 72.519 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <path d="M 64.212 62.687 h -8.815 c -0.828 0 -1.5 0.672 -1.5 1.5 s 0.672 1.5 1.5 1.5 h 2.908 v 15.164 c 0 0.828 0.672 1.5 1.5 1.5 s 1.5 -0.672 1.5 -1.5 V 65.687 h 2.907 c 0.828 0 1.5 -0.672 1.5 -1.5 S 65.04 62.687 64.212 62.687 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        </g>
                    </svg>
                </button>
            </a>

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


    // Video Input
    $posterUrl = (!empty($thumb_url)) ? $thumb_url : '../images/default-video-thumb.jpg';
    ?>
    <video src="<?php echo $vid_url; ?>" poster="<?php echo $posterUrl; ?>">

        <!-- Video Track -->
        <track kind="captions" label="English" srclang="en" src="../includes/proxy.php?url=<?php echo urlencode($subtitle_url) ?>">
    </video>

</div>

<div class="video-info-container text-center">
    <div class="video-info">
        <div class="video-info-title">
            <?php echo $vid_title; ?>
            <a style="cursor: pointer;">
                <svg onclick="copyToClipboard()" style="margin-left: 30px;" height="40" width="40" fill="#dbab83" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 483 483" xml:space="preserve">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <g>
                            <path d="M395.72,0c-48.204,0-87.281,39.078-87.281,87.281c0,2.036,0.164,4.03,0.309,6.029l-161.233,75.674 c-15.668-14.971-36.852-24.215-60.231-24.215c-48.204,0.001-87.282,39.079-87.282,87.282c0,48.204,39.078,87.281,87.281,87.281 c15.206,0,29.501-3.907,41.948-10.741l69.789,58.806c-3.056,8.896-4.789,18.396-4.789,28.322c0,48.204,39.078,87.281,87.281,87.281 c48.205,0,87.281-39.078,87.281-87.281s-39.077-87.281-87.281-87.281c-15.205,0-29.5,3.908-41.949,10.74l-69.788-58.805 c3.057-8.891,4.789-18.396,4.789-28.322c0-2.035-0.164-4.024-0.308-6.029l161.232-75.674c15.668,14.971,36.852,24.215,60.23,24.215 c48.203,0,87.281-39.078,87.281-87.281C482.999,39.079,443.923,0,395.72,0z"></path>
                        </g>
                    </g>
                </svg>
            </a>
        </div>
        <div class="video-info-main-category">
            <?php
            if (strpos($vid_category, '.') !== false) {
                $vid_category = substr($vid_category, 0, strrpos($vid_category, "."));
            }
            echo $vid_category;
            ?>
        </div>
    </div>
</div>

<?php
