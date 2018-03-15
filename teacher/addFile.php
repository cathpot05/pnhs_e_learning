<?php
include '../db.inc.php';
session_start();

$description = $_POST['description'];
$quarter = $_POST['quarter'];
$week = $_POST['week'];
$sy_course_subjId = $_GET['sy_course_subjId'];
$date = date('Y-m-d');
$time = date('H:i:s');

  $file_name = $_FILES['subtopic']['name'];
   $module_name = $_FILES['subtopic']['name'];
   $file_size = $_FILES['subtopic']['size'];
   $file_tmp = $_FILES['subtopic']['tmp_name'];
   $file_type = $_FILES['subtopic']['type'];
   $file_ext=strtolower(end(explode('.',$_FILES['subtopic']['name'])));
   $directory = "../files/".$sy_course_subjId."/".$file_name;
   
   if(!is_dir("../files/".$sy_course_subjId."/")) {
    mkdir("../files/".$sy_course_subjId."/");
}
    if($file_size > 2097152) {
      //$errors[]='File size must be excately 2 MB';
   }

   if(empty($errors)==true) {
      move_uploaded_file($file_tmp,$directory);
      echo "alert(success)";
   }else{
      print_r($errors);
   }

$sql = "INSERT INTO tbl_files(sy_course_subjId, quarter,week,description,directory) VALUES($sy_course_subjId,$quarter,$week,'$description','$directory')";
$result = $conn->query($sql);

$notif = "Added new File for week ".$week.".";
echo $sql = "INSERT INTO tbl_notif(sy_course_subjId,notif,date,time) VALUES($sy_course_subjId,'$notif','$date','$time')";
$result = $conn->query($sql);

header("Location:showModules.php?sy_course_subjId=$sy_course_subjId");
?>