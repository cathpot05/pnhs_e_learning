<?php
include '../../db.inc.php';
include "../../sessionLogout.php";
$filename = explode("/",$_SERVER['PHP_SELF']);
$curr_dir = "/".$filename[1]."/";

$sql = "DELETE FROM tbl_teachers where teacherId = '".$_GET["id"]."'";
$result = $conn->query($sql);
header("Location:../ListofTeachers.php");

?>
