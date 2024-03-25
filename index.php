<?php include_once 'includes/header-index.php'; ?>

<!-- Home Section -->
<section id="home">
    <div class="view">
        <div class="content home-suzi full-size colors-c background-40">
            <br>
            <div class="home-heading container center-index-top">
                <p class="home-heading-size">
                    <span>EVERYTHING</span><span class="highlight"> NIFB</span>.
                </p>
                <h4>
                    <span class="yellow-highlight">&rarr;</span> we are now hosting
                    <span class="yellow-highlight">
                        <?php
                        $query = "SELECT * FROM videos WHERE vid_category NOT LIKE 'newest'";
                        $result = mysqli_query($conn, $query);
                        $vidTotal = mysqli_num_rows($result);
                        echo number_format($vidTotal);
                        ?>
                    </span>
                    videos and counting!
                    <span class="yellow-highlight">&larr;</span>
                </h4>
                <p class="title">
                    one <span class="highlight"> site&nbsp;</span>
                    ||&nbsp;every <span class="highlight"> video&nbsp;</span>
                    ||&nbsp;all <span class="highlight"> nifb </span>
                </p>
                <div class="social-media">
                    <a target="_blank" href="https://www.facebook.com/allthepreaching">
                        <img src="images/icons/iconFB.png" alt="Facebook Icon Link" width="75px">
                    </a>
                    <a target="_blank" href="https://www.instagram.com/allthepreaching/">
                        <img src="images/icons/iconIG.png" alt="Instagram Icon Link" width="75px">
                    </a>
                    <a target="_blank" style="margin-right: 8px" href="https://bmc.link/allthepreaching">
                        <img src="images/icons/iconBMC.png" alt="Buy Me Coffee Icon Link" width="60px">
                    </a>
                    <a target="_blank" href="https://www.youtube.com/channel/UCiUIhW4qAvrjaHSEue0ANQQ">
                        <img src="images/icons/iconYT.png" alt="YouTube Icon Link" width="60px">
                    </a>
                    <a target="_blank" style="margin-left: 10px" href="https://github.com/allthepreaching">
                        <img src="images/icons/iconGH.png" alt="GitHub Icon Link" width="60px">
                    </a>
                </div>
                <a href="pages/new.php">
                    <h3 class="new-content-title">
                        click here for the <span class="highlight"> newest content</span>
                    </h3>
                </a>
                <a target="_blank" href="https://www.kjv1611only.com/video/01salvation/Pastor_Anderson.mp4">
                    <h6>
                        <span>want to be 100% sure you're going to Heaven? <span class="highlight">click here.</span></span>
                    </h6>
                </a>
                <a target="_blank" href="https://www.allthelaws.com/">
                    <h6>
                        <span>interested in bible laws? check out our new project here: <span class="highlight">allthelaws.com.</span></span>
                    </h6>
                </a>
                <a target="_blank" href="https://bmc.link/allthepreaching">
                    <h6>
                        <span>want to help us to keep developing this site? <span class="highlight">Click here to buy us a coffee</span>!</span>
                    </h6>
                </a>
                <a target="_blank" href="https://flipbookpdf.net/web/site/8073761ea240888c8d70d8703b267fb30e9f0538202208.pdf.html">
                    <h6>
                        <span>download our soulwinning booklet <span class="highlight">click here</span>!</span>
                    </h6>
                </a>
                <a target="_blank" href="pages/sw-track.php">
                    <h6>
                        <span>want to track your soulwinning dates hours & salvations? <span class="highlight">click here</span>!</span>
                    </h6>
                </a>
                <h6>
                    <span>SEND us A hard drive OR <a target="_blank" href="https://www.kjv1611only.com/video/Download_All.pdf"><span class="highlight">download all</span></a> & HAVE a COPY of the archive! message us <a target="_blank" href="#contact"><span class="highlight">here </span></a> for details!</span>
                </h6>
            </div>
        </div>
    </div>
</section>

<!-- about section -->
<section id="about">
    <br>
    <br>
    <div class="view">
        <img alt class="bg" src="images/bg/4693.jpg" />
        <div class="content pane">
            <div class="container-fluid">
                <div class="row hidden-xs hidden-sm">
                    <div class="col-md-4 colors-b">
                        <div class="row">
                            <div class="col-xs-12 banner-cell">
                                <h3 class="light-font-weight">Salvation</h3>
                                <p class="title">How to be Saved</p>
                            </div>
                            <div class="col-xs-12 success heading-b banner-cell">
                                The Bible
                                <br /> Way to Heaven
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 colors-c">
                        <div class="row">
                            <div class="col-xs-12 banner-cell">
                                <h3 class="light-font-weight">Hard Preaching</h3>
                                <p class="title">Full Sermons</p>
                            </div>
                            <div class="col-xs-12 warning heading-c banner-cell">
                                Full Book
                                <br /> Bible Studies
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 colors-d">
                        <div class="row">
                            <div class="col-xs-12 banner-cell">
                                <h3 class="light-font-weight">Documentaries</h3>
                                <p class="title">Truth & Facts</p>
                            </div>
                            <div class="col-xs-12 info heading-d banner-cell">
                                Informative Films
                                <br /> Real Subjects
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="view">
        <div class="content colors-e background-solid">
            <div class="container">
                <h2>About <span class="highlight">This Site</span></h2>
                <p class="header-details"><span class="highlight">Here to</span> spread the truth</p>
                <p class="lead">This site is here to spread the Gospel of Jesus Christ and expose the truth of this world to as many people as possible. With promises of security and prosperity from a world government hell bent on ruling over us with censorship, for power and filthy lucre, it is time for a change! ALLthePREACHING.com is here to mirror as much content as possible. We will be hosting all sermons from every pastor of the New IFB, videos on creationism, sermon clips, a catalog of traditional hymns and music from many churches and so much more!<br> So be sure to check back daily for new content!</p>
                <div class="row">
                    <div class="col-md-4">
                        <div class="col-icon">
                            <i class="li_user"></i>
                        </div>
                        <div class="col-content">
                            <h4>
                                NIFB <span class="highlight">Pastors</span>
                            </h4>
                            <p>
                                Steven Anderson | Roger Jimenez Jonathan Shelley | Dave Berzins <br>Joe Jones | Aaron Thompson <br> Jason Robinson | Bruce Mejia <br> Jared Pozarnsky | Kevin Sepulveda
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="col-icon">
                            <i class="li_shop"></i>
                        </div>
                        <div class="col-content">
                            <h4>
                                NIFB <span class="highlight">CHURCHES</span>
                            </h4>
                            <p>
                                Faithful Word AZ | Verity CA | Stedfast TX & Pure Words TX | Stronghold GA | Shield of Faith ID | Sure Foundation WA| Mountain WV | First Works CA | Hold Fast CA | Blessed Hope & New Life AU |
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="col-icon">
                            <i class="li_world"></i>
                        </div>
                        <div class="col-content">
                            <h4>
                                NIFB <span class="highlight">Movement</span>
                            </h4>
                            <p>
                                Bold Preaching of God's Word | Zero Fear | Zero Compromise | Standing on the King James Bible | Never Backing Down | Rejoicing in Persecution | Spreading the Gospel & Soulwinning Everyday
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- doctrinal beliefs section -->
<section id="doctrine">
    <div class="view" id="how-we-work">
        <div class="content colors-h">
            <div class="container">
                <h1>
                    <span class="highlight">Doctrinal</span> Beliefs
                </h1>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <hr style="height: 2px;border-width: 10px;border-color: bisque;color:gray;background-color:gray">
                    </div>
                </div>
                <div class="row icon-set">
                    <div class="col-md-3 text-center">
                        <p>
                            <i class="li_news circle scroll-in-animation background-20 heading" data-animation="fadeInUp"></i>
                        </p>
                        <p class="title">
                            <span class="underline-text">King James Bible</span>
                        </p>
                        <p>
                            We believe that the King James Bible is the INSPIRED & PRESERVED Word of God WITHOUT error, making it our Rock, our foundation.
                        </p>
                    </div>
                    <div class="col-md-3 text-center">
                        <p>
                            <i class="li_lock circle scroll-in-animation background-20 heading" data-animation="fadeInUp"></i>
                        </p>
                        <p class="title">
                            <span class="underline-text">Salvation</span>
                        </p>
                        <p>
                            We believe that salvation is by GRACE through FAITH alone, NOT OF WORKS, and the eternal security of the believer (once saved, always saved).
                        </p>
                    </div>
                    <div class="col-md-3 text-center">
                        <p>
                            <i class="li_cloud circle scroll-in-animation background-20 heading" data-animation="fadeInUp"></i>
                        </p>
                        <p class="title">
                            <span class="underline-text">The Trinity</span>
                        </p>
                        <p>
                            We believe that God consists of The Father, The Son and The Holy Ghost, that these THREE are ONE (1 John 5:7). Father, Son and Holy Ghost are three DISTINCT persons.
                        </p>
                    </div>
                    <div class="col-md-3 text-center">
                        <p>
                            <i class="li_location circle scroll-in-animation background-20 heading" data-animation="fadeInUp"></i>
                        </p>
                        <p class="title">
                            <span class="underline-text">Independent</span>
                        </p>
                        <p>
                            We believe only in the LOCAL church, INDEPENDENT and free from outside control NOT depending on another's authority and NOT in a universal church.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- bold men section -->
<section id="boldmen">
    <div class="view">
        <div class="content colors-e background-solid">
            <div class="container">
                <h2>
                    <span class="highlight">Bold </span>Men of God
                </h2>
                <p class="lead">
                    "And for me, that utterance may be given unto me, that I may open my mouth boldly, to make known the mystery of the gospel," Ephesians 6:19
                </p>
                <div class="row">
                    <div class="col-md-3 col-sm-6  col-xs-6">
                        <div class="hover-overlay">
                            <img alt="Pastor Steven Anderson" src="images/boldmen/Pastor_Anderson.png" title="Pastor Steven Anderson" class="fluid-width">
                            <div class="overlay background-90-b">
                                <div>
                                    <p class="text-center text-uppercase heading-b">
                                    </p>
                                    <div class="separator-small"></div>
                                    <p class="text-center">
                                        <a target="_blank" href="https://faithfulwordbaptist.org/"><i class="fa fa-globe heading-b"></i>
                                        </a>
                                        <a target="_blank" href="https://rumble.com/c/c-3061998"><i class="fa fa-globe heading-b"></i>
                                        </a>
                                        <a target="_blank" href="https://www.facebook.com/Faithful-Word-Baptist-Church-183465927963/"><i class="fa fa-facebook heading-b"></i>
                                        </a>
                                        <a target="_blank" href="https://twitter.com/sanderson1611"><i class="fa fa-twitter heading-b"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="caption">
                            <p>
                                <span class="title">Pastor Steven Anderson</span>
                                <br />
                                <span class="highlight">Faithful Word Baptist Church</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6  col-xs-6">
                        <div class="hover-overlay">
                            <img alt="Pastor Roger Jimenez" src="images/boldmen/Pastor_Jimenez.png" title="Pastor Roger Jimenez" class="fluid-width">
                            <div class="overlay background-90-b">
                                <div>
                                    <div class="separator-small"></div>
                                    <p class="text-center">
                                        <a target="_blank" href="https://veritybaptist.com/"><i class="fa fa-globe heading-b"></i>
                                        </a>
                                        <a target="_blank" href="https://www.bannedbutnotbound.com/"><i class="fa fa-globe heading-b"></i>
                                        </a>
                                        <a target="_blank" href="https://www.facebook.com/Verity-Baptist-Church-116877921704113/"><i class="fa fa-facebook heading-b"></i>
                                        </a>
                                        <a target="_blank" href="https://rumble.com/user/VerityBaptistChurch"><i class="fa fa-globe heading-b"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="caption">
                            <p>
                                <span class="title">Pastor Roger Jimenez</span>
                                <br />
                                <span class="highlight">Verity Baptist Church</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6  col-xs-6">
                        <div class="hover-overlay">
                            <img alt="Pastor Jonathan Shelley" src="images/boldmen/Pastor_Shelley.png" title="Pastor Jonathan Shelley" class="fluid-width">
                            <div class="overlay background-90-b">
                                <div>
                                    <div class="separator-small"></div>
                                    <p class="text-center">
                                        <a target="_blank" href="https://stedfastbaptistkjv.org/"><i class="fa fa-globe heading-b"></i>
                                        </a>
                                        <a target="_blank" href="https://www.facebook.com/StedfastBaptist/"><i class="fa fa-facebook heading-b"></i>
                                        </a>
                                        <a target="_blank" href="https://twitter.com/StedfastK"><i class="fa fa-twitter heading-b"></i>
                                        </a>
                                        <a target="_blank" href="https://rumble.com/user/StedfastBaptistChurch"><i class="fa fa-globe heading-b"></i>
                                        </a>
                                        <a target="_blank" href="https://rumble.com/c/TheBaptistBias"><i class="fa fa-globe heading-b"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="caption">
                            <p>
                                <span class="title">Pastor Jonathan Shelley</span>
                                <br />
                                <span class="highlight">Stedfast Baptist Church</span><br>
                                <span class="highlight">Pure Words Baptist Church</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6  col-xs-6">
                        <div class="hover-overlay">
                            <img alt="Pastor Dave Berzins" src="images/boldmen/Pastor_Berzins.png" title="Pastor Dave Berzins" class="fluid-width">
                            <div class="overlay background-90-b">
                                <div>
                                    <div class="separator-small"></div>
                                    <p class="text-center">
                                        <a target="_blank" href="http://strongholdbaptist.church/"><i class="fa fa-globe heading-b"></i>
                                        </a>
                                        <a target="_blank" href="https://www.facebook.com/strongholdbaptist/"><i class="fa fa-facebook heading-b"></i>
                                        </a>
                                        <a target="_blank" href="https://www.youtube.com/channel/UCDBstuREtFltg_zaOo3I0bA"><i class="fa fa-youtube heading-b"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="caption">
                            <p>
                                <span class="title">Pastor Dave Berzins</span>
                                <br />
                                <span class="highlight">Stronghold Baptist Church</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6  col-xs-6">
                        <div class="hover-overlay">
                            <img alt="Brother Chris Segura" src="images/boldmen/Bro_Awes.png" title="Brother Chris Segura" class="fluid-width">
                            <div class="overlay background-90-b">
                                <div>
                                    <p class="text-center text-uppercase heading-b">
                                        <a target="_blank" href="https://stedfastbaptistkjv.org/"><i class="fa fa-globe heading-b"></i>
                                        </a>
                                    </p>
                                    <div class="separator-small"></div>
                                    <p class="text-center">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="caption">
                            <p>
                                <span class="title">Brother Dillon Awes</span>
                                <br />
                                <span class="highlight">Stedfast Baptist Church</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6  col-xs-6">
                        <div class="hover-overlay">
                            <img alt="Pastor Aaron Thompson" src="images/boldmen/Pastor_Thompson.png" title="Pastor Aaron Thompson" class="fluid-width">
                            <div class="overlay background-90-b">
                                <div>
                                    <div class="separator-small"></div>
                                    <p class="text-center">
                                        <a target="_blank" href="http://surefoundationbaptist.com/"><i class="fa fa-globe heading-b"></i>
                                        </a>
                                        <a target="_blank" href="https://www.facebook.com/Sure-Foundation-Baptist-Church-Vancouver-112594213547759/?__xts__%5B0%5D=68.ARCHcGPhUIaM6dOH49sbEiT-B"><i class="fa fa-facebook heading-b"></i>
                                        </a>
                                        <a target="_blank" href="https://www.youtube.com/channel/UCyIQUFgSiMSd2Oz81NSjpOA"><i class="fa fa-youtube heading-b"></i>
                                        </a>
                                        <a target="_blank" href="https://www.youtube.com/channel/UCIZOA99kReZO3utBOnTCuLg"><i class="fa fa-youtube heading-b"></i>
                                        </a>
                                        <a target="_blank" href="https://www.youtube.com/c/SFBCSpokane"><i class="fa fa-youtube heading-b"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="caption">
                            <p>
                                <span class="title">Pastor Aaron Thompson</span>
                                <br />
                                <span class="highlight">Sure Foundation Baptist Church</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6  col-xs-6">
                        <div class="hover-overlay">
                            <img alt="Pastor Jason Robinson" src="images/boldmen/Pastor_Robinson.png" title="Pastor Jason Robinson" class="fluid-width">
                            <div class="overlay background-90-b">
                                <div>
                                    <div class="separator-small"></div>
                                    <p class="text-center">
                                        <a target="_blank" href="https://mountainbaptist.org/"><i class="fa fa-globe heading-b"></i>
                                        </a>
                                        <a target="_blank" href="https://www.facebook.com/MountainBaptistWV/"><i class="fa fa-facebook heading-b"></i>
                                        </a>
                                        <a target="_blank" href="https://www.youtube.com/channel/UCKxloPrZXfHPQ-MoVfBhqLw"><i class="fa fa-youtube heading-b"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="caption">
                            <p>
                                <span class="title">Pastor Jason Robinson</span>
                                <br />
                                <span class="highlight">Mountain Baptist Church</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6  col-xs-6">
                        <div class="hover-overlay">
                            <img alt="Pastor Bruce Mejia" src="images/boldmen/Pastor_Mejia.png" title="Pastor Bruce Mejia" class="fluid-width">
                            <div class="overlay background-90-b">
                                <div>
                                    <div class="separator-small"></div>
                                    <p class="text-center">
                                        <a target="_blank" href="https://www.fwbcla.org/"><i class="fa fa-globe heading-b"></i>
                                        </a>
                                        <a target="_blank" href="https://www.facebook.com/FWBCLA/"><i class="fa fa-facebook heading-b"></i>
                                        </a>
                                        <a target="_blank" href="https://twitter.com/olivetree1569"><i class="fa fa-twitter heading-b"></i>
                                        </a>
                                        <a target="_blank" href="https://www.youtube.com/@antipas912"><i class="fa fa-youtube heading-b"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="caption">
                            <p>
                                <span class="title">Pastor Bruce Mejia</span>
                                <br />
                                <span class="highlight">First Works Baptist Church</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6  col-xs-6">
                        <div class="hover-overlay">
                            <img alt="Brother Chris Segura" src="images/boldmen/Bro_Segura.png" title="Brother Chris Segura" class="fluid-width">
                            <div class="overlay background-90-b">
                                <div>
                                    <p class="text-center text-uppercase heading-b">
                                    </p>
                                    <div class="separator-small"></div>
                                    <p class="text-center">
                                        <a target="_blank" href="https://faithfulwordbaptist.org/"><i class="fa fa-globe heading-b"></i>
                                        </a>
                                        <a target="_blank" href="https://www.facebook.com/Faithful-Word-Baptist-Church-183465927963/"><i class="fa fa-facebook heading-b"></i>
                                        </a>
                                        <a target="_blank" href="https://www.youtube.com/channel/UC9VWaSjpPLWcZ2ZPKGak12g"><i class="fa fa-youtube heading-b"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="caption">
                            <p>
                                <span class="title">Brother Chris Segura</span>
                                <br />
                                <span class="highlight">Faithful Word Baptist Church</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6  col-xs-6">
                        <div class="hover-overlay">
                            <img alt="Pastor Joe Jones" src="images/boldmen/Pastor_Jones.png" title="Pastor Joe Jones" class="fluid-width">
                            <div class="overlay background-90-b">
                                <div>
                                    <div class="separator-small"></div>
                                    <p class="text-center">
                                        <a target="_blank" href="https://shieldoffaithbaptist.com/"><i class="fa fa-globe heading-b"></i>
                                        </a>
                                        <a target="_blank" href="https://www.facebook.com/Shield-of-Faith-Baptist-Church-Boise-324587301456794/"><i class="fa fa-facebook heading-b"></i>
                                        </a>
                                        <a target="_blank" href="https://www.youtube.com/channel/UC1TMxIjRgPJhJ0JYb8FWgeQ"><i class="fa fa-youtube heading-b"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="caption">
                            <p>
                                <span class="title">Pastor Joe Jones</span>
                                <br />
                                <span class="highlight">Shield of Faith Baptist Church</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6  col-xs-6">
                        <div class="hover-overlay">
                            <img alt="Brother Matt Powell" src="images/boldmen/Bro_Powell.png" title="Brother Matt Powell" class="fluid-width">
                            <div class="overlay background-90-b">
                                <div>
                                    <div class="separator-small"></div>
                                    <p class="text-center">
                                        <a target="_blank" href="https://www.youtube.com/channel/UCUFgmArK_ljP52HJLBmMoQg"><i class="fa fa-youtube heading-b"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="caption">
                            <p>
                                <span class="title">Brother Matt Powell</span>
                                <br />
                                <span class="highlight">Way of Truth</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6  col-xs-6">
                        <div class="hover-overlay">
                            <img alt="Brother Ben Naim" src="images/boldmen/Bro_Naim.png" title="Brother Ben Naim" class="fluid-width">
                            <div class="overlay background-90-b">
                                <div>
                                    <div class="separator-small"></div>
                                    <p class="text-center">
                                        <a target="_blank" href="https://benthebaptistkjv.wordpress.com/"><i class="fa fa-globe heading-b"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="caption">
                            <p>
                                <span class="title">Brother Ben Naim</span>
                                <br />
                                <span class="highlight">Stedfast Baptist Church</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6  col-xs-6">
                        <div class="hover-overlay">
                            <img alt="Deacon Corbin Ressl" src="images/boldmen/Deacon_Ressl.png" title="Deacon Corbin Ressl" class="fluid-width">
                            <div class="overlay background-90-b">
                                <div>
                                    <div class="separator-small"></div>
                                    <p class="text-center">
                                        <a target="_blank" href="https://www.faithfulwordtucson.com/"><i class="fa fa-globe heading-b"></i>
                                        </a>
                                        <a target="_blank" href="https://www.facebook.com/fwbctucson/"><i class="fa fa-facebook heading-b"></i>
                                        </a>
                                        <a target="_blank" href="https://www.youtube.com/channel/UCG28Z-3UD3WHoAcUJGqM7DA"><i class="fa fa-youtube heading-b"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="caption">
                            <p>
                                <span class="title">Deacon Corbin Ressl</span>
                                <br />
                                <span class="highlight">Faithful Word Baptist Church Tuscon</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6  col-xs-6">
                        <div class="hover-overlay">
                            <img alt="Brother Jared Pozarnsky" src="images/boldmen/Pastor_Pozarnsky.png" title="Pastor Jared Pozarnsky" class="fluid-width">
                            <div class="overlay background-90-b">
                                <div>
                                    <div class="separator-small"></div>
                                    <p class="text-center">
                                        <a target="_blank" href="https://holdfastbaptist.com/"><i class="fa fa-globe heading-b"></i>
                                        </a>
                                        <a target="_blank" href="https://www.youtube.com/c/holdfastbaptistchurch"><i class="fa fa-youtube heading-b"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="caption">
                            <p>
                                <span class="title">Pastor Jared Pozarnsky</span>
                                <br />
                                <span class="highlight">Hold Fast Baptist Church</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6  col-xs-6">
                        <div class="hover-overlay">
                            <img alt="Pastor Matthew Stucky" src="images/boldmen/Bro_Stucky.png" title="Pastor Matthew Stucky" class="fluid-width">
                            <div class="overlay background-90-b">
                                <div>
                                    <div class="separator-small"></div>
                                    <p class="text-center">
                                        <a target="_blank" href="http://veritybaptistmanila.com/index.html"><i class="fa fa-globe heading-b"></i>
                                        </a>
                                        <a target="_blank" href="https://www.youtube.com/channel/UCec-8U3zMD8q9bk-lkXmj7w"><i class="fa fa-youtube heading-b"></i>
                                        </a>
                                        <a target="_blank" href="https://www.facebook.com/profile.php?id=100015701793045"><i class="fa fa-facebook heading-b"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="caption">
                            <p>
                                <span class="title">Pastor Matthew Stucky</span>
                                <br />
                                <span class="highlight">Verity Baptist Church Manila</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6  col-xs-6">
                        <div class="hover-overlay">
                            <img alt="Pastor Kevin Sepulveda" src="images/boldmen/Pastor_Sepulveda.png" title="Pastor Kevin Sepulveda" class="fluid-width">
                            <div class="overlay background-90-b">
                                <div>
                                    <div class="separator-small"></div>
                                    <p class="text-center">
                                        <a target="_blank" href="https://blessedhopebaptistchurch.org.au/"><i class="fa fa-globe heading-b"></i>
                                        </a>
                                        <a target="_blank" href="https://www.youtube.com/c/BlessedHopeBaptistChurchSydney"><i class="fa fa-youtube heading-b"></i></a>
                                        <a target="_blank" href="https://www.youtube.com/c/NewLifeBaptistChurch"><i class="fa fa-youtube heading-b"></i>
                                        </a>
                                        <a target="_blank" href="https://www.facebook.com/kevinesepulveda"><i class="fa fa-facebook heading-b"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="caption">
                            <p>
                                <span class="title">Pastor Kevin Sepulveda</span>
                                <br />
                                <span class="highlight">Blessed Hope Baptist Church</span>
                                <br>
                                <span class="highlight">New Life Baptist Church</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6  col-xs-6">
                        <div class="hover-overlay">
                            <img alt="Brother Raymond Cooper" src="images/boldmen/Bro_Cooper.png" title="Brother Raymond Cooper" class="fluid-width">
                            <div class="overlay background-90-b">
                                <div>
                                    <div class="separator-small"></div>
                                    <p class="text-center">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="caption">
                            <p>
                                <span class="title">brother raymond cooper</span>
                                <br />
                                <span class="highlight">Faithful Word Baptist Church</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6  col-xs-6">
                        <div class="hover-overlay">
                            <img alt="Brother David Kiefer" src="images/boldmen/Bro_Kiefer.png" title="Brother David Kiefer" class="fluid-width">
                            <div class="overlay background-90-b">
                                <div>
                                    <div class="separator-small"></div>
                                    <p class="text-center">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="caption">
                            <p>
                                <span class="title">brother david kiefer</span>
                                <br />
                                <span class="highlight">Faithful Word Baptist Church</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6  col-xs-6">
                        <div class="hover-overlay">
                            <img alt="Pastor Ian Taverner" src="https://allthepreaching.com/images/boldmen/Pastor_Taverner.png" title="Pastor Ian Taverner" class="fluid-width">
                            <div class="overlay background-90-b">
                                <div>
                                    <div class="separator-small"></div>
                                    <p class="text-center">
                                        <a target="_blank" href="https://rumble.com/c/STBCUK"><i class="fa fa-globe heading-b"></i>
                                        </a>
                                        <a target="_blank" href="https://www.youtube.com/@STBCUK"><i class="fa fa-youtube heading-b"></i></a>
                                        <a target="_blank" href="https://www.stbc.uk/"><i class="fa fa-globe heading-b"></i>
                                        </a>
                                        <a target="_blank" href="https://www.facebook.com/profile.php?id=100082983158600"><i class="fa fa-facebook heading-b"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="caption">
                            <p>
                                <span class="title">Pastor Ian Taverner</span>
                                <br />
                                <span class="highlight">Strong Tower Baptist Church</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- we are section -->
<section id="whoweare">
    <div class="view">
        <div class="content pane">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 stretch-height pane">
                        <div class="view fluid-height">
                            <br>
                            <img alt class="bg" src="images/bg/fwbcService.png" />
                            <div class="content incut colors-d background-transparent">
                                <div class="position-middle-center text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6  stretch-height pane">
                        <div class="view fluid-height">
                            <div class="content incut colors-h background-solid">
                                <div class="position-middle-center">
                                    <h3 class="text-left">
                                        <span class="highlight">We</span> Are
                                    </h3>
                                    <ul>
                                        <li>Independent</li>
                                        <li>Fundamental</li>
                                        <li>King James Only</li>
                                        <li>Saved by Faith Alone</li>
                                        <li>Once Saved Always Saved</li>
                                        <li>Baptised by Immersion</li>
                                        <li>Biblical Path Following</li>
                                        <li>Soul Winning</li>
                                        <li>Traditional Hymn Singing</li>
                                    </ul>
                                    <h3 class="text-left">
                                        <span class="highlight">Baptists</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 stretch-height pane">
                        <div class="view fluid-height">
                            <br>
                            <img alt class="bg" src="images/bg/fwbcCongregation.png" />
                            <div class="content incut colors-d background-transparent">
                                <div class="position-middle-center text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6  stretch-height pane">
                        <div class="view fluid-height">
                            <div class="content incut colors-h background-solid">
                                <div class="position-middle-center">
                                    <h3 class="text-left">
                                        <span class="highlight">We</span> Are
                                    </h3>
                                    <ul>
                                        <li>A Local Church</li>
                                        <li>Family Integrated</li>
                                        <li>Charitable</li>
                                        <li>Strong Willed</li>
                                        <li>Bible Loving</li>
                                        <li>Bold Speaking</li>
                                        <li>Spirit Filled</li>
                                        <li>Sober Minded</li>
                                        <li>Vigilant</li>
                                    </ul>
                                    <h3 class="text-left">
                                        <span class="highlight">Christians</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- salvation section -->
<section id="salvation">
    <div class="view">
        <div class="content colors-e background-solid">
            <div class="container">
                <a target="_blank" href="https://www.kjv1611only.com/video/01salvation/The_Bible_Way_To_Heaven.mp4">
                    <h2>
                        The Bible way <span class="highlight">To Heaven</span>
                    </h2>
                    <p class="header-details">
                        <span class="highlight">How you can be 100% sure you're going to Heaven when you die</span>
                    </p>
                </a>
                <a target="_blank" href="http://www.romansrd.com">
                    <h6>
                        New preaching app is out: <span class="highlight">www.romansrd.com</span>
                    </h6>
                </a>
                <p class="lead">
                    By following the Bible way to Heaven, we can be ONE HUNDRED PERCENT SURE, that when we die we are going to be with the Lord in Heaven. This is salvation by faith through grace alone, which is ETERNAL, and can never be lost. Salvation is the free gift from God to all men who believe on Jesus for their salvation. Jesus paid for our sins on the cross, died, and was resurrected, so that anyone who believes on him will have everlasting life. (Ephesians 2:8, John 3:16, 1 John 5:13, Romans 3:23)
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="widget-tabs nav nav-tabs background-lite-e">
                            <li class="active"><a href="#Acknowledgement" data-toggle="tab">Acknowledgement</a></li>
                            <li class=""><a href="#Realization" data-toggle="tab">Realization</a></li>
                            <li class=""><a href="#Admission" data-toggle="tab">Admission</a></li>
                            <li class=""><a href="#Understanding" data-toggle="tab">Understanding</a></li>
                            <li class=""><a href="#Belief" data-toggle="tab">Belief</a></li>
                            <li class=""><a href="#Salvation" data-toggle="tab">Salvation</a></li>
                            <li class=""><a href="#Knowing" data-toggle="tab">Knowing</a></li>
                            <li class=""><a href="#Praying" data-toggle="tab">Praying</a></li>
                            <li class=""><a href="#Faith" data-toggle="tab">Faith</a></li>
                            <li class=""><a href="#False-Salvation" data-toggle="tab">False Salvation</a></li>
                            <li class=""><a href="#Next-Step" data-toggle="tab">Next Step</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="Acknowledgement">
                                <p>
                                    Acknowledge Sin.
                                    <br>
                                    Romans 3:23
                                    <br>
                                    For all have sinned, and come short of the glory of God;
                                </p>
                            </div>
                            <div class="tab-pane fade" id="Realization">
                                <p>
                                    Realize the Penalty for Sin. Death & Hell.
                                    <br>
                                    Romans 6:23
                                    <br>
                                    For the wages of sin is death; but the gift of God is eternal life through Jesus Christ our Lord.
                                    <br>
                                    Revelation 21:8
                                    <br>
                                    But the fearful, and unbelieving, and the abominable, and murderers, and whoremongers, and sorcerers, and idolaters, and all liars, shall have their part in the lake which burneth with fire and brimstone: which is the second death.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="Admission">
                                <p>
                                    Admit Sin.
                                    <br>
                                    1 John 1:8
                                    <br>
                                    If we say that we have no sin, we deceive ourselves, and the truth is not in us.;
                                </p>
                            </div>
                            <div class="tab-pane fade" id="Understanding">
                                <p>
                                    Understand Jesus Christ Died for You!
                                    <br>
                                    John 3:16
                                    <br>
                                    For God so loved the world, that he gave his only begotten Son, that whosoever believeth in him should not perish, but have everlasting life.
                                    <br>
                                    1 Peter 2:24
                                    <br>
                                    Who his own self bare our sins in his own body on the tree, that we, being dead to sins, should live unto righteousness: by whose stripes ye were healed.
                                    <br>
                                    1 Timothy 3:16
                                    <br>
                                    And without controversy great is the mystery of godliness: God was manifest in the flesh, justified in the Spirit, seen of angels, preached unto the Gentiles, believed on in the world, received up into glory.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="Belief">
                                <p>
                                    Believe for Salvation.
                                    <br>
                                    Romans 10:9-11
                                    <br>
                                    9 That if thou shalt confess with thy mouth the Lord Jesus, and shalt believe in thine heart that God hath raised him from the dead, thou shalt be saved. 10 For with the heart man believeth unto righteousness; and with the mouth confession is made unto salvation. 11 For the scripture saith, Whosoever believeth on him shall not be ashamed.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="Salvation">
                                <p>
                                    Saved by Faith. Not of Works!
                                    <br>
                                    Ephesians 2:8-9
                                    <br>
                                    8 For by grace are ye saved through faith; and that not of yourselves: it is the gift of God: 9 Not of works, lest any man should boast.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="Knowing">
                                <p>
                                    How do I know I'm saved?
                                    <br>
                                    1 John 5:10-13
                                    <br>
                                    10 He that believeth on the Son of God hath the witness in himself: he that believeth not God hath made him a liar; because he believeth not the record that God gave of his Son. 11 And this is the record, that God hath given to us eternal life, and this life is in his Son. 12 He that hath the Son hath life; and he that hath not the Son of God hath not life. 13 These things have I written unto you that believe on the name of the Son of God; that ye may know that ye have eternal life, and that ye may believe on the name of the Son of God.
                                    <br>
                                    <br>
                                    1. God has given a gift.
                                    <br>
                                    2. The gift is eternal life.
                                    <br>
                                    3. Eternal life is only through God's son, Jesus Christ.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="Praying">
                                <p>
                                    What should I pray?
                                    <br>
                                    There are no special words or prayer that will grant eternal life. We simply must confess Jesus and believe with all our heart. Below is a prayer based on the scriptures mentioned above.
                                    <br><br>
                                    Thank you Jesus for creating me. I know that I have sinned and deserve to go to hell. Please forgive me and save me right now. I believe that Jesus died on the cross for my sins, was buried, and rose again. I am trusting in Jesus Christ alone to save me and grant me eternal life.
                                    <br>
                                    Amen.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="Faith">
                                <p>
                                    Is Salvation really Faith Alone?
                                    <br>
                                    YES!
                                    <br> The Bible makes it abundantly clear that we are only saved by faith. If you have been taught or heard that salvation included anything else, please see the next tab "False Salvation" for a short list of what salvation is not.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="False-Salvation">
                                <p>
                                    What salvation is NOT!
                                    <br>
                                    Salvation is NOT by believing or trusting in anything other than Jesus ALONE. <br><br>
                                    Salvation is NOT :
                                    <br>
                                    <i>
                                        Works or Good deeds
                                    </i>
                                    <br>
                                    <i>
                                        Faith plus Works
                                    </i>
                                    <br>
                                    <i>
                                        Faith plus Baptism
                                    </i>
                                    <br>
                                    <i>
                                        Faith plus "Repenting of your sins" or "Turning from your sins"
                                    </i>
                                    <br>
                                    <i>
                                        Faith plus "Going to church"
                                    </i>
                                    <br>
                                    <i>
                                        Faith plus "Saying Hail Marys"
                                    </i>
                                    <br>
                                    <i>
                                        Faith plus Anything else!
                                    </i>
                                    <br>
                                    <i>
                                        Salvation is FAITH ALONE!
                                    </i>
                                    <br>
                                    <br>
                                    Romans 4:5
                                    <br>
                                    But to him that worketh not, but believeth on him that justifieth the ungodly, his faith is counted for righteousness.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="Next-Step">
                                <p>
                                    What to do next?
                                    <br>
                                    If you just placed all your faith on Jesus Christ then the next step is to be baptized, which represents the decision you made. The Bible then instructs us to study God's word and get involved in a local church.
                                    <br><br>
                                    Your best bet on a church would be the nearest Local Independent Fundamental Baptist Church. Not all IFB churches are the same or even good. Look for one that is KJV only, believes salvation is faith alone, and has a soul-winning program. One of the best places to look is at
                                    <a target="_blank" href="https://militarygetsaved.tripod.com/findchurch.html">
                                        Military Get Saved
                                    </a>, where you can choose your location/state, and search for a church. Use the "Ctrl + F" command on your keyboard to search for "SOUL", to find a SOUL WINNING church in your area. God Bless!.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="skillbars">
                            <div class="skillbar clearfix background-d" data-percent="0%">
                                <div class="skillbar-title background-b heading-b"><span>Acknowledgement</span></div>
                                <div class="skillbar-bar background-b"></div>
                                <div class="skill-bar-percent heading-d">Romans 3:23</div>
                            </div>
                            <div class="skillbar clearfix background-d" data-percent="25%">
                                <div class="skillbar-title background-c heading-c"><span>Realization</span></div>
                                <div class="skillbar-bar background-c"></div>
                                <div class="skill-bar-percent heading-d">Romans 6:23 | Revelation 21:8</div>
                            </div>
                            <div class="skillbar clearfix background-d" data-percent="30%">
                                <div class="skillbar-title background-b heading-b"><span>Admission</span></div>
                                <div class="skillbar-bar background-b"></div>
                                <div class="skill-bar-percent heading-d">1 John 1:8</div>
                            </div>
                            <div class="skillbar clearfix background-d" data-percent="35%">
                                <div class="skillbar-title background-c heading-c"><span>Understanding</span></div>
                                <div class="skillbar-bar background-c"></div>
                                <div class="skill-bar-percent heading-d">John 3:16 | 1 Peter 2:24 | 1 Timothy 3:16</div>
                            </div>
                            <div class="skillbar clearfix background-d" data-percent="40%">
                                <div class="skillbar-title background-b heading-b"><span>Belief</span></div>
                                <div class="skillbar-bar background-b"></div>
                                <div class="skill-bar-percent heading-d">Romans 10:9-11</div>
                            </div>
                            <div class="skillbar clearfix background-d" data-percent="45%">
                                <div class="skillbar-title background-c heading-c"><span>Salvation</span></div>
                                <div class="skillbar-bar background-c"></div>
                                <div class="skill-bar-percent heading-d">Ephesians 2:8-9</div>
                            </div>
                            <div class="skillbar clearfix background-d" data-percent="50%">
                                <div class="skillbar-title background-b heading-b"><span>Knowing</span></div>
                                <div class="skillbar-bar background-b"></div>
                                <div class="skill-bar-percent heading-d">1 John 5:10-13</div>
                            </div>
                            <div class="skillbar clearfix background-d" data-percent="60%">
                                <div class="skillbar-title background-c heading-b"><span>Praying</span></div>
                                <div class="skillbar-bar background-c"></div>
                                <div class="skill-bar-percent heading-d">The Sinner's Prayer</div>
                            </div>
                            <div class="skillbar clearfix background-d" data-percent="70%">
                                <div class="skillbar-title background-b heading-b"><span>Faith</span></div>
                                <div class="skillbar-bar background-b"></div>
                                <div class="skill-bar-percent heading-d">Salvation by Faith Alone</div>
                            </div>
                            <div class="skillbar clearfix background-d" data-percent="80%">
                                <div class="skillbar-title background-c heading-b"><span>FalseSalvation</span></div>
                                <div class="skillbar-bar background-c"></div>
                                <div class="skill-bar-percent heading-d">Romans 4:5</div>
                            </div>
                            <div class="skillbar clearfix background-d" data-percent="90%">
                                <div class="skillbar-title background-b heading-b"><span>NextStep</span></div>
                                <div class="skillbar-bar background-b"></div>
                                <div class="skill-bar-percent heading-d">Finding a Local Church</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "includes/footer-index.php"; ?>