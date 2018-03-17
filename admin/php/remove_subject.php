<?php
include '../../db.inc.php';
include "../../sessionLogout.php";
$filename = explode("/",$_SERVER['PHP_SELF']);
$curr_dir = "/".$filename[1]."/";

$sql = "DELETE FROM tbl_subjects where subjectId = '".$_GET["id"]."'";
$result = $conn->query($sql);
header("Location:../subject.php");

?>
