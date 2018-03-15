<?php
include '../db.inc.php';
include "../sessionLogout.php";
$quizId = $_GET['quizId'];
$multipleScore = 0;
$fillScore = 0;
$multipleCounter = 0;
$fillCounter = 0;

$sql = "SELECT *FROM tbl_quiz_multiple where quizId = $quizId";
$result = $conn->query($sql);

while($row = $result->fetch_assoc())
{
	$multipleId = $row['questionId'];
	if($row['correct_answer'] == $_POST['multiple'.$multipleId])
	{
		$multipleScore++;
	}
	$multipleCounter++;
}

$sql = "SELECT *FROM tbl_quiz_fill where quizId = $quizId";
$result = $conn->query($sql);

while($row = $result->fetch_assoc())
{
	$multipleId = $row['questionId'];
	if($row['correct_answer'] == $_POST['fill'.$multipleId])
	{
		$fillScore++;
	}
	$fillCounter++;
}

echo $sql = "SELECT es_Id FROM tbl_quiz A
INNER JOIN tbl_sy_course_subj B ON A.sy_course_subjId = B.sy_course_subjId
INNER JOIN tbl_sy_course C ON B.sy_courseId = C.sy_courseId
INNER JOIN tbl_enrolledstudents D ON D.sy_courseId = C.sy_courseId
WHERE D.studId = $id and A.quizId = $quizId";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
$es_Id = $row['es_Id'];
$totalScore = $multipleScore + $fillScore;

$sql = "INSERT INTO tbl_score(quizId,es_Id,score) VALUES($quizId,$es_Id,$totalScore)";
$result = $conn->query($sql);

echo "<script>alert('Quiz submitted!'); history.go(-2);</script>";
//header("Location:scoredisplay.php?quizId=$quizId");
?>