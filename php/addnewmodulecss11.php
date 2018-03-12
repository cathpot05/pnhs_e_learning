<?php
include 'db.inc.php';
session_start();


$subtopic = "";

if(isset($_FILES['subtopic'])){
   $errors= array();
   $file_name = $_FILES['subtopic']['name'];
   $module_name = $_FILES['subtopic']['name'];
   $file_size = $_FILES['subtopic']['size'];
   $file_tmp = $_FILES['subtopic']['tmp_name'];
   $file_type = $_FILES['subtopic']['type'];
   $file_ext=strtolower(end(explode('.',$_FILES['subtopic']['name'])));

   $expensions= array(".pdf",".doc",".docx");

   if(in_array($file_ext,$expensions)=== false){
      $errors[]="extension not allowed, please choose a PDF or DOCX file.";
   }

   if($file_size > 2097152) {
      //$errors[]='File size must be excately 2 MB';
   }

   if(empty($errors)==true) {
      move_uploaded_file($file_tmp,"files/".$file_name);
      echo "Success";
   }else{
      print_r($errors);
   }
}
$sql = "INSERT INTO tbl_css11 (level, subname, subtopic, week, assquarter) VALUES ('".$_POST["level"]."','".$_POST["subname"]."',
 '".$_POST["subtopic"]."',
 '".$_POST["week"]."',
 '".$_POST["assquarter"]."')";
$result = $conn->query($sql);
$_SESSION["success"] = 1;
header("Location:../css11.php");
$conn->close();


?>
