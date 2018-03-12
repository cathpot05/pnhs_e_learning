<?php
include 'db.inc.php';
session_start();

$id = $_POST["id"];
$firstname = $_POST["firstname"];
$middlename = $_POST["middlename"];
$lastname = $_POST["lastname"];
$gender = $_POST["gender"];
$emailaddress = $_POST["emailaddress"];
$yearlevel = $_POST["yearlevel"];
$course = $_POST["course"];
$privilege = $_POST["privilege"];
//$status = $_POST["status"];

$sql = "UPDATE tbl_studaccounts SET firstname = '".$firstname."', ".
	" middlename = '".$middlename."', lastname = '".$lastname."', ".
	" gender = '".$gender."', emailaddress = '".$emailaddress."', ".
	" yearlevel = '".$yearlevel."', course = '".$course."', ".
	" privilege = '".$privilege."'".
 " where id = ".$id;
$result = $conn->query($sql);
header("Location:../ListofStudent.php");

?>
