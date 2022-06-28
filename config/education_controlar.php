<?php

include "server_connect.php";

if (isset($_POST["addEdu"])) {
    $educationName = $_POST['educationName'];
    $shortBio = $_POST['shortBio'];
    $startYear = $_POST['startYear'];
    $endYear = $_POST['endYear'];

    if (empty($educationName) || empty($shortBio) || empty($startYear) || empty($startYear)) {
        $message = "All File Required";
    } else {
        $insert_edu = "INSERT INTO `education`(`education_name`, `short_bio`, `start_year`, `end_year`) VALUES ('{$educationName}','{$shortBio}','{$startYear}','{$endYear}')";
        $insert_edu_data = mysqli_query($db_config, $insert_edu);
        if ($insert_edu_data == true) {
            $message = "Insert Success";
        } else {
            $message = "Insert Fail";
        }
    }
    header("location: ../education.php?msg={$message}");
}


// This For Education Update Section