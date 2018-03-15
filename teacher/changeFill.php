<?php
include '../db.inc.php';
session_start();

$quizId = $_GET['quizId'];
$questionId = $_GET['questionId'];
$questionDesc = $_POST['questionDesc'];
$answer = $_POST['answer'];

echo $sql = "UPDATE tbl_quiz_fill SET question='$questionDesc', correct_answer = '$answer' WHERE questionId = $questionId ";
$result = $conn->query($sql);
header("Location:questions.php?quizId=$quizId");
?>
