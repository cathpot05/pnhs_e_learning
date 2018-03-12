<?php
include 'db.inc.php';
session_start();



$sql = "INSERT INTO tbl_subcss11(level,subname, assteach )VALUES('".$_POST["level"]."','".$_POST["subname"]."','".$_POST["assteach"]."')";
$result = $conn->query($sql);
$_SESSION["success"] = 1;
header("Location:../subcss11.php");
$conn->close();


?>
