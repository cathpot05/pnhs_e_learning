<?php
include 'db.inc.php';
session_start();

$id = $_POST["id"];
//$firstname = $_POST["level"];
$middlename = $_POST["subname"];
//$lastname = $_POST["subtopic"];
//$gender = $_POST["week"];
$assteach = $_POST["assteach"];
//$yearlevel = $_POST["yearlevel"];
//$course = $_POST["course"];
//$privilege = $_POST["privilege"];
//$status = $_POST["status"];

$sql = "UPDATE tbl_subabm11 SET  level= '".$level."', "." subname= '".$subname."', ".
    " assteach = '".$assteach."' ".
 " where id = ".$id;
$result = $conn->query($sql);
header("Location:../subabm11.php");




?>
