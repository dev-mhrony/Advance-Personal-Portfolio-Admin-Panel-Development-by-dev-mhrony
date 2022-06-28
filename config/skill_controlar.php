<?php

include "./server_connect.php";

if(isset($_POST["skillSubmit"])){
    $SkillName = $_POST['SkillName'];
    $Percentage = $_POST['Percentage'];
    $Experience = $_POST['Experience'];
    
    
    if(empty($SkillName) || empty($Percentage) || empty($Experience)){
        $message = "All File Required";
    }else{
        $insert_skill = "INSERT INTO `skill`(`skill_name`, `percentage`, `experience`) VALUES ('$SkillName','$Percentage','$Experience')";
        
        $insert_skill_list = mysqli_query($db_config, $insert_skill);
    
        if($insert_skill_list == true){
            $message = "Insert Success";
        }else{
            $message = "Insert Fail";
            
        }
    }
    header("location: ../skill.php?msg={$message}");
}
