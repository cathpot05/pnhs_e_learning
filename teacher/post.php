<?php
include '../db.inc.php';
include "../sessionLogout.php";
$date = date('Y-m-d');
$time = date('H:i:s');
$g_Id= $_GET['g_Id'];
$message = $_POST['message'];
echo $sql = "Insert into tbl_gposts(g_Id,senderId,senderType,post, date, time) VALUES($g_Id,$id,1,'$message','$date','$time')";
$result = $conn->query($sql);
header("Location:group.php?g_Id=$g_Id");
?>