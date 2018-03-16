<?php
include '../db.inc.php';
session_start();

$sy_course_subjId = $_GET['sy_course_subjId'];
$sy_courseId = $_GET['sy_courseId'];
$timeStart = $_POST['timeStart'];
$timeEnd = $_POST['timeEnd'];

$sql = "INSERT INTO tbl_stream(sy_course_subjId) VALUES($sy_course_subjId)";
$result = $conn->query($sql);

$date = date('Y-m-d');
$time = date('H:i:s');
$notif = "Video streaming started";
echo $sql = "INSERT INTO tbl_notif(sy_course_subjId,notif,date,time) VALUES($sy_course_subjId,'$notif','$date','$time')";
$result = $conn->query($sql);
header("Location:courseSubjects.php?sy_courseId=$sy_courseId");

/*$sql = "SELECT *FROM tbl_stream ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{	
	while($row = $result->fetch_assoc())
	{
		$id = $row['id'];
		header("Location:videostream.php?id=$Id");
	}
}
*/


?>