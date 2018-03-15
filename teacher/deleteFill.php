<?php
include '../db.inc.php';
session_start();

$quizId= $_GET['quizId'];
$deleteid = $_POST['deleteid_fill'];
echo $sql = "DELETE FROM tbl_quiz_fill where questionId = $deleteid";
$result = $conn->query($sql);
header("Location:questions.php?quizId=$quizId");
?>