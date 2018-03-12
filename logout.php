<?php
session_start();
session_unset("id");
header('Location: login.php');

?>