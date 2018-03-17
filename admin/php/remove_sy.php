<?php
include '../../db.inc.php';
include "../../sessionLogout.php";

$sy_id = $_POST["deletesyid"];
//echo $sy_id;
$sql = "DELETE FROM tbl_sy where syId = '".$_GET["id"]."'";
$result = $conn->query($sql);

header("Location:../schoolyear.php?id=$sy_id");

?>
