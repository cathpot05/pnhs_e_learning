<?php
include '../db.inc.php';
session_start();

$quizId = $_GET['quizId'];
$questionDesc = $_POST['questionDesc'];
$answer = $_POST['answer'];

echo $sql = "INSERT INTO tbl_quiz_fill(quizId, question,correct_answer) VALUES($quizId ,'$questionDesc','$answer')";
$result = $conn->query($sql);
header("Location:questions.php?quizId=$quizId");
?>