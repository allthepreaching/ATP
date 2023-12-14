<?php include_once '../includes/header.php'; ?>

<!--        upload section        -->
<section class="colors-g page-transition non-preloading" id="newest-content">
    <br>
    <br>
    <div class="container" data-animation="fadeInDown">
        <hr>
        <h2 class="highlight">
            upload content
        </h2>
        <hr>
        <form method="post" action="../includes/upload-process.php">
            <label>id:</label>
            <textarea name="id[]" rows="1" cols="50"></textarea><br>

            <label>vid_category:</label>
            <textarea name="vid_category[]" rows="1" cols="50"></textarea><br>

            <label>search_category:</label>
            <textarea name="search_category[]" rows="1" cols="50"></textarea><br>

            <label>vid_preacher:</label>
            <textarea name="vid_preacher[]" rows="1" cols="50"></textarea><br>

            <label>name:</label>
            <textarea name="name[]" rows="1" cols="50"></textarea><br>

            <label>vid_title:</label>
            <textarea name="vid_title[]" rows="1" cols="50"></textarea><br>

            <label>vid_code:</label>
            <textarea name="vid_code[]" rows="1" cols="50"></textarea><br>

            <label>date:</label>
            <textarea name="date[]" rows="1" cols="50"></textarea><br>

            <label>vid_url:</label>
            <textarea name="vid_url[]" rows="1" cols="50"></textarea><br>

            <label>thumb_url:</label>
            <textarea name="thumb_url[]" rows="1" cols="50"></textarea><br>

            <label>pic_url:</label>
            <textarea name="pic_url[]" rows="1" cols="50"></textarea><br>

            <label>header_url:</label>
            <textarea name="header_url[]" rows="1" cols="50"></textarea><br>

            <label>video_id:</label>
            <textarea name="video_id[]" rows="1" cols="50"></textarea><br>

            <label>profile_id:</label>
            <textarea name="profile_id[]" rows="1" cols="50"></textarea><br>

            <label>main_category:</label>
            <textarea name="main_category[]" rows="1" cols="50"></textarea><br>

            <br />
            <label>Submit Data</label>
            <input type="submit" value="Submit">
        </form>

    </div>
</section>

<?php include_once '../includes/footer.php'; ?>