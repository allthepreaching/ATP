<?php

include_once 'dbh-local.php';

// Start the session
session_start();

// Check if the search was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Store the state of the toggle/checkbox in a session variable
    $_SESSION['search-toggle'] = isset($_POST['search-toggle']);
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
    <meta property="og:type" content="article" />
    <meta property="og:title" content="ALLthePREACHING" />
    <meta property="og:description" content="Everything NIFB." />
    <meta property="og:url" content="http://www.allthepreaching.com" />
    <meta property="og:image" content="https://www.allthepreaching.com/ATP_3_1200x630.png" />
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

    <!-- ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.2.0/css/fork-awesome.min.css" integrity="sha256-XoaMnoYC5TH6/+ihMEnospgm0J1PM/nioxbOUdnM8HY=" crossorigin="anonymous">

    <!-- SCRIPTS -->
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="../js/modal-new-search.js"></script>

    <!-- Title -->
    <title>ALLthePREACHING</title>

</head>

<!--    body section                -->

<body x-data="{ isTop: true }" class="state1 background-100-e">
    <span class="close"></span>

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
                    <li><a href="#contact" class="hover-effect">Contact</a></li>
                    <li class="hidden-xs"><a @click="isTop = !isTop" class="menu-toggle ext-nav-toggle" data-target=".ext-nav" :href="isTop ? '#top' : '#footer'"><span></span></a></li>
                </ul>
            </div>

            <!-- Search -->
            <div class="searchBox">
                <div class="search-field">
                    <form action="search.php" method="POST">

                        <!-- Search Toggle Container -->
                        <div class="search-toggle-container">
                            <span class="label" title="Choose categories to search category names only. Click for a list of category choices.">Categories</span>
                            <span>
                                <input type="checkbox" id="search-toggle" name="search-toggle" <?php if (isset($_SESSION['search-toggle']) && $_SESSION['search-toggle']) {
                                                                                                    echo 'checked';
                                                                                                } ?> />
                                <label for="search-toggle" id="search-toggle-label"></label>
                            </span>
                            <span class="label" title="Choose titles to search video titles only.">Titles</span>
                        </div>

                        <!-- Search Input & Button Container -->
                        <div class="search-input-button-container">

                            <!-- Search Input -->
                            <input id="search-input" type="text" name="search" placeholder="Search..." required>

                            <!-- Search Button -->
                            <button type="submit" name="submit-search">
                                <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 6C13.7614 6 16 8.23858 16 11M16.6588 16.6549L21 21M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z" stroke="#dbab83" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <!--    right side dot scroll section   -->
    <ul id="dot-scroll" class="colors-e background-solid"></ul>

    <!--    special thanks section          -->
    <div class="overlay-window credits-overlay colors-g background-95-g">
        <div class="overlay-control background-90-b">
            <a class="cross" href="#"></a>
        </div>
        <div class="overlay-view">
            <div class="content-container">
                <h3>Special Thanks To:</h3>
                <ul>
                    <li>
                        Everyone below for their inspiration and contribution of materials!
                        <ul>
                            <li><a target="_blank" href="http://faithfulwordbaptist.org/">Pastor Steven Anderson of Faithful Word Baptist Church</a>, <a target="_blank" href="https://goo.gl/maps/1soTpoNKwUtYVChm9">Tempe, AZ</a></li>
                            <li><a target="_blank" href="https://veritybaptist.com/">Pastor Roger Jimenez of Verity Baptist Church</a>, <a target="_blank" href="https://goo.gl/maps/rk6DToP6Q5Ga4C2dA">Sacramento, CA</a></li>
                            <li><a target="_blank" href="https://stedfastbaptistkjv.org/">Pastor Jonathan Shelley of Stedfast Baptist Church</a>, <a target="_blank" href="https://goo.gl/maps/hY9v3Q1WZDDo7vYF8">Hurst, TX</a></li>
                            <li><a target="_blank" href="http://strongholdbaptist.church/">Pastor Dave Berzins of Stronghold Baptist Church</a>, <a target="_blank" href="https://goo.gl/maps/b4B6Pc1mR7eWfzKn9">Norcross, GA</a></li>
                            <li><a target="_blank" href="http://surefoundationbaptist.com/">Pastor Aaron Thompson of Sure Foundation Baptist Church</a>, <a target="_blank" href="https://goo.gl/maps/xxWceyQreua4UCCp6">Vancouver, WA</a></li>
                            <li><a target="_blank" href="https://mountainbaptist.org/">Pastor Jason Robinson of Mountain Baptist Church</a>, <a target="_blank" href="https://goo.gl/maps/sRUYCpMC6BuVce2W7">Fairmont, WV</a></li>
                            <li><a target="_blank" href="https://www.fwbcla.org/">Pastor Bruce Mejia of First Works Baptist Church</a>, <a target="_blank" href="https://goo.gl/maps/gwH4AR2amLCZWEQy5">El Monte, CA</a></li>
                            <li><a target="_blank" href="https://shieldoffaithbaptist.com/">Pastor Joe Jones of Shield of Faith Baptist Church</a>, <a target="_blank" href="https://goo.gl/maps/uVak7sBHRvHo7teTA">Boise, ID</a></li>
                            <li><a target="_blank" href="https://holdfastbaptist.com/">Pastor Jared Pozarnsky Hold Fast Baptist Church</a>, <a target="_blank" href="https://goo.gl/maps/P22giCnn6DV6HPoG8">Fresno, CA</a></li>
                            <li><a target="_blank" href="https://blessedhopebaptistchurch.org.au/">Pastor Kevin Sepulveda Blessed Hope Baptist Church & New Life Baptist Church</a>, <a target="_blank" href="https://goo.gl/maps/9YuM5JNKzU3rCHrQ6">NSW, AU</a></li>
                            <li><a target="_blank" href="http://veritybaptistmanila.com/index.html">Brother Matthew Stucky Verity Baptist Church</a>, <a target="_blank" href="https://goo.gl/maps/mzjG3QgQk16V5wtN8">Manila, Philippines</a></li>
                            <li><a target="_blank" href="https://www.kevinkjv.com">Brother Kevin Roe of KevinKJV.com</a></li>
                            <li><a target="_blank" href="https://bannedpreaching.com/">Brother Thomas Coletto of BannedPreaching.com</a></li>
                            <li><a target="_blank" href="https://framingtheworld.com/">Brother Paul Wittenberger of FramingTheWorld.com</a></li>
                            <li><a target="_blank" href="https://benthebaptistkjv.wordpress.com/">Brother Ben Naim of BenTheBaptistKJV.com</a></li>
                            <li><a target="_blank" href="https://www.youtube.com/channel/UCUFgmArK_ljP52HJLBmMoQg">Brother Matt Powell of MattPowellOfficial on Youtube</a></li>
                            <li><a target="_blank" href="https://www.mid-michigan-soul-winners.com/">Brother Spencer Shaw of Mid Michigan Soulwinners</a></li>
                            <li><a target="_blank" href="http://www.godresource.com/">GodResource.com</a></li>
                            <li><a target="_blank" href="https://www.goodworksraiment.com//">Good Works Raiment</a></li>
                            <li><a target="_blank" href="https://servisflamezone.org/">ServisFlameZone.org</a></li>
                            <li>All the supporters on Youtube. Keep on uploading!</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Loader -->
    <div class="gate colors-e background-solid">
        <div class="gate-bar background-heading-e"></div>
        <ul class="loader">
            <li class="background-heading-e"></li>
            <li class="background-heading-e"></li>
            <li class="background-heading-e"></li>
        </ul>
    </div>