<?php
include '../db.inc.php';
session_start();

$quizDesc = $_POST['quizDesc'];
$sy_course_subjId = $_GET['sy_course_subjId'];
$timeStart = $_POST['timeStart'];
$timeEnd = $_POST['timeEnd'];
$sql = "INSERT INTO tbl_quiz(quizDesc, sy_course_subjId,timestart,timeend) VALUES('$quizDesc',$sy_course_subjId,'$timeStart','$timeEnd')";
$result = $conn->query($sql);

$date = date('Y-m-d');
$time = date('H:i:s');

$newTimeStart = date('M j, Y g:i a', strtotime($timeStart));
$newTimeEnd = date('M j, Y g:i a', strtotime($timeEnd));
$notif = "Added new quiz.<br> Start : ".$newTimeStart." , End : ".$newTimeEnd;
echo $sql = "INSERT INTO tbl_notif(sy_course_subjId,notif,date,time) VALUES($sy_course_subjId,'$notif','$date','$time')";
$result = $conn->query($sql);
header("Location:quiz.php?sy_course_subjId=$sy_course_subjId");
?>