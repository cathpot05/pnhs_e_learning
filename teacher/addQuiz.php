<?php
include '../db.inc.php';
session_start();

$quizDesc = $_POST['quizDesc'];
$teacherinfoid = $_GET['teacherinfoid'];
$timeStart = $_POST['timeStart'];
$timeEnd = $_POST['timeEnd'];

echo $sql = "INSERT INTO tbl_quiz(quizDesc, teacherinfo_id,timeStart,timeEnd) VALUES('$quizDesc',$teacherinfoid,'$timeStart','$timeEnd')";
$result = $conn->query($sql);
header("Location:quiz.php?teacherinfoid=$teacherinfoid");
?>