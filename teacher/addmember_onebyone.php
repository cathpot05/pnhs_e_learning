<?php
/**
 * Created by PhpStorm.
 * User: Ms.Cath
 * Date: 3/15/18
 * Time: 08:30 PM
 */

include '../db.inc.php';
include "../sessionLogout.php";

$teacherId = $_POST['teacherId'];
$groupId = $_POST['groupId'];
$studentId = $_POST['select_student'];


 $sql_insertMember = "INSERT INTO tbl_gmembers (g_Id, studentId)
VALUES('".$groupId."','".$studentId."')";
$result_insertMember = $conn->query($sql_insertMember);

//
header("Location:group.php?g_Id=$groupId");
$conn->close();
?>