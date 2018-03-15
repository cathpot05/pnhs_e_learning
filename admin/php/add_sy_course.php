<?php
/**
 * Created by PhpStorm.
 * User: PB7N0062
 * Date: 3/13/18
 * Time: 7:24 AM
 */

include '../../db.inc.php';
include "../../sessionLogout.php";

$sy_id = $_POST["sy_id"];
if(!empty($_POST['checklist_course'])) {
    foreach($_POST['checklist_course'] as $check) {
        $sql = "INSERT INTO tbl_sy_course (syId, courseId)
        VALUES('".$_POST["sy_id"]."','".$check."')";
        $result = $conn->query($sql);
        //echo $conn->error();
    }
}


/*$sql = "INSERT INTO tbl_sy_course (syId, courseId)
VALUES('".$_POST["subj_desc"]."','".$_POST["select_grade_add"]."')";
$result = $conn->query($sql);*/
//sy_id
//courseId
//checklist_course[]

header("Location:../view_schoolyear.php?id=$sy_id");
$conn->close();
?>