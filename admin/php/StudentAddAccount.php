<?php
include '../../db.inc.php';

include "../../sessionLogout.php";

$studid = 0;
$sql = "INSERT INTO tbl_students (username, frstname, middlename, lastname, address, mobileno, dateofbirth, age, gender, emailadress, password, privilege, status)
VALUES('".$_POST["username"]."','".$_POST["firstname"]."','".$_POST["middlename"]."','".$_POST["lastname"]."','".$_POST["address"]."','".$_POST["mno"]."','".$_POST["dbirth"]."','".$_POST["age"]."','".$_POST["gender"]."', '".$_POST["emailaddress"]."', '".md5($_POST["password"])."','2', 0)";
$result = $conn->query($sql);
echo $conn->error;

$sql2 = "SELECT * FROM tbl_students ORDER BY studentId DESC LIMIT 1";
$result2 = $conn->query($sql2);
while($row2 = $result2->fetch_assoc()){
    $studid = $row2['studentId'];
}



$sql3 = "INSERT INTO tbl_studentinfo (studId, courseId, gradeId)
VALUES('".$studid."','".$_POST["courses"]."','".$_POST["grade"]."')";
$result3 = $conn->query($sql3);

header("Location:../ListofStudent.php");
$conn->close();

?>
