<?php
include 'db.inc.php';
session_start();
//if (empty($subname) && empty($subtopic) && empty($week)&& empty($assquarter))
    
//{
 //   echo "<script alert(' Please fill up the required information.'); window.location= 'updatemodulesmaw11.php'></script>";
    
   //die();
//}
//else
///{/
    $id = $_POST["id"];
//$firstname = $_POST["level"];
$middlename = $_POST["subname"];
$lastname = $_POST["subtopic"];
$gender = $_POST["week"];
$emailaddress = $_POST["assquarter"];
//$yearlevel = $_POST["yearlevel"];
//$course = $_POST["course"];
//$privilege = $_POST["privilege"];
//$status = $_POST["status"];

$sql = "UPDATE tbl_smaw11 SET  subname= '".$subname."', ".
    " subtopic = '".$subtopic."', week = '".$week."', ".
	" assquarter = '".$assquarter."'".
 " where id = ".$id;
$result = $conn->query($sql);
header("Location:../smaw11.php");
    
/////}//


?>
