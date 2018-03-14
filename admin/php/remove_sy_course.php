<?php
include '../../db.inc.php';
include "../../sessionLogout.php";

$sy_id = $_POST["deletesyid"];
//echo $sy_id;
$sql = "DELETE FROM tbl_sy_course where sy_courseId = '".$_POST["deleteid"]."'";
$result = $conn->query($sql);

header("Location:../view_schoolyear.php?id=$sy_id");

?>
