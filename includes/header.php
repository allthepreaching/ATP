<?php

include_once 'dbh-live.php';

// Start the session
session_start();

//defaults for when video is not linked to
$meta_type = 'article';
$vid_title = 'ALLthePREACHING';
$vid_category = 'Everything NIFB.';
$thumb_url = 'https://www.allthepreaching.com/images/Pastor_Collage.png';
//if video is linked to
if (isset($_GET['path'])) {
    $meta_type = 'video';
    $parts = explode("/", $_GET['path']);
    // Get the last part and remove the file extension
    $vid_title = str_replace('_', ' ', pathinfo(end($parts), PATHINFO_FILENAME));
    // Get the second part as the category info
    $vid_category = str_replace('_', ' ', $parts[1]);
    // Get the video ID from the URL
    $file_path_no_extension = substr(urldecode($_GET['path']), 0, strrpos(urldecode($_GET['path']), '.'));
    $vid_url = 'https://www.kjv1611only.com/video/' . $file_path_no_extension . '.mp4';
    $vtt_to_txt_url = 'https://www.kjv1611only.com/'
        . urlencode('video/' .  $file_path_no_extension . '.vtt');
    $subtitle_url = str_replace('.mp4', '.vtt', $vid_url);
    $thumb_url = str_replace('.vtt', '.jpg', $subtitle_url);
    if (isset($_GET["time"])) {
        $vid_start_time = $_GET["time"] - 5;
        //$vid_start_time = convertTimestampToSeconds($_GET["time"]) - 5;
    } else {
        $vid_start_time = 0;
    }
} elseif (isset($_GET['id'])) {
    $vid_id = $_GET['id'];
    $query = $conn->prepare("SELECT vid_url, vid_title, search_category FROM videos WHERE id = ?");
    $query->bind_param("i", $vid_id); // "i" indicates the variable type is integer

    $query->execute();

    $query->bind_result($vid_url, $vid_title, $vid_category);

    if ($query->fetch()) {
        $subtitle_url = str_replace('.mp4', '.vtt', $vid_url);
        $thumb_url = str_replace('.vtt', '.jpg', $subtitle_url);
        $vtt_to_txt_url = $subtitle_url;
    } else {
        echo "No results found";
    }

    $query->close();
}

$cnt = "SELECT COUNT(*) AS count FROM `videos`";

?>

<!DOCTYPE html>
<html lang="en-US" class="background-100-e">

<!--    head section                -->

<head>

    <!-- META -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Every NIFB Sermon and More" />
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="fwbc,kjv,1611,censored,censorship,sanderson1611,sanderson,steven,anderson,pastor,berzins,robinson,mejia,shelley,thompson,jimenez,verity,tuscon,stedfast,sure,foundation,liberty,mountain,faithful,word,first,works,pure,words,all,scripture,baptist,church,osas,kjvo,grace,bible,jesus,christ,banned,preaching,ban,truth,bitchute,odysee,ugetube,king,james,post,trib,pre,wrath,matt,powell,creation,soul,winning,independent,fundemental,ifb,nifb,red,hot,fire,breathing,leather,lung,uncensored" />

    <!-- META OG -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="<?php echo $meta_type ?>" />
    <meta property="og:title" content="<?php echo $vid_title ?>" />
    <meta property="og:description" content="<?php echo $vid_category ?>" />
    <meta property="og:url" content="http://www.allthepreaching.com" />
    <meta property="og:image" content="<?php echo $thumb_url ?>" />
    <meta property="og:image:alt" content="All The Preaching" />

    <!-- FAVICON -->
    <link rel="shortcut icon" href="../favicon/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png" />
    <link rel="manifest" href="../favicon/site.webmanifest" />

    <!-- CSS -->
    <link rel="stylesheet" href="../bower_components/fontawesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../bower_components/animate.css/animate.min.css" />
    <link rel="stylesheet" href="../bower_components/minicolors/jquery.minicolors.css" />
    <link rel="stylesheet" href="../bower_components/slick.js/slick/slick.css" />
    <link rel="stylesheet" href="../bower_components/slick.js/slick/slick-theme.css" />
    <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap-custom.min.css" />
    <link rel="stylesheet" href="../lib/linecons/style.css" />
    <link rel="stylesheet" href="../styles/style.min.css" />
    <link rel="stylesheet" href="../theme-custom.css" />
    <link rel="stylesheet" href="../css/updated.css">
    <link rel="stylesheet" href="../css/search.css">
    <link rel="stylesheet" href="../css/modal-new-search.css">
    <link rel="stylesheet" href="../css/search-switch.css">
    <link rel="stylesheet" href="../css/modal-categories.css">
    <link rel="stylesheet" href="../css/video-player.css">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.2.0/css/fork-awesome.min.css" integrity="sha256-XoaMnoYC5TH6/+ihMEnospgm0J1PM/nioxbOUdnM8HY=" crossorigin="anonymous">

    <!-- SCRIPTS -->
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="../js/modal-categories.js" defer></script>

    <!-- Title -->
    <title>ALLthePREACHING</title>

</head>

<!--    body section                -->

<body x-data="{ isTop: true }" class="state1 background-100-e">
    <span class="close"></span>

    <!-- Modal Categories -->
    <div id="modal-categories" class="modal-categories">
        <div class="modal-categories-content">
            <span class="modal-categories-close" onclick="closeModal()">&times;</span>
            <h2>Categories</h2>

            <?php include_once 'header-categories.php' ?>

            <!-- Modal Categories List -->
            <div id="modal-categories-list"></div>
        </div>
    </div>

    <!--    to top section          -->
    <div class="to-top-email-container page-border bottom colors-e background-solid">
        <a href="#top">Back
            <span class="highlight">To Top</span>
        </a>|
        <a href="mailto:admin@allthepreaching.com" class="hover-effect">email us
            <span class="highlight">admin@allthepreaching.com</span>
        </a>
    </div>

    <!--    left border section         -->
    <div class="page-border left colors-e background-solid">
    </div>

    <!--    right border section         -->
    <div class="page-border right colors-e background-solid"></div>

    <!--    nav bar section         -->
    <nav class="navbar navbar-default navbar-fixed-top page-transition colors-e background-solid" id="top-nav">
        <div class="container">
            <div class="navbar-header">
                <a class="menu-toggle ext-nav-toggle visible-xs-block" data-target=".ext-nav" href="#"><span></span></a>
                <a class="menu-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" href="#"><span></span></a>
                <a class="navbar-brand" href="../index.php"><span class="highlight">ALL</span>THE<span class="highlight">PREACHING</span></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="./archive.php" class="hover-effect">Videos</a></li>
                </ul>
            </div>

            <?php
            $search_script_path = '';
            include_once 'search-form.php'
            ?>
        </div>
    </nav>

    <!--    right side dot scroll section   -->
    <ul id="dot-scroll" class="colors-e background-solid"></ul>

    <!-- Loader -->
    <div class="gate colors-e background-solid">
        <div class="gate-bar background-heading-e"></div>
        <ul class="loader">
            <li class="background-heading-e"></li>
            <li class="background-heading-e"></li>
            <li class="background-heading-e"></li>
        </ul>
    </div>