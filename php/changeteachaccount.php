<?php
include 'db.inc.php';
session_start();


$username = $_POST["username"];
$firstname = $_POST["firstname"];
$middlename = $_POST["middlename"];
$lastname = $_POST["lastname"]; 
$lastname = $_POST["field1"]; 
$lastname = $_POST["field2"]; 
$lastname = $_POST["field3"]; 
$lastname = $_POST["field4"]; 
$address = $_POST["address"];
$mno = $_POST["mno"];
$dbirth = $_POST["dbirth"];
$age = $_POST["age"];
$gender = $_POST["gender"]; 
$fname = $_POST["fname"];
$mname = $_POST["mname"];
$emailaddress = $_POST["emailaddress"];
$yearlevel = $_POST["yearlevel"]; 
$course = $_POST["course"];
$password = $_POST["password"];
$privilege = $_POST["privilege"];
//$status = $_POST["status"];

$sql="UPDATE tbl_studaccounts SET idno='".$idno."',"." 
username='".$username."',firstname='".$firstname."',middlename='$middlename',lastname ='".$lastname."',"."field1 ='".$field1."',field2 ='".$field2."',"."field3 ='".$field3."',field4 ='".$field4."',"."address = '".$address."',mno='".$mno."',dbirth='".$dbirth."',"."age='".$age."',gender='".$gender."',"."fname='".$fname."',mname='".$mname."',emailaddress = '".$emailaddress."',"."yearlevel ='".$yearlevel."',course ='".$course."',"."password ='".$password."',privilege ='".$privilege."' "." WHERE id = '$id'";
$result = $conn->query($sql);
header("Location:../ListofTeachers.php");



?>


