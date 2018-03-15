<?php
/**
 * Created by PhpStorm.
 * User: PB7N0062
 * Date: 3/13/18
 * Time: 7:24 AM
 */

include '../../db.inc.php';
include "../../sessionLogout.php";

$sql = "INSERT INTO tbl_course (course_description)
VALUES('".$_POST["course"]."')";
$result = $conn->query($sql);
header("Location:../courses.php");
$conn->close();
?>