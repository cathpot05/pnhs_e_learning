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
//$password = md5($_POST["password"]);
$privilege = 2;
//$status = $_POST["status"];

if($_POST['password'] == ""){
$sql="UPDATE tbl_students SET
username='".$username."'
,frstname='".$firstname."'
,middlename='".$middlename."'
,lastname = '".$lastname."'
,address = '".$address."'
,mobileno='".$mno."'
,dateofbirth='".$dbirth."'
,age='".$age."'
,gender='".$gender."'
,emailadress = '".$emailaddress."'
,privilege ='".$privilege."' "."
WHERE studentId = '".$_POST["id"]."' ";
}else{
    $sql="UPDATE tbl_students SET
username='".$username."'
,frstname='".$firstname."'
,middlename='".$middlename."'
,lastname = '".$lastname."'
,address = '".$address."'
,mobileno='".$mno."'
,dateofbirth='".$dbirth."'
,age='".$age."'
,gender='".$gender."'
,emailadress = '".$emailaddress."'
,password ='".md5($_POST["password"])."'
,privilege ='".$privilege."' "."
WHERE studentId = '".$_POST["id"]."' ";

}
$result = $conn->query($sql);


$sql1="UPDATE tbl_studentinfo SET
courseId='".$_POST['courses']."'
,gradeId='".$_POST['grade']."'
WHERE studId = '".$_POST["id"]."' ";
$result1 = $conn->query($sql1);

header("Location:../ListofStudent.php");



?>


