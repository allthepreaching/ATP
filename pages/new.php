<?php

include_once '../includes/header.php';

$cnt = "SELECT COUNT(*) AS count FROM `videos`";

?>

<!-- newest content section -->
<section class="colors-g page-transition non-preloading" id="newest-content">
    <br>
    <br>
    <div class="container" data-animation="fadeInDown">
        <hr>
        <h2 class="highlight">
            newest content
        </h2>
        <hr>
        <div class="row">
            <?php
            $countQuery = $cnt;
            $countResult = mysqli_query($conn, $countQuery);
            while ($row = mysqli_fetch_assoc($countResult)) {
                $countOutput = $row['count'];
            }
            $codeQuery = $conn->query("SELECT * FROM videos WHERE vid_category = 'newest' ORDER BY date DESC");
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

<?php include_once '../includes/footer.php'; ?>