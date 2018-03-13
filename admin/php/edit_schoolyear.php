<?php
/**
 * Created by PhpStorm.
 * User: PB7N0062
 * Date: 3/13/18
 * Time: 7:24 AM
 */

include '../../db.inc.php';
include "../../sessionLogout.php";

$sql = "UPDATE tbl_sy
SET SY_From = '".$_POST['edit_sy_from']."'
, SY_To ='".$_POST['edit_sy_to']."'
WHERE syId = '".$_POST['edit_sy_id']."' ";
$result = $conn->query($sql);
//echo $conn->$error;
header("Location:../schoolyear.php");
$conn->close();
?>