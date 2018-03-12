<?php
include 'db.inc.php';
session_start();

$sql = "SELECT * from tbl_studaccounts where username = '".$_POST["username"]."' and password = '".$_POST["password"]."'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
	$_SESSION["user"] = $row["username"];
    $_SESSION["mid"] = $row["middlename"];
    $_SESSION["last"] = $row["lastname"];
    
    $_SESSION["level"] = $row["year"];
    
	$_SESSION["privilege"] = $row["privilege"];

	header("Location:../index1.php");

} else {
	$_SESSION["invalid"] = 1;
		header("Location:../login.php");
}


$conn->close();
?>
