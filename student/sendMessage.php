<?php
include '../db.inc.php';
include "../sessionLogout.php";

$date = date('Y-m-d');
$time = date('H:i:s');
$teacherId= $_GET['teacherId'];
$message = $_POST['message'];
echo $sql = "Insert into tbl_pmessage(studentId, teacherId, message, senderType,date,time) VALUES($id,$teacherId,'$message',0,'$date','$time')";
$result = $conn->query($sql);
header("Location:messages.php?teacherId=$teacherId");
?>