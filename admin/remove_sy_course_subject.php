<?php
include '../../db.inc.php';
include "../../sessionLogout.php";


$deleteid = $_POST["deleteid"];
$sy_course_id = $_POST["delete_syIdCourse"];
$sy_id = $_POST["delete_syId"];

$sql = "DELETE FROM tbl_sy_course_subj  where sy_course_subjId = '".$_POST["deleteid"]."'";
//$sql = "DELETE FROM tbl_enrolledstudents  where es_Id = '".$_POST["deleteid"]."'";
$result = $conn->query($sql);

header("Location:../view_course_subjects.php?sy_courseid=$sy_course_id&syId=$sy_id");

?>
