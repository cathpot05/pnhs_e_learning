<?php
/**
 * Created by PhpStorm.
 * User: Ms.Cath
 * Date: 3/15/18
 * Time: 08:30 PM
 */

include '../db.inc.php';
include "../sessionLogout.php";

$groupname =  $_POST['groupname'];
$teacher_id = $_POST['teacherid_'];
    if(!empty($_POST['checklist_course'])) {
         $sql = "INSERT INTO tbl_group (teacherId, group_title)
                VALUES('".$teacher_id."','".$groupname."')";
        $result = $conn->query($sql);
         $sql_getId = "SELECT g_Id FROM tbl_group ORDER BY g_Id DESC LIMIT 1";
        $result_getId = $conn->query($sql_getId);
        while($row = $result_getId->fetch_assoc()){
            foreach($_POST['checklist_course'] as $check) {
                 $checkData = "SELECT * FROM tbl_gmembers WHERE g_Id = '".$row['g_Id']."' AND studentId = '".$check."' ";
                $result_check = $conn->query($checkData);
                if ($result_check->num_rows > 0){
                }
                else{
                  $sql_insertMember = "INSERT INTO tbl_gmembers (g_Id, studentId)
                VALUES('".$row['g_Id']."','".$check."')";
                    $result_insertMember = $conn->query($sql_insertMember);
                }
            }
        }
    }
//
header("Location:index.php");
$conn->close();
?>