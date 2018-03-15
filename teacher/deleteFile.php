<?php
include '../db.inc.php';
session_start();

$deleteid= $_POST['deleteid'];
$sy_course_subjId = $_GET['sy_course_subjId'];

$sql = "SELECT *FROM tbl_files where fileId = $deleteid";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
	$row = $result->fetch_assoc();
unlink($row['directory']);

$sql = "DELETE FROM tbl_files where fileId = $deleteid";
$result = $conn->query($sql);
}
header("Location:showModules.php?sy_course_subjId=$sy_course_subjId");
?>