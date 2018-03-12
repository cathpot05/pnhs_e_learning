<?php
include 'db.inc.php';
$filename = explode("/",$_SERVER['PHP_SELF']);
$curr_dir = "/".$filename[1]."/";
session_start();

$sql = "DELETE FROM ".$_GET["table"]." where id = '".$_GET["id"]."'";
$result = $conn->query($sql);

if($_GET["table"] == "tbl_subabm11")
{
 header("Location:../subabm11.php");
}
else if($_GET["table"] == "tbl_subabm12")
{
 header("Location:../subabm12.php");
}
else if($_GET["table"] == "tbl_subauto11")
{
 header("Location:../subauto11.php");
}
else if($_GET["table"] == "tbl_subauto12")
{
 header("Location:../subauto12.php");
}
else if($_GET["table"] == "tbl_subsmaw11")
{
 header("Location:../subsmaw11.php");
}
else if($_GET["table"] == "tbl_subsmaw11")
{
 header("Location:../subsmaw11.php");
}
else if($_GET["table"] == "tbl_subcss11")
{
 header("Location:../subcss11.php");
}
    else if($_GET["table"] == "tbl_subcss12")
    {
        header("Location:../subcss12.php");
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
