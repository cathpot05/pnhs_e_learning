<?php
include '../db.inc.php';
session_start();

$quizid = $_GET['quizid'];
$questionDesc = $_POST['questionDesc'];
$answer = $_POST['answer'];

echo $sql = "INSERT INTO tbl_question_fill(quizId, questionDesc,answ) VALUES($quizid ,'$questionDesc','$answer')";
$result = $conn->query($sql);
header("Location:questions.php?quizid=$quizid");
?>