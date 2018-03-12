<?php
include '../../db.inc.php';
include "../../sessionLogout.php";
$filename = explode("/",$_SERVER['PHP_SELF']);
$curr_dir = "/".$filename[1]."/";

$sql = "DELETE FROM tbl_students where studentId = '".$_GET["id"]."'";
$result = $conn->query($sql);
header("Location:../ListofStudent.php");


$sql1 = "DELETE FROM tbl_studentinfo where student = '".$_GET["id"]."'";
$result = $conn->query($sql1);
header("Location:../ListofStudent.php");

?>
