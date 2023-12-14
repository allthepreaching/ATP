<?php

include_once 'header.php';

$sql = "SELECT * FROM videos ORDER BY vid_category ASC";
$result = mysqli_query($conn, $sql);

?>

<div class='videos'>

    <?php

    $spanClose = '</span>';
    $spanClassVidAtt = '<span class="video-attribute">';

    if (mysqli_num_rows($result) > 0) {
        while ($video = mysqli_fetch_array($result)) {
            $id = $video['id'];
            $video_id = $video['video_id'];
            $profile_id = $video['profile_id'];
            $vid_category = $video['vid_category'];
            $search_category = $video['search_category'];
            $main_category = $video['main_category'];
            $vid_preacher = $video['vid_preacher'];
            $name = $video['name'];
            $vid_title = $video['vid_title'];
            $vid_code = $video['vid_code'];
            $date = $video['date'];
            $vid_url = $video['vid_url'];
            $thumb_url = $video['thumb_url'];
            $pic_url = $video['pic_url'];
            $header_url = $video['header_url'];
            $created_at = $video['created_at'];

            echo "<div class='video'>";

            echo $spanClassVidAtt . "<span class='attribute-title' id='mainId'>ID</span>" . " : " . "<span class='attribute-data' id='id'>" . $id . $spanClose . $spanClose;

            echo $spanClassVidAtt . "<span class='attribute-title' id='video_id'>VIDEO ID</span>" . " : " . "<span class='attribute-data' id='videoId'>" . $video_id . $spanClose . $spanClose;

            echo $spanClassVidAtt . "<span class='attribute-title' id='profile_id'>PROFILE ID</span>" . " : " . "<span class='attribute-data' id='profileId'>" . $profile_id . $spanClose . $spanClose;

            echo $spanClassVidAtt . "<span class='attribute-title' id='vcategory'>VIDEO CATEGORY</span>" . " : " . "<span class='attribute-data' id='vidCategory'>" . $vid_category . $spanClose . $spanClose;

            echo $spanClassVidAtt . "<span class='attribute-title' id='scategory'>SEARCH CATEGORY</span>" . " : " . "<span class='attribute-data' id='searchCategory'>" . $search_category . $spanClose . $spanClose;

            echo $spanClassVidAtt . "<span class='attribute-title' id='mcategory'>MAIN CATEGORY</span>" . " : " . "<span class='attribute-data' id='mainCategory'>" . $main_category . $spanClose . $spanClose;

            echo $spanClassVidAtt . "<span class='attribute-title' id='preacher'>VIDEO PREACHER</span>" . " : " . "<span class='attribute-data' id='vidPreacher'>" . $vid_preacher . $spanClose . $spanClose;

            echo $spanClassVidAtt . "<span class='attribute-title' id='name'>VIDEO NAME</span>" . " : " . "<span class='attribute-data' id='vidName'>" . $name . $spanClose . $spanClose;

            echo $spanClassVidAtt . "<span class='attribute-title' id='title'>VIDEO TITLE</span>" . " : " . "<span class='attribute-data' id='vidTitle'>" . $vid_title . $spanClose . $spanClose;

            echo $spanClassVidAtt . "<span class='attribute-title' id='code'>VIDEO CODE</span>" . " : " . "<span class='attribute-data' id='vidCode'>" . $vid_code . $spanClose . $spanClose;

            echo $spanClassVidAtt . "<span class='attribute-title' id='date'>VIDEO DATE</span>" . " : " . "<span class='attribute-data' id='vidDate'>" . $date . $spanClose . $spanClose;

            echo $spanClassVidAtt . "<span class='attribute-title' id='vurl'>VIDEO URL</span>" . " : " . "<span class='attribute-data' id='vidUrl'>" . $vid_url . $spanClose . $spanClose;

            echo $spanClassVidAtt . "<span class='attribute-title' id='turl'>THUMBNAIL URL</span>" . " : " . "<span class='attribute-data' id='thumbUrl'>" . $thumb_url . $spanClose . $spanClose;

            echo $spanClassVidAtt . "<span class='attribute-title' id='purl'>PICTURE URL</span>" . " : " . "<span class='attribute-data' id='picUrl'>" . $pic_url . $spanClose . $spanClose;

            echo $spanClassVidAtt . "<span class='attribute-title' id='hurl'>HEADER URL</span>" . " : " . "<span class='attribute-data' id='headerUrl'>" . $header_url . $spanClose . $spanClose;
            
            echo $spanClassVidAtt . "<span class='attribute-title' id='cat'>CREATED AT</span>" . " : " . "<span class='attribute-data' id='createdAt'>" . $created_at . $spanClose . $spanClose;

            echo "</div>";
        }
    }
    ?>
</div>