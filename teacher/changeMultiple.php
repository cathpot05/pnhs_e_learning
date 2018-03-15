<?php
include '../db.inc.php';
session_start();

$quizId = $_GET['quizId'];
$questionId = $_GET['questionId'];
$questionDesc = $_POST['questionDesc'];
$ans1 = $_POST['ans1'];
$ans2 = $_POST['ans2'];
$ans3 = $_POST['ans3'];
$ans4 = $_POST['ans4'];
$answer = $_POST['answer'];

if($answer == 1)
{
	$answer = $ans1;
}
else if($answer == 2)
{
	$answer = $ans2;
}
else if($answer == 3)
{
	$answer = $ans3;
}
else if($answer == 4)
{
	$answer = $ans4;
}

echo $sql = "UPDATE tbl_quiz_multiple SET question = '$questionDesc',ans1 = '$ans1', ans2 = '$ans2',ans3 = '$ans3',ans4 = '$ans4', correct_answer = $answer WHERE questionId = $questionId ";
$result = $conn->query($sql);
header("Location:questions.php?quizId=$quizId");
?>