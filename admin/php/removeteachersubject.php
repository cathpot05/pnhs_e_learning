<?php
include '../../db.inc.php';
include "../../sessionLogout.php";
$filename = explode("/",$_SERVER['PHP_SELF']);


$sql = "DELETE FROM tbl_teacherinfo where teacherinfo_id = '".$_GET["infoid"]."'";
$result = $conn->query($sql);
$id = $_GET['id'];
header("Location:../viewteacher_subject.php?id=$id");

?>
