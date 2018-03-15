<?php
/**
 * Created by PhpStorm.
 * User: PB7N0062
 * Date: 3/13/18
 * Time: 7:24 AM
 */

include '../db.inc.php';
include "../sessionLogout.php";

$sql = "INSERT INTO tbl_sy (SY_From, SY_To)
VALUES('".$_POST["sy_from"]."','".$_POST["sy_to"]."')";
$result = $conn->query($sql);
header("Location:schoolyear.php");
$conn->close();
?>