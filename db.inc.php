<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "db_streamfinal";

	date_default_timezone_set("Asia/Manila");
	$info = getdate();
	$date = $info['mday'];
	$month = $info['mon'];
	$year = $info['year'];
	$hour = $info['hours'];
	$min = $info['minutes'];
	$sec = $info['seconds'];
	$current_date = "$month/$date/$year : $hour:$min";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
