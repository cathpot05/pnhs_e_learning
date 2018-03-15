<?php
include '../db.inc.php';
include "../sessionLogout.php";
$date = date('Y-m-d');
$time = date('H:i:s');
$studId= $_GET['studId'];
$message = $_POST['message'];
echo $sql = "Insert into tbl_pmessage(studentId, teacherId, message, senderType,date,time) VALUES($studId,$id,'$message',1,'$date','$time')";
$result = $conn->query($sql);
header("Location:messages.php?studId=$studId");
?>