<?php
include 'db.inc.php';
$filename = explode("/",$_SERVER['PHP_SELF']);
$curr_dir = "/".$filename[1]."/";
session_start();

$sql = "DELETE FROM ".$_GET["table"]." where id = '".$_GET["id"]."'";
$result = $conn->query($sql);

if($_GET["table"] == "tbl_studaccounts")
{
 header("Location:../ListofAbm11.php");
}
else if($_GET["table"] == "tbl_studaccounts")
{
 header("Location:../ListofAbm12.php");
}
else if($_GET["table"] == "tbl_studaccounts")
{
 header("Location:../ListofAuto11.php");
}
else if($_GET["table"] == "tbl_studaccounts")
{
 header("Location:../ListofAuto12.php");
}
else if($_GET["table"] == "tbl_studaccounts")
{
 header("Location:../ListofCss12.php");
}
else if($_GET["table"] == "tbl_studaccounts")
{
 header("Location:../ListofCss11.php");
}
else if($_GET["table"] == "tbl_studaccounts")
{
 header("Location:../ListofSmaw12.php");
}
    else if($_GET["table"] == "tbl_studaccounts")
    {
        header("Location:../ListofSmaw12.php");
    }

else if($_GET["table"] == "tbl_questions")
{
 header("Location:../showquestions.php");
}
else if($_GET["table"] == "tbl_studaccounts")
{
// header("Location:../ListofTeachers.php");
}

else
    
{
 header("Location:../index1.php");
}


?>
