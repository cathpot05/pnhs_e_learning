<?php
include '../../db.inc.php';
include "../../sessionLogout.php";


$deleteid = $_POST["deleteid"];

$sql = "DELETE FROM tbl_enrolledstudents  where es_Id = '".$_POST["deleteid"]."'";
$result = $conn->query($sql);

header("Location:../view_course_enrolled_students.php?sy_courseid=$sy_course_id&syId=$sy_id");

?>
