<?php
/**
 * Created by PhpStorm.
 * User: PB7N0062
 * Date: 3/13/18
 * Time: 7:24 AM
 */

include '../../db.inc.php';
include "../../sessionLogout.php";

$sql = "INSERT INTO tbl_subjects (subjDesc, gradeId)
VALUES('".$_POST["subj_desc"]."','".$_POST["select_grade_add"]."')";
$result = $conn->query($sql);
header("Location:../subject.php");
$conn->close();
?>