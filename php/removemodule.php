<?php
include 'db.inc.php';
$filename = explode("/",$_SERVER['PHP_SELF']);
$curr_dir = "/".$filename[1]."/";
session_start();

$sql = "DELETE FROM ".$_GET["table"]." where id = '".$_GET["id"]."'";
$result = $conn->query($sql);

if($_GET["table"] == "tbl_abm11")
{
 header("Location:../ABM11.php");
}
else if($_GET["table"] == "tbl_abm12")
{
 header("Location:../ABM12.php");
}
else if($_GET["table"] == "tbl_auto11")
{
 header("Location:../automotive11.php");
}
else if($_GET["table"] == "tbl_auto12")
{
 header("Location:../automotive12.php");
}
else if($_GET["table"] == "tbl_ssmaw11")
{
 header("Location:../smaw11.php");
}
else if($_GET["table"] == "tbl_smaw11")
{
 header("Location:../smaw12.php");
}
else if($_GET["table"] == "tbl_css11")
{
 header("Location:../css11.php");
}
    else if($_GET["table"] == "tbl_css12")
    {
        header("Location:../css12.php");
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
