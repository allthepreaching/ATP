<?php include_once '../includes/header-archive.php'; ?>

<!--        salvation section        -->
<section class="colors-g page-transition non-preloading" id="salvation">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'salvation' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<!--        preaching section      -->

<!--        preaching section menu      -->
<section class="colors-g page-transition non-preloading" id="preaching">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">preaching</h2>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <a href="#fwbcmc">
                    <h5>
                        faithful word<br>missions conference
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
                <a href="#fbbf">
                    <h5>
                        fire breathing<br>baptist fellowship
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
        </div>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <a href="#fbc">
                    <h5>
                        fundamentalist<br>baptist conference
                    </h5>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#hlc">
                    <h5>
                        heritage of the lord<br>conference
                    </h5>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#kjc">
                    <h5>
                        king james<br>conference
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
                <a href="#mtzc">
                    <h5>
                        marching to zion<br> conference
                    </h5>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#ngyr">
                    <h5>
                        next generation<br>youth rally
                    </h5>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#prophcon">
                    <h5>
                        prophesy <br>conference
                    </h5>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#rhpc">
                    <h5>
                        red hot<br>preaching conference
                    </h5>
                </a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <a href="#sermonclips">
                    <h5>
                        sermon<br>clips
                    </h5>
                </a>
            </div>
            <div class="col-md-3">
            </div>
            <div class="col-md-3">
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
        <br><br><br><br><br><br>
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

<!--        preaching section fbc      -->
<section class="colors-g page-transition non-preloading" id="fbc">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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

<!--        preaching section fwbcmc      -->
<section class="colors-g page-transition non-preloading" id="fwbcmc">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">faithful word</h2>
        <h2>missions conference</h2>
        <h6>
            <a href="#preaching" class="hover-effect">
                Back to <span class="highlight">preaching Menu</span>
            </a>
        </h6>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <a href="#fwbcmc2023">
                    <h5>
                        2023
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

<!--        preaching section fwbcpc      -->
<section class="colors-g page-transition non-preloading" id="fwbcpc">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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

<!--        preaching section hlc      -->
<section class="colors-g page-transition non-preloading" id="hlc">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">heritage of the lord</h2>
        <h2> conference</h2>
        <h6>
            <a href="#preaching" class="hover-effect">
                Back to <span class="highlight">preaching Menu</span>
            </a>
        </h6>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <a href="#hlc2022">
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

<!--        preaching section kjc      -->
<section class="colors-g page-transition non-preloading" id="kjc">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">king james</h2>
        <h2> conference</h2>
        <h6>
            <a href="#preaching" class="hover-effect">
                Back to <span class="highlight">preaching Menu</span>
            </a>
        </h6>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <a href="#kjc2023">
                    <h5>
                        2023
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


<!--        preaching section masa      -->
<section class="colors-g page-transition non-preloading" id="masa">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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


<!--        preaching section mtzc      -->
<section class="colors-g page-transition non-preloading" id="mtzc">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">marching to zion</h2>
        <h2>conference</h2>
        <h6>
            <a href="#preaching" class="hover-effect">
                Back to <span class="highlight">preaching Menu</span>
            </a>
        </h6>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <a href="#mtzc2018">
                    <h5>
                        2018
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


<!--        preaching section ngyr      -->
<section class="colors-g page-transition non-preloading" id="ngyr">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">next generation</h2>
        <h2>youth rally</h2>
        <h6>
            <a href="#preaching" class="hover-effect">
                Back to <span class="highlight">preaching Menu</span>
            </a>
        </h6>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <a href="#ngyr2023">
                    <h5>
                        2023
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


<!--        preaching section prophcon      -->
<section class="colors-g page-transition non-preloading" id="prophcon">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">prophesy</h2>
        <br>
        <h2>conference</h2>
        <h6>
            <a href="#preaching" class="hover-effect">
                Back to <span class="highlight">preaching Menu</span>
            </a>
        </h6>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <a href="#prophcon2015">
                    <h5>
                        2015
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


<!--        preaching section rhpc      -->
<section class="colors-g page-transition non-preloading" id="rhpc">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
                <a href="#rhpc2022">
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
        <br><br><br><br><br><br>
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
                <a href="#scressl">
                    <h5>
                        Deacon Corbin Ressl
                    </h5>
                </a>
            </div>
        </div>
        <hr>
        <div class="row">
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
            <div class="col-md-3">
                <a href="#scjones">
                    <h5>
                        Pastor joe jones
                    </h5>
                </a>
            </div>
        </div>
        <hr>
        <div class="row">
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
            <div class="col-md-3">
                <a href="#scstucky">
                    <h5>
                        pastor matthew stucky
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
        <br><br><br><br><br><br>
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
                <a href="#fsressl">
                    <h5>
                        Deacon Corbin Ressl
                    </h5>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#fsanderson">
                    <h5>
                        Pastor Steven Anderson
                    </h5>
                </a>
            </div>
        </div>
        <hr>
        <div class="row">
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
            <div class="col-md-3">
                <a href="#fsmejia">
                    <h5>
                        Pastor Bruce Mejia
                    </h5>
                </a>
            </div>
        </div>
        <hr>
        <div class="row">
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
            <div class="col-md-3">
                <a href="#fsshelley">
                    <h5>
                        Pastor Jonathan Shelley
                    </h5>
                </a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <a href="#fsstucky">
                    <h5>
                        pastor matthew stucky
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


<!--        preaching section fire breathing baptist fellowship 2019      -->
<section class="colors-g page-transition non-preloading" id="fbbf2019">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'fbbf2019' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section fire breathing baptist fellowship 2021      -->
<section class="colors-g page-transition non-preloading" id="fbbf2021">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'fbbf2021' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section fundamentalist baptist conference 2019      -->
<section class="colors-g page-transition non-preloading" id="fbc2019">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'fbc2019' ORDER BY vid_title DESC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section fundamentalist baptist conference 2020      -->
<section class="colors-g page-transition non-preloading" id="fbc2020">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'fbc2020' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section fundamentalist baptist conference 2021      -->
<section class="colors-g page-transition non-preloading" id="fbc2021">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'fbc2021' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section fwbc missions conference 2023      -->
<section class="colors-g page-transition non-preloading" id="fwbcmc2023">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">
            fwbc missions conference<br>2023
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'fwbcmc2023' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section fwbc preaching class 2022      -->
<section class="colors-g page-transition non-preloading" id="fwbcpc2022">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'fwbcpc2022' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section hlc 2022      -->
<section class="colors-g page-transition non-preloading" id="hlc2022">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">
            heritage of the lord<br>conference 2022
        </h2>
        <h6>
            <a href="#hlc" class="hover-effect">
                Back to <span class="highlight">heritage of the lord conference Menu</span>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'hlc2022' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<!--        preaching section kjc 2023      -->
<section class="colors-g page-transition non-preloading" id="kjc2023">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">
            king james<br>conference 2023
        </h2>
        <h6>
            <a href="#kjc" class="hover-effect">
                Back to <span class="highlight">king james conference Menu</span>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'kjc2023' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section masa 2019     -->
<section class="colors-g page-transition non-preloading" id="masa2019">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'masa2019' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section mtzc 2018     -->
<section class="colors-g page-transition non-preloading" id="mtzc2018">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">
            marching to zion conference 2018
        </h2>
        <h6>
            <a href="#mtzc" class="hover-effect">
                Back to <span class="highlight">mtzc Menu</span>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'mtzc2018' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section ngyr 2023     -->
<section class="colors-g page-transition non-preloading" id="ngyr2023">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">
            next generation youth rally 2023
        </h2>
        <h6>
            <a href="#ngyr" class="hover-effect">
                Back to <span class="highlight">ngyr Menu</span>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'ngyr2023' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section prophcon 2015     -->
<section class="colors-g page-transition non-preloading" id="prophcon2015">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">
            Prophesy Conference <br> 2015
        </h2>
        <h6>
            <a href="#prophcon" class="hover-effect">
                Back to <span class="highlight">prophesy conference Menu</span>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'prophcon2015' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section red hot preaching conf. 2016      -->
<section class="colors-g page-transition non-preloading" id="rhpc2016">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">
            red hot preaching conference 2016
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'rhpc2016' ORDER BY vid_title DESC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section red hot preaching conf. 2017    -->
<section class="colors-g page-transition non-preloading" id="rhpc2017">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">
            red hot preaching conference 2017
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'rhpc2017' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section red hot preaching conf. 2018      -->
<section class="colors-g page-transition non-preloading" id="rhpc2018">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">
            red hot preaching conference 2018
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'rhpc2018' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section red hot preaching conf. 2019      -->
<section class="colors-g page-transition non-preloading" id="rhpc2019">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">
            red hot preaching conference 2019
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'rhpc2019' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section red hot preaching conf. 2020      -->
<section class="colors-g page-transition non-preloading" id="rhpc2020">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">
            red hot preaching conference 2020
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'rhpc2020' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section red hot preaching conf. 2021      -->
<section class="colors-g page-transition non-preloading" id="rhpc2021">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">
            red hot preaching conference 2021
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'rhpc2021' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section red hot preaching conf. 2022      -->
<section class="colors-g page-transition non-preloading" id="rhpc2022">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">
            red hot preaching conference 2022
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'rhpc2022' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section clips awes      -->
<section class="colors-g page-transition non-preloading" id="scawes">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'scawes' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section clips powell      -->
<section class="colors-g page-transition non-preloading" id="scpowell">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'scpowell' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section clips segura     -->
<section class="colors-g page-transition non-preloading" id="scsegura">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">sermon clips<br>Bro. chris Segura
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'scsegura' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section clips stucky      -->
<section class="colors-g page-transition non-preloading" id="scstucky">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">
            Sermon Clips<br>pastor matthew stucky
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'scstucky' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section clips ressl      -->
<section class="colors-g page-transition non-preloading" id="scressl">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">
            Sermon Clips<br>Deacon corbin Ressl
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'scressl' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section clips anderson      -->
<section class="colors-g page-transition non-preloading" id="scanderson">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">
            Sermon Clips<br>Pastor steven Anderson
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'scanderson' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section clips berzins      -->
<section class="colors-g page-transition non-preloading" id="scberzins">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2>Sermon Clips<br><span class="highlight">Pastor dave Berzins</span></h2>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'scberzins' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section clips jimenez      -->

<section class="colors-g page-transition non-preloading" id="scjimenez">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">
            Sermon Clips<br>Pastor roger Jimenez
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'scjimenez' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section clips jones      -->

<section class="colors-g page-transition non-preloading" id="scjones">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">
            Sermon Clips<br>Pastor joe jones
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'scjones' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section clips mejia      -->
<section class="colors-g page-transition non-preloading" id="scmejia">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">
            Sermon Clips<br>Pastor bruce Mejia
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'scmejia' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section clips pozarnsky      -->
<section class="colors-g page-transition non-preloading" id="scpozarnsky">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">
            Sermon Clips<br>Bro. jared Pozarnsky
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'scpozarnsky' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section clips shelley      -->
<section class="colors-g page-transition non-preloading" id="scshelley">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">
            Sermon Clips<br>Pastor jonathan Shelley
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'scshelley' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section clips thompson      -->
<section class="colors-g page-transition non-preloading" id="scthompson">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">
            Sermon Clips<br>Pastor aaron Thompson
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'scthompson' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section sermons awes     -->
<section class="colors-g page-transition non-preloading" id="fsawes">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'fsawes' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section sermons cooper     -->
<section class="colors-g page-transition non-preloading" id="fscooper">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'fscooper' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
</section>


<!--        preaching section sermons kiefer     -->
<section class="colors-g page-transition non-preloading" id="fskiefer">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'fskiefer' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section sermons naim      -->
<section class="colors-g page-transition non-preloading" id="fsnaim">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'fsnaim' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section sermons powell      -->
<section class="colors-g page-transition non-preloading" id="fspowell">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'fspowell' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section sermons segura      -->
<section class="colors-g page-transition non-preloading" id="fssegura">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'fssegura' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section sermons stucky      -->
<section class="colors-g page-transition non-preloading" id="fsstucky">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">
            Sermons<br>pastor matthew stucky
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'fsstucky' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section sermons ressl      -->
<section class="colors-g page-transition non-preloading" id="fsressl">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">
            Sermons<br>Deacon Corbin Ressl
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'fsressl' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section sermons anderson      -->
<section class="colors-g page-transition non-preloading" id="fsanderson">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">
            Sermons<br>Pastor steven Anderson
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'fsanderson' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section sermons berzins      -->
<section class="colors-g page-transition non-preloading" id="fsberzins">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">
            Sermons<br>Pastor dave Berzins
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'fsberzins' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section sermons jimenez      -->
<section class="colors-g page-transition non-preloading" id="fsjimenez">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">
            Sermons<br>Pastor roger Jimenez
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'fsjimenez' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section sermons jones      -->
<section class="colors-g page-transition non-preloading" id="fsjones">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">
            Sermons<br>Pastor joe Jones
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'fsjones' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section sermons mejia      -->
<section class="colors-g page-transition non-preloading" id="fsmejia">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">
            Sermons<br>Pastor bruce Mejia
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'fsmejia' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section sermons pozarnsky      -->
<section class="colors-g page-transition non-preloading" id="fspozarnsky">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">
            Sermons<br>pastor jared Pozarnsky
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'fspozarnsky' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section sermons robinson      -->
<section class="colors-g page-transition non-preloading" id="fsrobinson">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">
            Sermons<br>Pastor jason Robinson
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'fsrobinson' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section sermons sepulveda      -->
<section class="colors-g page-transition non-preloading" id="fssepulveda">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">
            Sermons<br>Pastor kevin sepulveda
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'fssepulveda' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section sermons shelley      -->
<section class="colors-g page-transition non-preloading" id="fsshelley">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">
            Sermons<br>Pastor jonathan Shelley
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'fsshelley' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        preaching section sermons thompson      -->
<section class="colors-g page-transition non-preloading" id="fsthompson">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">
            Sermons<br>Pastor aaron Thompson
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'fsthompson' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        audio bible section     -->
<section class="colors-g page-transition non-preloading" id="abible">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">
            The King James Bible
        </h2>
        <h5 class="highlight center-index-top">read by</h5>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'abible' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        soul winning section        -->
<section class="colors-g page-transition non-preloading" id="sw">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'swmotivation' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        soul winning section seminar anderson      -->
<section class="colors-g page-transition non-preloading" id="swsanderson">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'swsanderson' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        soul winning section seminar jimenez      -->
<section class="colors-g page-transition non-preloading" id="swsjimenez">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'swsjimenez' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        soul winning section seminar shelley      -->
<section class="colors-g page-transition non-preloading" id="swsshelley">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'swsshelley' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        soul winning section tips      -->
<section class="colors-g page-transition non-preloading" id="swtips">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'swtips' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        soul winning section workshops      -->
<section class="colors-g page-transition non-preloading" id="swwberzins">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'swwberzins' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        moments section        -->
<section class="colors-g page-transition non-preloading" id="moments">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
                <a href="#mdummies">
                    <h5>
                        topics for<br>dummies
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
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'mcreation' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        moments section day of the dead      -->
<section class="colors-g page-transition non-preloading" id="mdotd">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'mdotd' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        moments section dummies      -->
<section class="colors-g page-transition non-preloading" id="mdummies">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">
            topics for dummies
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'mdummies' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        moments section hindu      -->
<section class="colors-g page-transition non-preloading" id="mhindu">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'mhindu' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        moments section israel      -->
<section class="colors-g page-transition non-preloading" id="misrael">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'misrael' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        moments section kjv      -->
<section class="colors-g page-transition non-preloading" id="mkjv">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'mkjv' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        moments section mormon      -->
<section class="colors-g page-transition non-preloading" id="mmormon">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'mmormon' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        moments section post trib      -->
<section class="colors-g page-transition non-preloading" id="mposttrib">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'mposttrib' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        moments section short videos      -->
<section class="colors-g page-transition non-preloading" id="mshort">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'mshort' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        moments section thessalonian      -->
<section class="colors-g page-transition non-preloading" id="mthess">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">
            thessalonian moments
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'mthess' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        moments section trinity      -->
<section class="colors-g page-transition non-preloading" id="mtrinity">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'mtrinity' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        documentaries section  menu      -->
<section class="colors-g page-transition non-preloading" id="docsmain">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">Documentaries</h2>
        <hr>
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-3">
                <a href="#docs">
                    <h5>
                        documentaries
                    </h5>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#trailers">
                    <h5>
                        trailers
                    </h5>
                </a>
            </div>
            <div class="col-md-3">
            </div>
        </div>
        <hr>
    </div>
</section>


<!--        documentaries section  documentaries      -->
<section class="colors-g page-transition non-preloading" id="docs">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">Documentaries</h2>
        <h6>
            <a href="#docsmain" class="hover-effect">
                Back to <span class="highlight">documentaries</span>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'docs' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        documentaries section  trailers      -->
<section class="colors-g page-transition non-preloading" id="trailers">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">trailers</h2>
        <h6>
            <a href="#docsmain" class="hover-effect">
                Back to <span class="highlight">documentaries</span>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'trailers' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        creation section        -->
<section class="colors-g page-transition non-preloading" id="creation">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'creation' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        interviews section        -->
<section class="colors-g page-transition non-preloading" id="interviews">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'interviews' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        podcasts section menu       -->
<section class="colors-g page-transition non-preloading" id="podcasts">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">Podcasts</h2>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <a href="#pcbias">
                    <h5>
                        Baptist Bias
                    </h5>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#pcolive">
                    <h5>
                        olive crown
                    </h5>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#pcrod">
                    <h5>
                        rod of iron
                    </h5>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#pcsword">
                    <h5>
                        sword of the spirit
                    </h5>
                </a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <a href="#pcdrill">
                    <h5>
                        the sword drill
                    </h5>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#pctrue">
                    <h5>
                        true born sons
                    </h5>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#pcuncensored">
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
<section class="colors-g page-transition non-preloading" id="pcbias">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'pcbias' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        podcasts section olive      -->

<section class="colors-g page-transition non-preloading" id="pcolive">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'pcolive' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        podcasts section rod      -->
<section class="colors-g page-transition non-preloading" id="pcrod">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'pcrod' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        podcasts section sword      -->
<section class="colors-g page-transition non-preloading" id="pcsword">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'pcsword' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        podcasts section true      -->
<section class="colors-g page-transition non-preloading" id="pctrue">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'pctrue' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        podcasts section sword drill      -->
<section class="colors-g page-transition non-preloading" id="pcdrill">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2 class="highlight">
            the sword drill
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'pcdrill' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        podcasts section uncensored      -->
<section class="colors-g page-transition non-preloading" id="pcuncensored">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'pcuncensored' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        landmarks section        -->
<section class="colors-g page-transition non-preloading" id="landmarks">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'landmarks' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        ftw section        -->
<section class="colors-g page-transition non-preloading" id="ftw">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'ftw' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<!--        other section        -->
<section class="colors-g page-transition non-preloading" id="other">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'other' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<!--        music section menu      -->
<section class="colors-g page-transition non-preloading" id="music">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2><span class="highlight">music</span></h2>

        <a target="_blank" target="_blank" href="https://www.kjv1611only.com/video/AllMusic.zip">
            <h6>
                <span class="thin-font-weight">want all the music in our music section? download a zip file <span class="highlight thin-font-weight">here</span>!</span>
            </h6>
        </a>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <a href="#muhymns">
                    <h5>
                        hymns
                    </h5>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#muother">
                    <h5>
                        other music
                    </h5>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#mupsalms">
                    <h5>
                        psalms
                    </h5>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#mufwbccol">
                    <h5>
                        fwbc collection
                    </h5>
                </a>
            </div>
        </div>
        <hr>
    </div>
</section>

<!--        music hymns      -->
<section class="colors-g page-transition non-preloading" id="muhymns">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2><span class="highlight">hymns</span></h2>
        <h6>
            <a href="#music" class="hover-effect">
                Back to <span class="highlight">music</span>
            </a>
        </h6>
        <h6>
            <a target="_blank" href="https://www.kjv1611only.com/video/Hymns.zip" class="hover-effect">
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'muhymns' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<!--        music other      -->
<section class="colors-g page-transition non-preloading" id="muother">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2><span class="highlight">other music</span></h2>

        <h6>
            <a href="#music" class="hover-effect">
                Back to <span class="highlight">music</span>
            </a>
        </h6>
        <h6>
            <a target="_blank" href="https://www.kjv1611only.com/video/Other.zip" class="hover-effect">
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'muother' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<!--        music psalms      -->
<section class="colors-g page-transition non-preloading" id="mupsalms">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2><span class="highlight">psalms</span></h2>

        <h6>
            <a href="#music" class="hover-effect">
                Back to <span class="highlight">music</span>
            </a>
        </h6>
        <h6>
            <a target="_blank" href="https://www.kjv1611only.com/video/Psalms.zip">
                for a zip file of all the psalms on this page <span class=" highlight">click here!</span>
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'mupsalms' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        music fwbc collection  menu      -->
<section class="colors-g page-transition non-preloading" id="mufwbccol">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2><span class="highlight">fwbc hymn collection</span></h2>

        <h6>
            <a href="#music" class="hover-effect">
                Back to <span class="highlight">music</span>
            </a>
        </h6>
        <h6>
            <a target="_blank" href="https://www.kjv1611only.com/video/FWBC_Collection.zip" class="hover-effect">
                for a zip file of all the volumes on this page <span class="highlight">click here!</span>
            </a>
        </h6>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <a href="#mufwbcvol1">
                    <h5>
                        volume<br>1
                    </h5>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#mufwbcvol2">
                    <h5>
                        volume<br>2
                    </h5>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#mufwbcvol3">
                    <h5>
                        volume<br>3
                    </h5>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#mufwbcvol4">
                    <h5>
                        volume<br>4
                    </h5>
                </a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <a href="#mufwbcvol5">
                    <h5>
                        volume<br>5
                    </h5>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#mufwbcvol6">
                    <h5>
                        volume<br>6
                    </h5>
                </a>
            </div>
            <div class="col-md-3">

            </div>
            <div class="col-md-3">

            </div>
        </div>
        <hr>
    </div>
</section>


<!--        music fwbc collection vol 1      -->
<section class="colors-g page-transition non-preloading" id="mufwbcvol1">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2><span class="highlight">volume 1</span></h2>

        <h6>
            <a href="#mufwbccol" class="hover-effect">
                Back to <span class="highlight">fwbc hymn collection</span>
            </a>
        </h6>
        <h6>
            <a target="_blank" href="https://www.kjv1611only.com/video/13music/FWBC_Collection/Vol_1.zip" class="hover-effect">
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'mufwbcvol1' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        music fwbc collection vol 2      -->
<section class="colors-g page-transition non-preloading" id="mufwbcvol2">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2><span class="highlight">volume 2</span></h2>

        <h6>
            <a href="#mufwbccol" class="hover-effect">
                Back to <span class="highlight">fwbc hymn collection</span>
            </a>
        </h6>
        <h6>
            <a target="_blank" href="https://www.kjv1611only.com/video/13music/FWBC_Collection/Vol_2.zip" class="hover-effect">
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'mufwbcvol2' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        music fwbc collection vol 3      -->
<section class="colors-g page-transition non-preloading" id="mufwbcvol3">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2><span class="highlight">volume 3</span></h2>

        <h6>
            <a href="#mufwbccol" class="hover-effect">
                Back to <span class="highlight">fwbc hymn collection</span>
            </a>
        </h6>
        <h6>
            <a target="_blank" href="https://www.kjv1611only.com/video/13music/FWBC_Collection/Vol_3.zip" class="hover-effect">
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'mufwbcvol3' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        music fwbc collection vol 4      -->
<section class="colors-g page-transition non-preloading" id="mufwbcvol4">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2><span class="highlight">volume 4</span></h2>

        <h6>
            <a href="#mufwbccol" class="hover-effect">
                Back to <span class="highlight">fwbc hymn collection</span>
            </a>
        </h6>
        <h6>
            <a target="_blank" href="https://www.kjv1611only.com/video/13music/FWBC_Collection/Vol_4.zip" class="hover-effect">
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'mufwbcvol4' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        music fwbc collection vol 5      -->
<section class="colors-g page-transition non-preloading" id="mufwbcvol5">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2><span class="highlight">volume 5</span></h2>

        <h6>
            <a href="#mufwbccol" class="hover-effect">
                Back to <span class="highlight">fwbc hymn collection</span>
            </a>
        </h6>
        <h6>
            <a target="_blank" href="https://www.kjv1611only.com/video/13music/FWBC_Collection/Vol_5.zip" class="hover-effect">
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'mufwbcvol5' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--        music fwbc collection vol 6      -->
<section class="colors-g page-transition non-preloading" id="mufwbcvol6">
    <div class="container" data-animation="fadeInDown">
        <br><br><br><br><br><br>
        <hr>
        <h2><span class="highlight">volume 6</span></h2>

        <h6>
            <a href="#mufwbccol" class="hover-effect">
                Back to <span class="highlight">fwbc hymn collection</span>
            </a>
        </h6>
        <h6>
            <a target="_blank" href="https://www.kjv1611only.com/video/13music/FWBC_Collection/Vol_6.zip" class="hover-effect">
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
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'mufwbcvol6' ORDER BY name ASC");
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
                    <?php foreach ($chunks[0] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[1] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[2] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- COLUMN 4 -->
            <div class="col-md-3">
                <ul class="simple">
                    <?php foreach ($chunks[3] as $data) { ?>
                        <li>
                            <a href="video.php?id='<?= $data['id']; ?>'" title="'<?= $data['vid_title']; ?>'">
                                <?= $data['vid_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>