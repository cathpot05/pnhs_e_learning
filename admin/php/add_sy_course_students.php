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
$sy_course_id = $_POST["sy_course_id"];
$checker = $_POST["checker"];
$sy_copy = $_POST["sy_copy"];

if($checker){

    if(!empty($_POST['checklist_course'])) {
        foreach($_POST['checklist_course'] as $check) {
            $sql_2 = "SELECT *
            FROM tbl_enrolledstudents A
            WHERE A.sy_courseid = $sy_course_id AND A.studId = $check";
            $result_2 = $conn->query($sql_2);
            if($result_2->num_rows > 0) {
            }else{
                $sql = "INSERT INTO tbl_enrolledstudents (studId, sy_courseId, gradeId)
                VALUES('".$check."','".$sy_course_id."','".$_POST['select_grade']."')";
                //SELECT '$check', '$sy_course_id', teacherId FROM tbl_sy_course_subj WHERE sy_courseid = $sy_copy AND subjectId = $check";
                $result = $conn->query($sql);
            }
        }
    }

}
else{
    //echo 'no loop';
    $sql = "INSERT INTO tbl_enrolledstudents (studId, sy_courseId, gradeId)
    VALUES('".$_POST['select_student']."','".$sy_course_id."','".$_POST['select_grade']."')";
    $result = $conn->query($sql);
}

header("Location:../view_course_enrolled_students.php?sy_courseid=$sy_course_id&syId=$sy_id");
$conn->close();
?>