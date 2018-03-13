<?php
include '../../db.inc.php';
include "../../sessionLogout.php";
$filename = explode("/",$_SERVER['PHP_SELF']);
$curr_dir = "/".$filename[1]."/";

$sql = "DELETE FROM tbl_students where studId = '".$_GET["id"]."'";
$result = $conn->query($sql);
header("Location:../ListofStudent.php");

?>
