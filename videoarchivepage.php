<?php
include_once 'dbh.wamp.php';
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
    <meta property=”og:type” content=”article” />
    <meta property="og:title" content="ALLthePREACHING" />
    <meta property="og:description" content="Everything NIFB." />
    <meta property="og:url" content="http://www.allthepreaching.com" />
    <meta property="og:image" content="https://www.allthepreaching.com/images/ATP_3_1200x630.png" />
    <meta property="og:image:alt" content="All The Preaching" />

    <!-- FAVICON -->
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png" />
    <link rel="manifest" href="favicon/site.webmanifest" />

    <!-- CSS -->
    <link rel="stylesheet" href="bower_components/fontawesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="bower_components/animate.css/animate.min.css" />
    <link rel="stylesheet" href="bower_components/minicolors/jquery.minicolors.css" />
    <link rel="stylesheet" href="bower_components/slick.js/slick/slick.css" />
    <link rel="stylesheet" href="bower_components/slick.js/slick/slick-theme.css" />
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap-custom.min.css" />
    <link rel="stylesheet" href="lib/linecons/style.css" />
    <link rel="stylesheet" href="styles/style.min.css" />
    <link rel="stylesheet" href="theme-custom.css" />
    <link rel="stylesheet" href="styles/updated.css">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet" />

    <title>ALLthePreaching</title>

</head>

<!--    body section                -->

<body class="state1 background-100-e">

    <!--    to top section          -->
    <div class="page-border bottom colors-e background-solid"><a href="#top" class="hover-effect">To <span class="highlight">Top</span></a></div>

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
                <a class="navbar-brand" href="index.php"><span class="highlight">ALL</span>THE<span class="highlight">PREACHING</span></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php" class="hover-effect">Home</a></li>
                    <li><a href="#salvation" class="hover-effect">Salvation</a></li>
                    <li><a href="#preaching" class="hover-effect">Preaching</a></li>
                    <li><a href="#abible" class="hover-effect">Audio Bible</a></li>
                    <li><a href="#sw" class="hover-effect">Soulwinning</a></li>
                    <li><a href="#moments" class="hover-effect">Moments</a></li>
                    <li><a href="#docs" class="hover-effect">Documentaries</a></li>
                    <li><a href="#creation" class="hover-effect">Creation videos</a></li>
                    <li><a href="#interviews" class="hover-effect">Interviews</a></li>
                    <li><a href="#podcasts" class="hover-effect">Podcasts</a></li>
                    <li><a href="#landmarks" class="hover-effect">Landmarks</a></li>
                    <li><a href="#ftw" class="hover-effect">framing the world</a></li>
                    <li><a href="#false" class="hover-effect">False Prophets</a></li>
                    <li><a href="#other" class="hover-effect">Other videos</a></li>
                    <li><a href="#music" class="hover-effect">Music</a></li>
                    <li class="hidden-xs"><a class="menu-toggle ext-nav-toggle" data-target=".ext-nav" href="#footer"><span></span></a></li>
                </ul>
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
    <div class="gate colors-e background-solid">
        <div class="gate-bar background-heading-e"></div>
        <ul class="loader">
            <li class="background-heading-e"></li>
            <li class="background-heading-e"></li>
            <li class="background-heading-e"></li>
        </ul>
    </div>

    <!--    top section         -->
    <section id="top">
        <div class="view">
            <div class="content home-suzi full-size colors-c background-40">
                <div class="container">
                    <br><br><br><br><br><br>
                    <h1>atp <span class="highlight">archive</span></h1>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <p class="title text-center">
                                Select from the categories above.
                            </p>
                            <p class="title text-center">
                                some sections have <span class="highlight">100's of videos</span>, so be sure to scroll through!
                                <br>
                                Use <span class="highlight">ctrl+f</span> to search for keywords.
                            </p>
                            <p class="title text-center">
                                new content <span class="highlight">uploaded daily</span>!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--        salvation section        -->
    <section class="colors-g page-transition non-preloading" id="salvation">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                Salvation
            </h2>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'salvation' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                const COLUMNS = 4;
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section      -->
    <!--        preaching section menu      -->
    <section class="colors-g page-transition non-preloading" id="preaching">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">preaching</h2>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="#fbbf">
                        <h5>
                            fire breathing<br>baptist fellowship
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#fbc">
                        <h5>
                            fundamentalist<br>baptist conference
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#fwbcpc">
                        <h5>
                            faithful word<br>preaching class
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#masa">
                        <h5>
                            make america<br>straight again conference
                        </h5>
                    </a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="#rhpc">
                        <h5>
                            red hot<br>preaching conference
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#sermonclips">
                        <h5>
                            sermon<br>clips
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#fullsermons">
                        <h5>
                            full<br>sermons
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                </div>
            </div>
            <hr>
        </div>
    </section>

    <!--        preaching section fbbf      -->
    <section class="colors-g page-transition non-preloading" id="fbbf">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">fire breathing</h2>
            <h2>baptist fellowship</h2>
            <h6>
                <a href="#preaching" class="hover-effect">Back to <span class="highlight">preaching Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="#fbbf2019">
                        <h5>
                            2019
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#fbbf2021">
                        <h5>
                            2021
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
            </div>
            <br>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
            </div>
            <br>
            <hr>
        </div>
    </section>

    <!--        preaching section masa      -->
    <section class="colors-g page-transition non-preloading" id="masa">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">masa</h2>
            <h2>conference</h2>
            <h6>
                <a href="#preaching" class="hover-effect">
                    Back to <span class="highlight">preaching Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="#masa2019">
                        <h5>
                            2019
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
            </div>
            <br>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
            </div>
            <br>
            <hr>
        </div>
    </section>

    <!--        preaching section fbc      -->
    <section class="colors-g page-transition non-preloading" id="fbc">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">fundamentalist</h2>
            <h2>baptist conference</h2>
            <h6>
                <a href="#preaching" class="hover-effect">
                    Back to <span class="highlight">preaching Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="#fbc2019">
                        <h5>
                            2019
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#fbc2020">
                        <h5>
                            2020
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#fbc2021">
                        <h5>
                            2021
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
            </div>
            <br>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
            </div>
            <br>
            <hr>
        </div>
    </section>
    <br>

    <!--        preaching section fwbcpc      -->
    <section class="colors-g page-transition non-preloading" id="fwbcpc">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">faithful word</h2>
            <h2>preaching class</h2>
            <h6>
                <a href="#preaching" class="hover-effect">
                    Back to <span class="highlight">preaching Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="#fwbcpc2022">
                        <h5>
                            2022
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
            </div>
            <br>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
            </div>
            <br>
            <hr>
        </div>
    </section>

    <!--        preaching section sermon clips      -->
    <section class="colors-g page-transition non-preloading" id="sermonclips">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">sermon clips</h2>
            <h6>
                <a href="#preaching" class="hover-effect">
                    Back to <span class="highlight">preaching Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="#scawes">
                        <h5>
                            Bro. Dillon Awes
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#scpowell">
                        <h5>
                            Bro. Matt Powell
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#scsegura">
                        <h5>
                            Bro. Chris Segura
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#scstucky">
                        <h5>
                            bro. matthew stucky
                        </h5>
                    </a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="#scressl">
                        <h5>
                            Deacon Corbin Ressl
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#scanderson">
                        <h5>
                            Pastor Steven Anderson
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#scberzins">
                        <h5>
                            Pastor Dave Berzins
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#scjimenez">
                        <h5>
                            Pastor Roger Jimenez
                        </h5>
                    </a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="#scmejia">
                        <h5>
                            Pastor joe jones
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#scmejia">
                        <h5>
                            Pastor Bruce Mejia
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#scpozarnsky">
                        <h5>
                            Pastor Jared Pozarnsky
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#scshelley">
                        <h5>
                            Pastor Jonathan Shelley
                        </h5>
                    </a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="#scthompson">
                        <h5>
                            Pastor Aaron Thompson
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>
                            <br>
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>
                            <br>
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>
                            <br>
                        </h5>
                    </a>
                </div>
            </div>
            <hr>
        </div>
    </section>

    <!-- preaching section full sermons -->
    <section class="colors-g page-transition non-preloading" id="fullsermons">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">full sermons</h2>
            <h6>
                <a href="#preaching" class="hover-effect">
                    Back to <span class="highlight">preaching Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="#fsawes">
                        <h5>
                            Bro. Dillon Awes
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#fscooper">
                        <h5>
                            Bro. Raymond Cooper
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#fsnaim">
                        <h5>
                            Bro. Ben Naim
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#fskiefer">
                        <h5>
                            Bro. David Kiefer
                        </h5>
                    </a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="#fspowell">
                        <h5>
                            Bro. Matt Powell
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#fssegura">
                        <h5>
                            Bro. Chris Segura
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#fsstucky">
                        <h5>
                            bro. matthew stucky
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#fsressl">
                        <h5>
                            Deacon Corbin Ressl
                        </h5>
                    </a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="#fsanderson">
                        <h5>
                            Pastor Steven Anderson
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#fsberzins">
                        <h5>
                            Pastor Dave Berzins
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#fsjimenez">
                        <h5>
                            Pastor Roger Jimenez
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#fsjones">
                        <h5>
                            Pastor Joe Jones
                        </h5>
                    </a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="#fsmejia">
                        <h5>
                            Pastor Bruce Mejia
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#fspozarnsky">
                        <h5>
                            Pastor Jared Pozarnsky
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#fsrobinson">
                        <h5>
                            Pastor Jason Robinson
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#fssepulveda">
                        <h5>
                            Pastor Kevin Sepulveda
                        </h5>
                    </a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="#fsshelley">
                        <h5>
                            Pastor Jonathan Shelley
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#fsthompson">
                        <h5>
                            Pastor Aaron Thompson
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
            </div>
            <br>
            <hr>
        </div>
    </section>

    <!--        preaching section rhpc      -->
    <section class="colors-g page-transition non-preloading" id="rhpc">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">red hot</h2>
            <h2>preaching conference</h2>
            <h6>
                <a href="#preaching" class="hover-effect">
                    Back to <span class="highlight">preaching Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="#rhpc2016">
                        <h5>
                            2016
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#rhpc2017">
                        <h5>
                            2017
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#rhpc2018">
                        <h5>
                            2018
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#rhpc2019">
                        <h5>
                            2019
                        </h5>
                    </a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="#rhpc2020">
                        <h5>
                            2020
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#rhpc2021">
                        <h5>
                            2021
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
            </div>
            <br>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
            </div>
            <br>
            <hr>
        </div>
    </section>

    <!--        preaching section fire breathing baptist fellowship 2019      -->
    <section class="colors-g page-transition non-preloading" id="fbbf2019">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                fbbf 2019
            </h2>
            <h6>
                <a href="#fbbf" class="hover-effect">
                    Back to <span class="highlight">fbbf Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'fbbf2019' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section fire breathing baptist fellowship 2021      -->
    <section class="colors-g page-transition non-preloading" id="fbbf2021">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                fbbf 2021
            </h2>
            <h6>
                <a href="#fbbf" class="hover-effect">
                    Back to <span class="highlight">fbbf Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'fbbf2021' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section fundamentalist baptist conference 2019      -->
    <section class="colors-g page-transition non-preloading" id="fbc2019">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                fbc 2019
            </h2>
            <h6>
                <a href="#fbc" class="hover-effect">
                    Back to <span class="highlight">fbc Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'fbc2019' ORDER BY vid_title DESC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section fundamentalist baptist conference 2020      -->
    <section class="colors-g page-transition non-preloading" id="fbc2020">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                fbc 2020
            </h2>
            <h6>
                <a href="#fbc" class="hover-effect">
                    Back to <span class="highlight">fbc Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'fbc2020' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section fundamentalist baptist conference 2021      -->
    <section class="colors-g page-transition non-preloading" id="fbc2021">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                fbc 2021
            </h2>
            <h6>
                <a href="#fbc" class="hover-effect">
                    Back to <span class="highlight">fbc Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'fbc2021' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section fwbc preaching class 2022      -->
    <section class="colors-g page-transition non-preloading" id="fwbcpc2022">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                fwbc preaching class<br>2022
            </h2>
            <h6>
                <a href="#fwbcpc" class="hover-effect">
                    Back to <span class="highlight">fwbc preaching class Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'fwbcpc2022' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section masa 2019     -->
    <section class="colors-g page-transition non-preloading" id="masa2019">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                masa 2019
            </h2>
            <h6>
                <a href="#masa" class="hover-effect">
                    Back to <span class="highlight">masa Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'masa2019' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section red hot preaching conf. 2016      -->
    <section class="colors-g page-transition non-preloading" id="rhpc2016">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                RHPC 2016
            </h2>
            <h6>
                <a href="#rhpc" class="hover-effect">
                    Back to <span class="highlight">rhpc Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'rhpc2016' ORDER BY vid_title DESC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section red hot preaching conf. 2017    -->
    <section class="colors-g page-transition non-preloading" id="rhpc2017">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                RHPC 2017
            </h2>
            <h6>
                <a href="#rhpc" class="hover-effect">
                    Back to <span class="highlight">rhpc Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'rhpc2017' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section red hot preaching conf. 2018      -->
    <section class="colors-g page-transition non-preloading" id="rhpc2018">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                RHPC 2018
            </h2>
            <h6>
                <a href="#rhpc" class="hover-effect">
                    Back to <span class="highlight">rhpc Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'rhpc2018' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section red hot preaching conf. 2019      -->
    <section class="colors-g page-transition non-preloading" id="rhpc2019">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                RHPC 2019
            </h2>
            <h6>
                <a href="#rhpc" class="hover-effect">
                    Back to <span class="highlight">rhpc Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'rhpc2019' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section red hot preaching conf. 2020      -->
    <section class="colors-g page-transition non-preloading" id="rhpc2020">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                RHPC 2020
            </h2>
            <h6>
                <a href="#rhpc" class="hover-effect">
                    Back to <span class="highlight">rhpc Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'rhpc2020' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section red hot preaching conf. 2021      -->
    <section class="colors-g page-transition non-preloading" id="rhpc2021">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                RHPC 2021
            </h2>
            <h6>
                <a href="#rhpc" class="hover-effect">
                    Back to <span class="highlight">rhpc Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'rhpc2021' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section clips awes      -->
    <section class="colors-g page-transition non-preloading" id="scawes">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                sermon clips<br>bro. dillon awes
            </h2>
            <h6>
                <a href="#sermonclips" class="hover-effect">
                    Back to <span class="highlight">sermon clips menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'scawes' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section clips powell      -->
    <section class="colors-g page-transition non-preloading" id="scpowell">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                Sermon Clips<br>Bro. Matt Powell
            </h2>
            <h6>
                <a href="#sermonclips" class="hover-effect">
                    Back to <span class="highlight">sermon clips Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'scpowell' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section clips segura     -->
    <section class="colors-g page-transition non-preloading" id="scsegura">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">sermon clips<br>Bro. Segura
            </h2>
            <h6>
                <a href="#sermonclips" class="hover-effect">
                    Back to <span class="highlight">sermon clips Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'scsegura' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section clips stucky      -->
    <section class="colors-g page-transition non-preloading" id="scstucky">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                Sermon Clips<br>bro matthew stucky
            </h2>
            <h6>
                <a href="#sermonclips" class="hover-effect">
                    Back to <span class="highlight">sermon clips Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'scstucky' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section clips ressl      -->
    <section class="colors-g page-transition non-preloading" id="scressl">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                Sermon Clips<br>Deacon Ressl
            </h2>
            <h6>
                <a href="#sermonclips" class="hover-effect">
                    Back to <span class="highlight">sermon clips Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'scressl' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section clips anderson      -->
    <section class="colors-g page-transition non-preloading" id="scanderson">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                Sermon Clips<br>Pastor Anderson
            </h2>
            <h6>
                <a href="#sermonclips" class="hover-effect">
                    Back to <span class="highlight">sermon clips Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'scanderson' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section clips berzins      -->
    <section class="colors-g page-transition non-preloading" id="scberzins">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2>Sermon Clips<br><span class="highlight">Pastor Berzins</span></h2>
            <h6>
                <a href="#sermonclips" class="hover-effect">
                    Back to <span class="highlight">sermon clips Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'scberzins' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section clips jimenez      -->

    <section class="colors-g page-transition non-preloading" id="scjimenez">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                Sermon Clips<br>Pastor Jimenez
            </h2>
            <h6>
                <a href="#sermonclips" class="hover-effect">
                    Back to <span class="highlight">sermon clips Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'scjimenez' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section clips jones      -->

    <section class="colors-g page-transition non-preloading" id="scjimenez">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                Sermon Clips<br>Pastor jones
            </h2>
            <h6>
                <a href="#sermonclips" class="hover-effect">
                    Back to <span class="highlight">sermon clips Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'scjones' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section clips mejia      -->
    <section class="colors-g page-transition non-preloading" id="scmejia">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                Sermon Clips<br>Pastor Mejia
            </h2>
            <h6>
                <a href="#sermonclips" class="hover-effect">
                    Back to <span class="highlight">sermon clips Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'scmejia' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section clips pozarnsky      -->
    <section class="colors-g page-transition non-preloading" id="scpozarnsky">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                Sermon Clips<br>Bro. Pozarnsky
            </h2>
            <h6>
                <a href="#sermonclips" class="hover-effect">
                    Back to <span class="highlight">sermon clips Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'scpozarnsky' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section clips shelley      -->
    <section class="colors-g page-transition non-preloading" id="scshelley">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                Sermon Clips<br>Pastor Shelley
            </h2>
            <h6>
                <a href="#sermonclips" class="hover-effect">
                    Back to <span class="highlight">sermon clips Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'scshelley' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section clips thompson      -->
    <section class="colors-g page-transition non-preloading" id="scthompson">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                Sermon Clips<br>Pastor Thompson
            </h2>
            <h6>
                <a href="#sermonclips" class="hover-effect">
                    Back to <span class="highlight">sermon clips Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'scthompson' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section sermons awes     -->
    <section class="colors-g page-transition non-preloading" id="fsawes">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                sermons<br>bro. dillon awes
            </h2>
            <h6>
                <a href="#fullsermons" class="hover-effect">
                    Back to <span class="highlight">full sermons Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'fsawes' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section sermons cooper     -->
    <section class="colors-g page-transition non-preloading" id="fscooper">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                sermons<br>bro. raymond cooper
            </h2>
            <h6>
                <a href="#fullsermons" class="hover-effect">
                    Back to <span class="highlight">full sermons Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'fscooper' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
    </section>

    <!--        preaching section sermons kiefer     -->
    <section class="colors-g page-transition non-preloading" id="fskiefer">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                sermons<br>bro. david kiefer
            </h2>
            <h6>
                <a href="#fullsermons" class="hover-effect">
                    Back to <span class="highlight">full sermons Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'fskiefer' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section sermons naim      -->
    <section class="colors-g page-transition non-preloading" id="fsnaim">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                Sermons<br>Bro. Ben Naim
            </h2>
            <h6>
                <a href="#fullsermons" class="hover-effect">
                    Back to <span class="highlight">full sermons Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'fsnaim' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section sermons powell      -->
    <section class="colors-g page-transition non-preloading" id="fspowell">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                Sermons<br>Bro. Matt Powell
            </h2>
            <h6>
                <a href="#fullsermons" class="hover-effect">
                    Back to <span class="highlight">full sermons Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'fspowell' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section sermons segura      -->
    <section class="colors-g page-transition non-preloading" id="fssegura">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                Sermons<br>Bro. Chris Segura
            </h2>
            <h6>
                <a href="#fullsermons" class="hover-effect">
                    Back to <span class="highlight">full sermons Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'fssegura' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section sermons stucky      -->
    <section class="colors-g page-transition non-preloading" id="fsstucky">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                Sermons<br>Bro. matthew stucky
            </h2>
            <h6>
                <a href="#fullsermons" class="hover-effect">
                    Back to <span class="highlight">full sermons Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'fsstucky' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section sermons ressl      -->
    <section class="colors-g page-transition non-preloading" id="fsressl">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                Sermons<br>Deacon Ressl
            </h2>
            <h6>
                <a href="#fullsermons" class="hover-effect">
                    Back to <span class="highlight">full sermons Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'fsressl' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section sermons anderson      -->
    <section class="colors-g page-transition non-preloading" id="fsanderson">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                Sermons<br>Pastor Anderson
            </h2>
            <h6>
                <a href="#fullsermons" class="hover-effect">
                    Back to <span class="highlight">full sermons Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'fsanderson' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section sermons berzins      -->
    <section class="colors-g page-transition non-preloading" id="fsberzins">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                Sermons<br>Pastor Berzins
            </h2>
            <h6>
                <a href="#fullsermons" class="hover-effect">
                    Back to <span class="highlight">full sermons Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'fsberzins' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section sermons jimenez      -->
    <section class="colors-g page-transition non-preloading" id="fsjimenez">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                Sermons<br>Pastor Jimenez
            </h2>
            <h6>
                <a href="#fullsermons" class="hover-effect">
                    Back to <span class="highlight">full sermons Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'fsjimenez' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section sermons jones      -->
    <section class="colors-g page-transition non-preloading" id="fsjones">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                Sermons<br>Pastor Jones
            </h2>
            <h6>
                <a href="#fullsermons" class="hover-effect">
                    Back to <span class="highlight">full sermons Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'fsjones' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section sermons mejia      -->
    <section class="colors-g page-transition non-preloading" id="fsmejia">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                Sermons<br>Pastor Mejia
            </h2>
            <h6>
                <a href="#fullsermons" class="hover-effect">
                    Back to <span class="highlight">full sermons Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'fsmejia' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section sermons pozarnsky      -->
    <section class="colors-g page-transition non-preloading" id="fspozarnsky">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                Sermons<br>pastor Pozarnsky
            </h2>
            <h6>
                <a href="#fullsermons" class="hover-effect">
                    Back to <span class="highlight">full sermons Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'fspozarnsky' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section sermons robinson      -->
    <section class="colors-g page-transition non-preloading" id="fsrobinson">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                Sermons<br>Pastor Robinson
            </h2>
            <h6>
                <a href="#fullsermons" class="hover-effect">
                    Back to <span class="highlight">full sermons Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'fsrobinson' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section sermons sepulveda      -->
    <section class="colors-g page-transition non-preloading" id="fssepulveda">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                Sermons<br>Pastor sepulveda
            </h2>
            <h6>
                <a href="#fullsermons" class="hover-effect">
                    Back to <span class="highlight">full sermons Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'fssepulveda' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section sermons shelley      -->
    <section class="colors-g page-transition non-preloading" id="fsshelley">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                Sermons<br>Pastor Shelley
            </h2>
            <h6>
                <a href="#fullsermons" class="hover-effect">
                    Back to <span class="highlight">full sermons Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'fsshelley' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        preaching section sermons thompson      -->
    <section class="colors-g page-transition non-preloading" id="fsthompson">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                Sermons<br>Pastor Thompson
            </h2>
            <h6>
                <a href="#fullsermons" class="hover-effect">
                    Back to <span class="highlight">full sermons Menu</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'fsthompson' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        audio bible section     -->
    <section class="colors-g page-transition non-preloading" id="abible">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                The Bible
            </h2>
            <h5 class="highlight">read by</h5>
            <h2 class="highlight">
                Alexander Scourby
            </h2>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'abible' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        soul winning section        -->
    <section class="colors-g page-transition non-preloading" id="sw">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">Soulwinning</h2>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="#swmotivation">
                        <h5>
                            Soulwinning<br>Motivation
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#swsanderson">
                        <h5>
                            Soulwinning Seminar<br>Pastor Anderson
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#swsjimenez">
                        <h5>
                            Soulwinning Seminar<br>Pastor Jimenez
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#swsshelley">
                        <h5>
                            Soulwinning Seminar<br>Pastor Shelley
                        </h5>
                    </a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="#swtips">
                        <h5>
                            Soulwinning<br>Tips
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#swwberzins">
                        <h5>
                            Soulwinning workshop<br>pastor berzins
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#">
                        <h5>
                            <br>
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#">
                        <h5>
                            <br>
                        </h5>
                    </a>
                </div>
            </div>
            <hr>
        </div>
    </section>

    <!--        soul winning section motivation      -->
    <section class="colors-g page-transition non-preloading" id="swmotivation">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                Soul Winning<br>Motivation
            </h2>
            <h6>
                <a href="#sw" class="hover-effect">
                    Back to <span class="highlight">Soul Winning</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'swmotivation' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        soul winning section seminar anderson      -->
    <section class="colors-g page-transition non-preloading" id="swsanderson">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                Seminar<br>Pastor Anderson
            </h2>
            <h6>
                <a href="#sw" class="hover-effect">
                    Back to <span class="highlight">Soul Winning</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'swsanderson' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        soul winning section seminar jimenez      -->
    <section class="colors-g page-transition non-preloading" id="swsjimenez">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                Seminar<br>Pastor Jimenez
            </h2>
            <h6>
                <a href="#sw" class="hover-effect">
                    Back to <span class="highlight">Soul Winning</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'swsjimenez' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        soul winning section seminar shelley      -->
    <section class="colors-g page-transition non-preloading" id="swsshelley">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                Seminar<br>Pastor shelley
            </h2>
            <h6>
                <a href="#sw" class="hover-effect">
                    Back to <span class="highlight">Soul Winning</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'swsshelley' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        soul winning section tips      -->
    <section class="colors-g page-transition non-preloading" id="swtips">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                Soul Winning<br>Tips
            </h2>
            <h6>
                <a href="#sw" class="hover-effect">
                    Back to <span class="highlight">Soul Winning</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'swtips' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        soul winning section workshops      -->
    <section class="colors-g page-transition non-preloading" id="swwberzins">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                SoulWinning workshop<br>pastor berzins
            </h2>
            <h6>
                <a href="#sw" class="hover-effect">
                    Back to <span class="highlight">Soul Winning</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'swwberzins' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        moments section        -->
    <section class="colors-g page-transition non-preloading" id="moments">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">Moments</h2>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="#mcreation">
                        <h5>
                            Creation<br>Moments
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#mdotd">
                        <h5>
                            day of the dead<br>Moments
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#mhindu">
                        <h5>
                            hindu<br>moments
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#misrael">
                        <h5>
                            israel<br>moments
                        </h5>
                    </a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="#mkjv">
                        <h5>
                            KJV<br>Minutes
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#mmormon">
                        <h5>
                            mormon<br>moments
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#mposttrib">
                        <h5>
                            post tribulation<br>moments
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#mshort">
                        <h5>
                            Short Videos<br>Pastor Jimenez
                        </h5>
                    </a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="#dummies">
                        <h5>
                            something for<br>dummies
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#mthess">
                        <h5>
                            thessalonian<br>moments
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#mtrinity">
                        <h5>
                            trinity<br>moments
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                </div>
            </div>
            <hr>
        </div>
    </section>

    <!--        moments section creation      -->
    <section class="colors-g page-transition non-preloading" id="mcreation">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                creation moments
            </h2>
            <h6>
                <a href="#moments" class="hover-effect">
                    Back to <span class="highlight">moments</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'mcreation' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        moments section day of the dead      -->
    <section class="colors-g page-transition non-preloading" id="mdotd">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                day of the dead moments
            </h2>
            <h6>
                <a href="#moments" class="hover-effect">
                    Back to <span class="highlight">moments</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'mdotd' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        moments section dummies      -->
    <section class="colors-g page-transition non-preloading" id="dummies">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                something for dummies
            </h2>
            <h6>
                <a href="#moments" class="hover-effect">
                    Back to <span class="highlight">moments</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'dummies' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        moments section hindu      -->
    <section class="colors-g page-transition non-preloading" id="mhindu">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                hindu moments
            </h2>
            <h6>
                <a href="#moments" class="hover-effect">
                    Back to <span class="highlight">moments</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'mhindu' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        moments section israel      -->
    <section class="colors-g page-transition non-preloading" id="misrael">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                israel moments
            </h2>
            <h6>
                <a href="#moments" class="hover-effect">
                    Back to <span class="highlight">moments</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'misrael' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        moments section kjv      -->
    <section class="colors-g page-transition non-preloading" id="mkjv">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                kjv minutes
            </h2>
            <h6>
                <a href="#moments" class="hover-effect">
                    Back to <span class="highlight">moments</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'mkjv' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        moments section mormon      -->
    <section class="colors-g page-transition non-preloading" id="mmormon">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">mormon moments
            </h2>
            <h6>
                <a href="#moments" class="hover-effect">
                    Back to <span class="highlight">moments</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'mmormon' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        moments section post trib      -->
    <section class="colors-g page-transition non-preloading" id="mposttrib">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                post tribulation<br>moments
            </h2>
            <h6>
                <a href="#moments" class="hover-effect">
                    Back to <span class="highlight">moments</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'mposttrib' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        moments section short videos      -->
    <section class="colors-g page-transition non-preloading" id="mshort">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                short videos by<br>pastor jimenez
            </h2>
            <h6>
                <a href="#moments" class="hover-effect">
                    Back to <span class="highlight">moments</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'mshort' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        moments section thessalonian      -->
    <section class="colors-g page-transition non-preloading" id="mthess">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                thessolonian moments
            </h2>
            <h6>
                <a href="#moments" class="hover-effect">
                    Back to <span class="highlight">moments</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'mthess' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        moments section trinity      -->
    <section class="colors-g page-transition non-preloading" id="mtrinity">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                trinity moments
            </h2>
            <h6>
                <a href="#moments" class="hover-effect">
                    Back to <span class="highlight">moments</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'mtrinity' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        documentaries section        -->
    <section class="colors-g page-transition non-preloading" id="docs">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">Documentaries</h2>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'docs' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        creation section        -->
    <section class="colors-g page-transition non-preloading" id="creation">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">Creation</h2>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'creation' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        interviews section        -->
    <section class="colors-g page-transition non-preloading" id="interviews">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">Interviews</h2>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'interviews' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        podcasts section menu       -->
    <section class="colors-g page-transition non-preloading" id="podcasts">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">Podcasts</h2>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="#bias">
                        <h5>
                            Baptist Bias
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#olive">
                        <h5>
                            olive crown
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#rod">
                        <h5>
                            rod of iron
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#sword">
                        <h5>
                            sword of the spirit
                        </h5>
                    </a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="#true">
                        <h5>
                            true born sons
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#uncensored">
                        <h5>
                            uncensored
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <h5>

                        </h5>
                    </a>
                </div>
            </div>
            <hr>
        </div>
    </section>

    <!--        podcasts section bias      -->
    <section class="colors-g page-transition non-preloading" id="bias">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                baptist bias
            </h2>
            <h6>
                <a href="#podcasts" class="hover-effect">
                    Back to <span class="highlight">podcasts</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'bias' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        podcasts section olive      -->

    <section class="colors-g page-transition non-preloading" id="olive">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                olive crown
            </h2>
            <h6>
                <a href="#podcasts" class="hover-effect">
                    Back to <span class="highlight">podcasts</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'olive' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        podcasts section rod      -->
    <section class="colors-g page-transition non-preloading" id="rod">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                rod of iron
            </h2>
            <h6>
                <a href="#podcasts" class="hover-effect">
                    Back to <span class="highlight">podcasts</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'rod' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        podcasts section sword      -->
    <section class="colors-g page-transition non-preloading" id="sword">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                sword of the spirit
            </h2>
            <h6>
                <a href="#podcasts" class="hover-effect">
                    Back to <span class="highlight">podcasts</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'sword' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        podcasts section true      -->
    <section class="colors-g page-transition non-preloading" id="true">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                true born sons
            </h2>
            <h6>
                <a href="#podcasts" class="hover-effect">
                    Back to <span class="highlight">podcasts</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'true' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        podcasts section uncensored      -->
    <section class="colors-g page-transition non-preloading" id="uncensored">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                uncensored
            </h2>
            <h6>
                <a href="#podcasts" class="hover-effect">
                    Back to <span class="highlight">podcasts</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'uncensored' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        landmarks section        -->
    <section class="colors-g page-transition non-preloading" id="landmarks">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">Landmarks</h2>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'landmarks' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        ftw section        -->
    <section class="colors-g page-transition non-preloading" id="ftw">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">Framing The World</h2>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'ftw' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        other section        -->
    <section class="colors-g page-transition non-preloading" id="other">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">Other Videos</h2>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'other' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        music section menu      -->
    <section class="colors-g page-transition non-preloading" id="music">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">music</h2>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <a href="#musicmp3">
                        <h5>
                            audio<br>mp3
                        </h5>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="#musicmp4">
                        <h5>
                            video<br>mp4
                        </h5>
                    </a>
                </div>
            </div>
            <hr>
        </div>
    </section>

    <!--        music mp3 menu      -->
    <section class="colors-g page-transition non-preloading" id="musicmp3">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2><span class="highlight">music</span><br>(audio mp3)</h2>
            <a target="_blank" href="video/13music/AllMusic.zip">
                <h6>
                    <span class="thin-font-weight">want mp3 versions of all the music in our music section? download a zip file <span class="highlight thin-font-weight">here</span>!</span>
                </h6>
            </a>
            <h6>
                <a href="#music" class="hover-effect">
                    Back to <span class="highlight">music</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="#hymnsmp3">
                        <h5>
                            soul stirring<br>hymns
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#othermusicmp3">
                        <h5>
                            other soul stirring<br>music
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#mpsalmsmp3">
                        <h5>
                            soul stirring<br>psalms
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#fwbccolmp3">
                        <h5>
                            fwbc hymn<br>collection
                        </h5>
                    </a>
                </div>
            </div>
            <hr>
        </div>
    </section>

    <!--        music mp4 menu      -->
    <section class="colors-g page-transition non-preloading" id="musicmp4">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2><span class="highlight">music</span><br>(video mp4)</h2>
            <h6>
                <a href="#music" class="hover-effect">
                    Back to <span class="highlight">music</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <a href="#hymns">
                        <h5>
                            soul stirring<br>hymns
                        </h5>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#othermusic">
                        <h5>
                            other soul stirring<br>music
                        </h5>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#mpsalms">
                        <h5>
                            soul stirring<br>psalms
                        </h5>
                    </a>
                </div>
            </div>
            <hr>
        </div>
    </section>

    <!--        music hymns mp4       -->
    <section class="colors-g page-transition non-preloading" id="hymns">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2><span class="highlight">hymns</span><br>(video mp4)</h2>
            <h6>
                <a href="#musicmp4" class="hover-effect">
                    Back to <span class="highlight">music (video mp4)</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'hymns' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        music hymns mp3     -->
    <section class="colors-g page-transition non-preloading" id="hymnsmp3">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2><span class="highlight">hymns</span><br>(audio mp3)</h2>
            <h6>
                <a href="#musicmp3" class="hover-effect">
                    Back to <span class="highlight">music (audio mp3)</span>
                </a>
            </h6>
            <h6>
                <a href="video/13music/HymnsMp3.zip" class="hover-effect">
                    for a zip file of all the hymns on this page <span class="highlight">click here!</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'hymnsmp3' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        music other mp4      -->
    <section class="colors-g page-transition non-preloading" id="othermusic">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2><span class="highlight">other music</span><br>(video mp4)</h2>
            <h6>
                <a href="#musicmp4" class="hover-effect">
                    Back to <span class="highlight">music (video mp4)</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'othermusic' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        music other mp3     -->
    <section class="colors-g page-transition non-preloading" id="othermusicmp3">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2><span class="highlight">other music</span><br>(audio mp3)</h2>
            <h6>
                <a href="#musicmp3" class="hover-effect">
                    Back to <span class="highlight">music (audio mp3)</span>
                </a>
            </h6>
            <h6>
                <a href="video/13music/OtherMp3.zip" class="hover-effect">
                    for a zip file of all the other music on this page <span class="highlight">click here!</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'othermusicmp3' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="colors-g page-transition non-preloading" id="mpsalms">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2><span class="highlight">psalms</span><br>(video mp4)</h2>

            <h6><a href="#musicmp4" class="hover-effect">Back to <span class="highlight">music (video mp4)</span></a></h6>

            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'mpsalms' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        music psalms mp3     -->
    <section class="colors-g page-transition non-preloading" id="mpsalmsmp3">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2><span class="highlight">psalms</span><br>(audio mp3)</h2>
            <h6>
                <a href="#musicmp3" class="hover-effect">
                    Back to <span class="highlight">music (audio mp3)</span>
                </a>
            </h6>
            <h6>
                <a href="video/13music/PsalmsMp3.zip" class="hover-effect">
                    for a zip file of all the psalms on this page <span class="highlight">click here!</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'mpsalmsmp3' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        music fwbc collection mp3 menu      -->
    <section class="colors-g page-transition non-preloading" id="fwbccolmp3">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2><span class="highlight">fwbc hymn collection</span><br>(audio mp3)</h2>
            <h6>
                <a href="#musicmp3" class="hover-effect">
                    Back to <span class="highlight">music (audio mp3)</span>
                </a>
            </h6>
            <h6>
                <a href="video/13music/FWBC_Collection.zip" class="hover-effect">
                    for a zip file of all the volumes on this page <span class="highlight">click here!</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="#fwbcvol1">
                        <h5>
                            volume<br>1
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#fwbcvol2">
                        <h5>
                            volume<br>2
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#fwbcvol3">
                        <h5>
                            volume<br>3
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#fwbcvol4">
                        <h5>
                            volume<br>4
                        </h5>
                    </a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="#fwbcvol5">
                        <h5>
                            volume<br>5
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#fwbcvol6">
                        <h5>
                            volume<br>6
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#fwbcvol6">
                        <h5>

                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#fwbcvol6">
                        <h5>

                        </h5>
                    </a>
                </div>
            </div>
            <hr>
        </div>
    </section>

    <!--        music fwbc collection vol 1 mp3     -->
    <section class="colors-g page-transition non-preloading" id="fwbcvol1">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2><span class="highlight">volume 1</span><br>(audio mp3)</h2>
            <h6>
                <a href="#fwbccolmp3" class="hover-effect">
                    Back to <span class="highlight">fwbc hymn collection (audio mp3)</span>
                </a>
            </h6>
            <h6>
                <a href="video/13music/FWBC_Collection/Vol_01.zip" class="hover-effect">
                    for a zip file of volume 1 <span class="highlight">click here!</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'fwbcvol1' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        music fwbc collection vol 2 mp3     -->
    <section class="colors-g page-transition non-preloading" id="fwbcvol2">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2><span class="highlight">volume 2</span><br>(audio mp3)</h2>
            <h6>
                <a href="#fwbccolmp3" class="hover-effect">
                    Back to <span class="highlight">fwbc hymn collection (audio mp3)</span>
                </a>
            </h6>
            <h6>
                <a href="video/13music/FWBC_Collection/Vol_02.zip" class="hover-effect">
                    for a zip file of volume 2 <span class="highlight">click here!</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'fwbcvol2' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        music fwbc collection vol 3 mp3     -->
    <section class="colors-g page-transition non-preloading" id="fwbcvol3">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2><span class="highlight">volume 3</span><br>(audio mp3)</h2>
            <h6>
                <a href="#fwbccolmp3" class="hover-effect">
                    Back to <span class="highlight">fwbc hymn collection (audio mp3)</span>
                </a>
            </h6>
            <h6>
                <a href="video/13music/FWBC_Collection/Vol_03.zip" class="hover-effect">
                    for a zip file of volume 3 <span class="highlight">click here!</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'fwbcvol3' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        music fwbc collection vol 4 mp3     -->
    <section class="colors-g page-transition non-preloading" id="fwbcvol4">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2><span class="highlight">volume 4</span><br>(audio mp3)</h2>
            <h6>
                <a href="#fwbccolmp3" class="hover-effect">
                    Back to <span class="highlight">fwbc hymn collection (audio mp3)</span>
                </a>
            </h6>
            <h6>
                <a href="video/13music/FWBC_Collection/Vol_04.zip" class="hover-effect">
                    for a zip file of volume 4 <span class="highlight">click here!</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'fwbcvol4' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        music fwbc collection vol 5 mp3     -->
    <section class="colors-g page-transition non-preloading" id="fwbcvol5">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2><span class="highlight">volume 5</span><br>(audio mp3)</h2>
            <h6>
                <a href="#fwbccolmp3" class="hover-effect">
                    Back to <span class="highlight">fwbc hymn collection (audio mp3)</span>
                </a>
            </h6>
            <h6>
                <a href="video/13music/FWBC_Collection/Vol_05.zip" class="hover-effect">
                    for a zip file of volume 5 <span class="highlight">click here!</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'fwbcvol5' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        music fwbc collection vol 6 mp3     -->
    <section class="colors-g page-transition non-preloading" id="fwbcvol6">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2><span class="highlight">volume 6</span><br>(audio mp3)</h2>
            <h6>
                <a href="#fwbccolmp3" class="hover-effect">
                    Back to <span class="highlight">fwbc hymn collection (audio mp3)</span>
                </a>
            </h6>
            <h6>
                <a href="video/13music/FWBC_Collection/Vol_06.zip" class="hover-effect">
                    for a zip file of volume 6 <span class="highlight">click here!</span>
                </a>
            </h6>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'fwbcvol6' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        false section      -->
    <section class="colors-g page-transition non-preloading" id="false">
        <div class="container" data-animation="fadeInDown">
            <br><br><br><br>
            <hr>
            <h2 class="highlight">
                false prophets<br>& heretics
            </h2>
            <hr>
            <div class="row">
                <?php
                $countQuery = $cnt;
                $countResult = mysqli_query($conn, $countQuery);
                while ($row = mysqli_fetch_assoc($countResult)) {
                    $countOutput = $row['count'];
                }
                $codeQuery = $mysqli->query("SELECT * FROM videos WHERE vid_category = 'false' ORDER BY vid_title ASC");
                $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
                $codeCount = count($codes);
                $base = floor($codeCount / COLUMNS);
                $remainder = $codeCount % COLUMNS;
                $chunks = [];
                for ($start = 0; $start < $codeCount; $start += $length) {
                    $length = $base + ($remainder-- > 0 ? 1 : 0);
                    $chunks[] = array_slice($codes, $start, $length);
                }
                ?>
                <!-- COLUMN 1 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[0] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 2 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[1] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 3 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[2] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
                <!-- COLUMN 4 -->
                <div class="col-md-3">
                    <ul class="simple">
                        <?php
                        foreach ($chunks[3] as $data) {
                            echo $data['vid_code'];
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--        Footer               -->
    <footer class="colors-g page-transition non-preloading" id="footer">
        <div class="container" data-animation="fadeInDown">
            <div class="row">
                <br><br><br>
                <div class="col-md-3">
                    <h4>all<span class="highlight">the</span>preaching</h4>
                    <div class="footer-description">
                        <p>
                            Psalms 12:6-7<br>
                            "The words of the LORD are pure words: as silver tried in a furnace of earth, purified seven times. <br>
                            Thou shalt keep them, O LORD, thou shalt preserve them from this generation for ever."
                        </p>
                    </div>
                    <a href="#" class="open-overlay-window heading" data-overlay-window=".credits-overlay">SPECIAL THANKS HERE</a>
                    <br><br>
                    <p class="social-links">
                        <a target="_blank" href="https://www.facebook.com/allthepreaching"><i class="fa fa-facebook"></i></a>
                        <a target="_blank" href="https://www.youtube.com/channel/UCiUIhW4qAvrjaHSEue0ANQQ"><i class="fa fa-youtube"></i></a>
                        <a target="_blank" href="https://www.instagram.com/allthepreaching/"><i class="fa fa-instagram"></i></a>
                        <a target="_blank" href="https://github.com/allthepreaching"><i class="fa fa-github"></i></a>
                    </p>
                </div>
                <div class="col-md-3">
                    <h5>Additional Links</h5>
                    <ul class="simple">
                        <li><a target="_blank" href="http://www.romansrd.com">Romans Road App</a></li>
                        <li><a target="_blank" href="https://www.faithfulwordbaptist.org/page5.html">The Preaching</a></li>
                        <li><a target="_blank" href="https://www.kevinkjv.com">Kevin KJV</a></li>
                        <li><a target="_blank" href="https://bannedpreaching.com/">Banned Preaching</a></li>
                        <li><a target="_blank" href="https://servisflamezone.org/">Servis Flame Zone</a></li>
                        <li><a target="_blank" href="https://framingtheworld.com/">Framing The World</a></li>
                        <li><a target="_blank" href="https://benthebaptistkjv.wordpress.com/">Ben The Baptist</a></li>
                        <li><a target="_blank" href="https://www.youtube.com/channel/UCUFgmArK_ljP52HJLBmMoQg">Matt Powell Official</a></li>
                        <li><a target="_blank" href="https://www.mid-michigan-soul-winners.com/">Mid Michigan Soulwinners</a></li>
                        <li><a target="_blank" href="http://www.godresource.com/">God Resource</a></li>
                        <li><a target="_blank" href="https://goodworksraiment.com/">Good Works Raiment</a></li>
                        <li><a target="_blank" href="http://militarygetsaved.tripod.com/findchurch.html">Find a Local Church</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Why KJV Only?</h5>
                    <ul class="simple">
                        <li>How do we know what God's word really is? Most have not considered this issue but when examining the differences and origins of the Bible versions, the importance of God's word is very clear.</li>
                        <li>The version issue is not one to be taken lightly. To believe any Bible is exactly God's word takes a complete step in faith, we simply want to provide some reasons why we believe the King James Bible is superior to any other English Bible and the preserved word of God.</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Doctrine of Preservation</h5>
                    <ul class="simple">
                        <li>Psalms 11:3</li>
                        <li>Isaiah 59:21</li>
                        <li>1 Peter 1:23-25</li>
                        <li>Proverbs 30:5-6</li>
                        <li>Mark 12:26</li>
                        <li>Luke 20:42</li>
                        <li>John 10:35</li>
                        <li>2 Peter 1:19</li>
                        <li>Matthew 24:15</li>
                        <li>Matthew 5:18</li>
                        <li>Matthew 24:35</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bottom text-center background-5-b">
            NO © Forever | All Material Free to Download and Share!
        </div>
    </footer>
    <!--        scripts             -->
    <script>
        if (typeof(atob) == "undefined") {
            document.write('<script src="lib/stringencoders-v3.10.3/javascript/base64.js"><\/script>');
            var atob = function(x) {
                return base64.decode(x);
            }
        }
    </script>
    <script src="bower_components/less.js/dist/less.min.js"></script>
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="lib/tween/tween.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="lib/modernizr-edited.js"></script>
    <script src="lib/SmoothScroll-1.4.9/SmoothScroll.js"></script>
    <script src="bower_components/jquery-cookie/jquery.cookie.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="bower_components/jqBootstrapValidation/dist/jqBootstrapValidation-1.3.7.min.js"></script>
    <script src="bower_components/minicolors/jquery.minicolors.min.js"></script>
    <script src="bower_components/slick.js/slick/slick.min.js"></script>
    <script src="bower_components/shufflejs/dist/jquery.shuffle.min.js"></script>
    <script src="bower_components/textillate/assets/jquery.lettering.js"></script>
    <script src="bower_components/textillate/assets/jquery.fittext.js"></script>
    <script src="bower_components/textillate/jquery.textillate.js"></script>
    <script src="lib/prism/prism.js"></script>
    <script>
        (function() {
            var disableMobileAnimations = true;
            var isWin = navigator.appVersion.indexOf("Win") !== -1;
            if (isWin) $('html').addClass('win');
            var ua = navigator.userAgent.toLowerCase();
            var isChrome = ua.indexOf('chrome') > -1;
            if (isChrome) $('html').addClass('chrome');
            var isAndroidBrowser4_3minus = ((ua.indexOf('mozilla/5.0') > -1 && ua.indexOf('android ') > -1 && ua.indexOf('applewebkit') > -1) && !(ua.indexOf('chrome') > -1));
            if (isAndroidBrowser4_3minus) $('html').addClass('android-browser-4_3minus');
            var isSafari = !isChrome && ua.indexOf('safari') !== -1;
            if (isSafari) $('html').addClass('safari');
            var isMobile = false; //Change false to Modernizr.touch if you want to disable animations on touchscreen devices;
            if (isMobile) {
                $('html').addClass('mobile');
                if (disableMobileAnimations) $('html').addClass('poor-browser');
            } else {
                $('html').addClass('non-mobile');
            }
            if (isWin && isSafari) {
                $('html').addClass('flat-animation');
            }
        })();
    </script>
    <script src="scripts/script-bundle.js"></script>
    <script>
        if (Function('/*@cc_on return document.documentMode===9@*/')()) {
            $('html').addClass('ie9');
        }
        if (Function('/*@cc_on return document.documentMode===10@*/')()) {
            $('html').addClass('ie10');
        }
        if (!!navigator.userAgent.match(/Trident.*rv\:11\./)) {
            $('html').addClass('ie11');
        }
    </script>

</body>

</html>