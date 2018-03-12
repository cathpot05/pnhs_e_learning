<?php
include '../../db.inc.php';

include "../../sessionLogout.php";

$sql = "INSERT INTO tbl_teacherinfo (teacher_id,courseid,subjectid )
VALUES('".$_POST["teacherid"]."', '".$_POST["courses"]."', '".$_POST["subject"]."')";
$result = $conn->query($sql);
echo $result;
$id = $_POST['teacherid'];
//echo $id;
header("Location:../viewteacher_subject.php?id=$id");
$conn->close();

?>
