<?php
include '../db.inc.php';
session_start();

$deleteid= $_POST['deleteid'];
$sy_course_subjId = $_GET['sy_course_subjId'];

$sql = "DELETE FROM tbl_quiz where quizId = $deleteid";
$result = $conn->query($sql);

header("Location:quiz.php?sy_course_subjId=$sy_course_subjId");
?>