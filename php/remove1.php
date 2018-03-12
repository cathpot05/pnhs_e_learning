<?php
include 'db.inc.php';
$filename = explode("/",$_SERVER['PHP_SELF']);
$curr_dir = "/".$filename[1]."/";
session_start();

$sql = "DELETE FROM ".$_GET["table"]." where id = '".$_GET["id"]."'";
$result = $conn->query($sql);

if($_GET["table"] == "tbl_studaccounts"){
 header("Location:../ListofStudent.php");
}else if($_GET["table"] == "tbl_teachaccounts"){
 header("Location:../ListofTeachers.php");
}else if($_GET["table"] == "tbl_course"){
 header("Location:../showsections.php");
}else if($_GET["table"] == "tbl_privilege"){
 header("Location:../showsubjects.php");
}else if($_GET["table"] == "tbl_quiz"){
 header("Location:../showquizzes.php");
}else if($_GET["table"] == "tbl_messages"){
 header("Location:../inbox.php");
}else if($_GET["table"] == "tbl_lessons"){
 header("Location:../showlessons.php");
}else if($_GET["table"] == "tbl_questions"){
 header("Location:../showquestions.php");
}else{
 header("Location:../ListofTeachers.php");
}


?>
