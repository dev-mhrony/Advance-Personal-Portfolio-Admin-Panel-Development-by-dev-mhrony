<?php

include "./server_connect.php";

if (isset($_POST["add_socialMedia"])) {
    $socialName = $_POST['socialName'];
    $SocialLink = $_POST['SocialLink'];


    if (empty($socialName) || empty($SocialLink)) {
        $message = "All File Required";
    } else {
        $insert_social_media = "INSERT INTO `social_media`(`social_media_name`, `social_media_link`) VALUES ('$socialName','$SocialLink')";

        $insert_socalMedia_list = mysqli_query($db_config, $insert_social_media);

        if ($insert_socalMedia_list == true) {
            $message = "Insert Success";
        } else {
            $message = "Insert Fail";
        }
    }
    header("location: ../social_link.php?msg={$message}");
}
