<?php

include "server_connect.php";

if (isset($_POST["addExparince"])) {
    $companyName = $_POST['companyName'];
    $shortBio = $_POST['shortBio'];
    $startJob = $_POST['startJob'];
    $endJob = $_POST['endJob'];

    if (empty($companyName) || empty($shortBio) || empty($startJob) || empty($endJob)) {
        $message = "All File Required";
    } else {
        $insert_exp = "INSERT INTO `experience`(`company_name`, `short_bio`, `start_jobe_date`, `end_jobe_date`) VALUES ('{$companyName}','{$shortBio}','{$startJob}','{$endJob}')";
        $insert_exp_data = mysqli_query($db_config, $insert_exp);
        if ($insert_exp_data == true) {
            $message = "Insert Success";
        } else {
            $message = "Insert Fail";
        }
    }
    header("location: ../exparience.php?msg={$message}");
}
