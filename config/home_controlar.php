<?php

require "server_connect.php";

if (isset($_POST["updateHome"])) {

    $home_id = $_POST['home_id'];
    $YourName = $_POST['yourName'];
    $Description = $_POST['description'];
    $Link = $_POST['link'];
    $Image = $_POST['image'];

    if (empty($YourName) || empty($Description) || empty($Link)) {
        $message = "All File Required";
    } else {

        $updateQry = "UPDATE home_edit_section SET your_name='{$YourName}', description='{$Description}', link='{$Link}', image='{$Image}' WHERE id='{$home_id}'";

        $issubmit = mysqli_query($db_config, $updateQry);


        if ($issubmit == true) {
            $message = "Update Success";
        } else {
            $message = "Update Fail";
        }
    }
    header("location: ../update_home_section.php?home_id={$home_id}&msg={$message}");
}
