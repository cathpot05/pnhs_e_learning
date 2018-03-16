<?php
include '../db.inc.php';
session_start();

$id= $_GET['id'];

echo $sql = "DELETE FROM tbl_stream where id = $id";
$result = $conn->query($sql);
header("Location:index.php");
?>