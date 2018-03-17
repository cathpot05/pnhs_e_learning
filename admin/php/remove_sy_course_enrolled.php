<?php
include '../../db.inc.php';
include "../../sessionLogout.php";

$es_id = $_POST["deleteid"];
$sy_id = $_POST["deletesyid"];
$sy_id1 = $_GET["syId"];
$es_id1 = $_GET["id"];
$sy_course_id = $_POST["deletecourse_syid"];

if($sy_course_id!=null){
    $sql = "DELETE FROM tbl_enrolledstudents where es_Id = '".$_POST["deleteid"]."'";
    $result = $conn->query($sql);
    header("Location:../view_course_enrolled_students.php?sy_courseid=$sy_course_id&syId=$sy_id");
}else
{
    $sy_id = $_POST["syId"];
    $sql = "DELETE FROM tbl_enrolledstudents where es_Id = '".$_GET["id"]."'";
    $result = $conn->query($sql);
    header("Location:../view_students_peryear.php?id=$sy_id1");
}
//echo $sy_id;






?>
