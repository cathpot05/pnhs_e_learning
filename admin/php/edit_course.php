<?php
/**
 * Created by PhpStorm.
 * User: PB7N0062
 * Date: 3/13/18
 * Time: 7:24 AM
 */

include '../../db.inc.php';
include "../../sessionLogout.php";

$sql = "UPDATE tbl_course
SET course_description = '".$_POST['edit_course_desc']."'
WHERE courseId = '".$_POST['edit_course_id']."' ";
$result = $conn->query($sql);
//echo $conn->$error;
header("Location:../courses.php");
$conn->close();
?>