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

  

   if($file_size > 2097152) {
      //$errors[]='File size must be excately 2 MB';
   }

   if(empty($errors)==true) {
      move_uploaded_file($file_tmp,"upload/".$file_name);
      echo "Success";
   }else{
      print_r($errors);
   }
}
$sql = "INSERT INTO tbl_abm12 (level, subname, subtopic, week, assquarter, tmp_name) VALUES ('".$_POST["level"]."','".$_POST["subname"]."',
 '".$_POST["subtopic"]."',
 '".$_POST["week"]."',
 '".$_POST["assquarter"]."',
 '".$current_date."')";
$result = $conn->query($sql);
$_SESSION["success"] = 1;
header("Location:../abm12.php");
$conn->close();


?>
