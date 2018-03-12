<?php
include 'db.inc.php';
session_start();

$sql = "INSERT INTO tbl_accounts1 (username, password, privilege) VALUES ('".$_POST["username"]."','".$_POST["password"]."',
 '".$_POST["privilege"]."')";
$result = $conn->query($sql);
$_SESSION["success"] = 1;
header("Location:../addaccount2.php");
$conn->close();


?>
