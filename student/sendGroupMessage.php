<?php
include '../db.inc.php';
include "../sessionLogout.php";
$date = date('Y-m-d');
$time = date('H:i:s');
$g_Id = $_GET['g_Id'];
$message = $_POST['message'];
$sql = "INSERT INTO tbl_gmessages(g_Id, senderId, message, senderType,date,time) VALUES($g_Id,$id,'$message',0,'$date','$time')";
$result = $conn->query($sql);
header("Location:groupMessages.php?g_Id=$g_Id");
?>