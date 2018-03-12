<?php
include '../db.inc.php';
session_start();

$courseid= $_GET['courseid'];
$teacherid = $_GET['teacherid'];
$message = $_POST['message'];
$sql = "INSERT INTO tbl_gmessage(courseid, senderid, message, sendertype) VALUES($courseid,$teacherid,'$message',0)";
$result = $conn->query($sql);
header("Location:groupMessages.php?courseid=$courseid");
?>