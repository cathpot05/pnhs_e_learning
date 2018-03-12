<?php
include '../db.inc.php';
session_start();

$description = $_POST['description'];
$quarter = $_POST['quarter'];
$week = $_POST['week'];
$teacherinfoid = $_GET['teacherinfoid'];

  $file_name = $_FILES['subtopic']['name'];
   $module_name = $_FILES['subtopic']['name'];
   $file_size = $_FILES['subtopic']['size'];
   $file_tmp = $_FILES['subtopic']['tmp_name'];
   $file_type = $_FILES['subtopic']['type'];
   $file_ext=strtolower(end(explode('.',$_FILES['subtopic']['name'])));
     $directory = "../files/".$file_name;
    if($file_size > 2097152) {
      //$errors[]='File size must be excately 2 MB';
   }

   if(empty($errors)==true) {
      move_uploaded_file($file_tmp,$directory);
      echo "alert(success)";
   }else{
      print_r($errors);
   }

$sql = "INSERT INTO tbl_files(teacherinfoid, quarter,week,description,directory) VALUES($teacherinfoid,$quarter,$week,'$description','$directory')";
$result = $conn->query($sql);
header("Location:showModules.php?teacherinfo_id=$teacherinfoid");
?>