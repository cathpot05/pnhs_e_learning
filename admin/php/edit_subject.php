<?php
/**
 * Created by PhpStorm.
 * User: PB7N0062
 * Date: 3/13/18
 * Time: 7:24 AM
 */

include '../../db.inc.php';
include "../../sessionLogout.php";

$sql = "UPDATE tbl_subjects
SET subjDesc = '".$_POST['edit_subj_desc']."'
, gradeId ='".$_POST['select_grade_edit']."'
WHERE subjectId = '".$_POST['edit_subj_id']."' ";
$result = $conn->query($sql);
//echo $conn->$error;
header("Location:../subject.php");
$conn->close();
?>