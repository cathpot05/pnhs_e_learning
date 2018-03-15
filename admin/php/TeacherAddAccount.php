<?php
include '../../db.inc.php';
include "../../sessionLogout.php";

$sql = "INSERT INTO tbl_teachers (username, firstname, middlename, lastname, address, mobileno, birthdate, age, gender, emailaddress, password, privilege)
VALUES('".$_POST["username"]."','".$_POST["firstname"]."','".$_POST["middlename"]."','".$_POST["lastname"]."','".$_POST["address"]."','".$_POST["mno"]."','".$_POST["dbirth"]."','".$_POST["age"]."','".$_POST["gender"]."', '".$_POST["emailaddress"]."', '".md5($_POST["password"])."','1')";
$result = $conn->query($sql);
header("Location:../ListofTeachers.php");
$conn->close();

?>
