<?php
include '../db.inc.php';
session_start();

$quizId = $_GET['quizId'];
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

echo $sql = "INSERT INTO tbl_quiz_multiple(quizId, question,ans1,ans2,ans3,ans4,correct_answer) VALUES($quizId ,'$questionDesc','$ans1','$ans2','$ans3','$ans4','$answer')";
$result = $conn->query($sql);
header("Location:questions.php?quizId=$quizId");
?>