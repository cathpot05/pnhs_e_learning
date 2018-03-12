<?php
include 'db.inc.php';
$filename = explode("/",$_SERVER['PHP_SELF']);
$curr_dir = "/".$filename[1]."/";
session_start();

$sql = "DELETE FROM ".$_GET["table"]." where id = '".$_GET["id"]."'";
$result = $conn->query($sql);

if($_GET["table"] == "tbl_studaccounts")
{
 header("Location:../index1.php");
}
else if($_GET["table"] == "tbl_teachaccounts")
{
 header("Location:../ListofTeachers.php");
}
else if($_GET["table"] == "tbl_abm11")
{
 header("Location:../ABM11.php");
}
else if($_GET["table"] == "tbl_privilege")
{
 header("Location:../showsubjects.php");
}
else if($_GET["table"] == "tbl_quiz")
{
 header("Location:../showquizzes.php");
}
else if($_GET["table"] == "tbl_messages")
{
 header("Location:../inbox.php");
}
else if($_GET["table"] == "tbl_abm11")
{
 header("Location:../ABM11.php");
}
else if($_GET["table"] == "tbl_questions")
{
 header("Location:../showquestions.php");
}
else if($_GET["table"] == "tbl_studaccounts")
{
 header("Location:../ListofTeachers.php");
}

else
    
{
 header("Location:../index1.php");
}


?>
