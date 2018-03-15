<?php
include '../db.inc.php';
include "../sessionLogout.php";

$oldpassword = md5($_POST['oldpassword']);
$newpassword  = md5($_POST['newpassword']);
$newpassword2 = md5($_POST['newpassword2']);

$sql = "SELECT *From tbl_teachers where teacherId = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if($row['password'] != $oldpassword)
{
	echo "<script>alert('Incorrect old password!'); window.location.href = 'changePasswordForm.php'</script>";
	
}
else
{
if($newpassword != $newpassword2)
{
	echo "<script>alert('New password not matched!'); window.location.href = 'changePasswordForm.php'</script>";
	
}
else
{
$sql = "UPDATE tbl_teachers SET password='$newpassword' WHERE teacherId = $id ";
$result = $conn->query($sql);
echo "<script>alert('Success!'); window.location.href = 'changePasswordForm.php'</script>";
}
}
?>