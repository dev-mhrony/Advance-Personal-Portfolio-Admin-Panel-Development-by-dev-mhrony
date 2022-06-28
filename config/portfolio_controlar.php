<?php

include "./server_connect.php";

if (isset($_POST["addPortfolio"])) {
    $projectName = $_POST['projectName'];
    $projectBio = $_POST['projectBio'];
    $catagory = $_POST['catagory'];
    $cintName = $_POST['cintName'];
    $projectLanguage = $_POST['projectLanguage'];
    $projectPreview = $_POST['projectPreview'];

    if (empty($projectName) || empty($projectBio) || empty($catagory) || empty($cintName) || empty($projectLanguage) || empty($projectPreview)) {
        $message = "All File Required";
    } else {
        $insert_portfolio = "INSERT INTO `portfolio`(`project_name`, `project_bio`, `category`, `clint_name`, `project_language`, `project_preview_link`) VALUES ('$projectName','$projectBio','$catagory','$cintName','$projectLanguage','$projectPreview')";

        $insert_port_list = mysqli_query($db_config, $insert_portfolio);

        if ($insert_port_list == true) {
            $message = "Insert Success";
        } else {
            $message = "Insert Fail";
        }
    }
    header("location: ../portfoli.php?msg={$message}");
}


// This For Portfolio Update Section