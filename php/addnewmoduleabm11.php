<?php

include 'db.inc.php';
session_start();

if (isset($_POST['submit'])){
    $file = $_FILES['subtopic'];
    
    
    $fileName = $_FILES['subtopic']['name'];
    $fileTmpName = $_FILES['subtopic']['tmp_name'];
    $fileSize = $_FILES['subtopic']['size'];
    $fileError = $_FILES['subtopic']['error'];
    $fileType = $_FILES['subtopic']['type'];
    
    
    $fileExt = explode('.', $fileName);
    $fileActualExt = strolower(end($fileExt));
    
    
    $allowed = array('jpg', 'jpeg', 'png', 'pdf');
    
    
    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0)
        {
            if($fileSize < 1000000){
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'upload/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
               header("Location:ABM11.php?uploadsucces");
            } else
            {
                echo "too big";
            }
        }   else
        {
                echo "there was an erro ";
        }
    }else {
            echo "can't upload ";
}
    
}


?>

