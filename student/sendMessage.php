<?php
include '../db.inc.php';
session_start();

$studentid= $_GET['studentid'];
$teacherid = $_GET['teacherid'];
$message = $_POST['message'];
$sql = "insert into tbl_pmessage(studentId, teacherId, message, sendertype) VALUES($studentid,$teacherid,'$message',0)";
$result = $conn->query($sql);
header("Location:messages.php?teacherid=$teacherid");
?>