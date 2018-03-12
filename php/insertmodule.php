<?php
 $tempFileName = $_FILES["subtopic"]["tmp_name"];
    $subtopic = $_FILES["subtopic"]["tmp_name"];
	$fileExistsFlag = 0; 
	$fileName = $_FILES['subtopic']['tmp_name'];
	$link = mysqli_connect("localhost","root","","db_stream") or die("Error ".mysqli_error($link));
	/* 
	*	Checking whether the file already exists in the destination folder 
	*/
	$sql = "SELECT subtopic FROM tbl_abm11 WHERE subtopic='$subtopic'";	
	$result = $link->query($sql) or die("Error : ".mysqli_error($link));
	while($row = mysqli_fetch_array($result)) {
	if($row['subtopic'] == $subtopic) {
	$fileExistsFlag = 1;
	}	
	}
	/*
	* If file is not present in the destination folder
	*/
	if($fileExistsFlag == 0) { 
	$target = "upload/";	
	$fileTarget = $target.$fileName;	
	$tempFileName = $_FILES["subtopic"]["tmp_name"];
       // $fileDescription = $_POST['description'];
		
	$result = move_uploaded_file($tempFileName,$fileTarget);
	/*
	*	If file was successfully uploaded in the destination folder
	*/
	if($result) { 
	echo "Your file <html><b><i>".$fileName."</i></b></html> has been successfully uploaded";	
	$query = "INSERT INTO tbl_abm11(level,subname,filepath,subtopic,description,week,assquarter,tmp_name) VALUES ('$fileTarget','$level','$subname','$filepath','$subtopic','$fileDescription','$week','$assquarter','$current_date')";
	$link->query($query) or die("Error : ".mysqli_error($link));	
	}
	else {	
	echo "Sorry !!! There was an error in uploading your file";	
	}
	mysqli_close($link);
	}
	/*
	* If file is already present in the destination folder
	*/
	else {
	echo "File <html><b><i>".$fileName."</i></b></html> already exists in your folder. Please rename the file and try again.";
	mysqli_close($link);
	}	
?>