<?php
include '../db.inc.php';
session_start();

$quizId= $_GET['quizId'];
$deleteid = $_POST['deleteid_multiple'];
echo $sql = "DELETE FROM tbl_quiz_multiple where questionId = $deleteid";
$result = $conn->query($sql);
header("Location:questions.php?quizId=$quizId");
?>