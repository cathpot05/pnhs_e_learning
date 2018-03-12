<?php
include 'db.inc.php';
session_start();

$module_name = "";

if(isset($_FILES['subtopic'])){
   $errors= array();
   $file_name = $_FILES['subtopic']['name'];
   $module_name = $_FILES['subtopic']['name'];
   $file_size = $_FILES['subtopic']['size'];
   $file_tmp = $_FILES['subtopic']['tmp_name'];
   $file_type = $_FILES['subtopic']['type'];
   $file_ext=strtolower(end(explode('.',$_FILES['subtopic']['name'])));

   $expensions= array("pdf","doc","docx");

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

$sql = "UPDATE tbl_sma12 SET level = 
'".$_POST["level"]."',
"." subname = '".$_POST["subname"]."', 
subtopic = '".$"subtopic"."', 
"." module_name = '".$_POSTmodule_name."' ".
 " where id = ".$_POST["id"];
$result = $conn->query($sql);
header("Location:../showlessons.php");
$conn->close();
