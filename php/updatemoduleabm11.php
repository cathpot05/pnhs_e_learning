<?php
include 'db.inc.php';
session_start();

$id = $_POST["id"];
//$firstname = $_POST["level"];
$middlename = $_POST["subname"];
$lastname = $_POST["subtopic"];
$gender = $_POST["week"];
$emailaddress = $_POST["assquarter"];
//$yearlevel = $_POST["yearlevel"];
//$course = $_POST["course"];
//$privilege = $_POST["privilege"];
//$status = $_POST["status"];

$sql = "UPDATE tbl_quiz SET subname = '".$subname."', ".
	" subtopic = '".$subtopic."', week = '".$week."', ".
	" assquarter = '".$asquarter."' ".
 " where id = ".$id;
$result = $conn->query($sql);
header("Location:../ABM11.php");

?>
