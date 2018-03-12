<?php
include '../../db.inc.php';

include "../../sessionLogout.php";

//echo $_SESSION["id"];



$username = $_POST["username"];
$firstname = $_POST["firstname"];
$middlename = $_POST["middlename"];
$lastname = $_POST["lastname"];
$address = $_POST["address"];
$mno = $_POST["mno"];
$dbirth = $_POST["dbirth"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$emailaddress = $_POST["emailaddress"];

$privilege = 1;
//$status = $_POST["status"];

if($_POST['password'] == ""){
    $sql="UPDATE tbl_teachers SET
username= '".$username."'
,firstname= '".$firstname."'
,middlename= '".$middlename."'
,lastname = '".$lastname."'
,address =  '".$address."'
,mobileno= '".$mno."'
,dateofbirth= '".$dbirth."'
,age= '".$age."'
,gender='".$gender."'
,emailaddress = '".$emailaddress."'
,privilege ='1'
WHERE teacherid = '".$_POST["id"]."' ";
}
else{

    $sql="UPDATE tbl_teachers SET
username= '".$username."'
,firstname= '".$firstname."'
,middlename= '".$middlename."'
,lastname = '".$lastname."'
,address =  '".$address."'
,mobileno= '".$mno."'
,dateofbirth= '".$dbirth."'
,age= '".$age."'
,gender='".$gender."'
,emailaddress = '".$emailaddress."'
,password ='".md5($_POST["password"])."'
,privilege ='1'
WHERE teacherid = '".$_POST["id"]."' ";
}

$result = $conn->query($sql);



//echo $password
header("Location:../ListofTeachers.php");



?>


