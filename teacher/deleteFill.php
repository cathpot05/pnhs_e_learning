<?php
include '../db.inc.php';
session_start();

$quizid= $_GET['quizid'];
$deleteid = $_GET['deleteid'];
$sql = "DELETE FROM tbl_question_fill where id = $deleteid";
$result = $conn->query($sql);
header("Location:questions.php?quizid=$quizid");
?>