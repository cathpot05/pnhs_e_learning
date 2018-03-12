<?php
include '../db.inc.php';
session_start();

$deleteid= $_POST['deleteid'];
$teacherinfoid = $_GET['teacherinfoid'];
$sql = "DELETE FROM tbl_files where id = $deleteid";
$result = $conn->query($sql);
header("Location:showModules.php?teacherinfo_id=$teacherinfoid");
?>