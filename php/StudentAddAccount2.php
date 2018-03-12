<?php
include 'db.inc.php';
session_start();



$sql = "INSERT INTO tbl_studaccounts(idno, username, firstname,middlename,lastname, address, mno, dbirth, age,gender,fname,mname,emailaddress, yearlevel,course,password,privilege)VALUES('".$_POST["idno"]."','".$_POST["username"]."','".$_POST["firstname"]."','".$_POST["middlename"]."','".$_POST["lastname"]."','".$_POST["address"]."','".$_POST["mno"]."','".$_POST["dbirth"]."','".$_POST["age"]."','".$_POST["gender"]."','".$_POST["fname"]."','".$_POST["mname"]."','".$_POST["emailaddress"]."','".$_POST["yearlevel"]."','".$_POST["course"]."','".$_POST["password"]."','".$_POST["privilege"]."')";
$result = $conn->query($sql);
$_SESSION["success"] = 1;
header("Location:../ListofStudent.php");
$conn->close();


?>
