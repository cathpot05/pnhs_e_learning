<?php
include '../db.inc.php';
session_start();

$quizDesc = $_POST['quizDesc'];
$sy_course_subjId = $_GET['sy_course_subjId'];
$timeStart = $_POST['timeStart'];
$timeEnd = $_POST['timeEnd'];
$sql = "INSERT INTO tbl_quiz(quizDesc, sy_course_subjId,timestart,timeend) VALUES('$quizDesc',$sy_course_subjId,'$timeStart','$timeEnd')";
$result = $conn->query($sql);
header("Location:quiz.php?sy_course_subjId=$sy_course_subjId");
?>