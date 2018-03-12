<?php
include '../db.inc.php';
session_start();

$quizid = $_GET['quizid'];
$questionDesc = $_POST['questionDesc'];
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];
$answer = $_POST['answer'];
if($answer == "a")
{
	$answer = $a;
}
else if($answer == "b")
{
	$answer = $b;
}
else if($answer == "c")
{
	$answer = $c;
}
else if($answer == "d")
{
	$answer = $d;
}

echo $sql = "INSERT INTO tbl_question_multiple(quizId, questionDesc, a,b,c,d,answ) VALUES($quizid ,'$questionDesc','$a','$b','$c','$d','$answer')";
$result = $conn->query($sql);
header("Location:questions.php?quizid=$quizid");
?>