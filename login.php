<?php
/**
 * Created by PhpStorm.
 * User: PB7N0062
 * Date: 8/15/17
 * Time: 11:00 AM
 */

?>
<?php
include 'db.inc.php';
session_start();

if(isset($_POST['username']))
{
	$username = $_POST['username'];
	$password = md5($_POST['password']);
echo $sql = "SELECT * from tbl_account where username = '$username' and password = '$password' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
	$row = $result->fetch_assoc();
	$_SESSION["id"] = $row["accountId"];
    $_SESSION["firstname"] = $row["firstname"];
    //echo $_SESSION["firstname"];

	header("Location:admin/index1.php");
} 
else 
{
	$sql = "SELECT * from tbl_teachers where username = '$username' and password = '$password' ";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) 
	{
		
		$row = $result->fetch_assoc();
		$_SESSION["id"] = $row["teacherid"];


		header("Location:teacher/index.php");

	} 
	else 
	{
		$sql = "SELECT * from tbl_students where username = '$username' and password = '$password' ";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) 
		{
			
			$row = $result->fetch_assoc();
			$_SESSION["id"] = $row["studentId"];


			header("Location:student/index.php");

		} 
		else 
		{
			echo "<script> 
			alert('Incorrect Username and Password.');
			window.location = 'login.php';
			</script>";
			
		}
	}
}

}

?>


<!DOCTYPE html>

<html>
<head href ="fonts/font-awesome.css">
    <title> Pantay National High School
</title>
    
    
    
    <link rel ="stylesheet" type = "text/css" href = "css/style4.css"> </link>
    <link rel = "stylesheet" type = "text/css" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">


<style>
input[type=text]:focus{
    border-color: dodgerBlue;
        box-shadow: 0 0 8px 0 dodgerBlue;
         }
.inputWithIcon input[type=text]
{
    padding-left: 30px;
    font-family: "Maiandra GD";
}
.inputWithIcon
{
    position:relative;
}
.inputWithIcon i{
    position:absolute;
    left: 40px;
    top:8px;
    padding:10px 8px;
    color: maroon;
    transition: 3s;

}
.inputWithIcon input[type=text]:focus + i{
    color:dodgerBlue;
}
        input[type=password]:focus{
    border-color: dodgerBlue;
        box-shadow: 0 0 8px 0 dodgerBlue;
         }
.inputlock input[type=password]
{
    padding-left: 30px;
     font-family: "Maiandra GD";
}
.inputlock
{
    position:relative;
    padding-top: 20px;
}
.inputlock i{
    position:absolute;
    left: 40px;
    top:8px;
    padding:30px 8px;
    color: maroon;
    transition: 3s;

}
.inputlock input[type=password]:focus + i{
    color:dodgerBlue;
}
.container img
    {
        padding-top: -60px;
    }
input
    {
       padding-left : -80px;
    }

    </style>

    </head >

<body  background = "img/cover.jpg">

      <img src = "img/logo.png"> <img src = "img/t.png">

    <div class = "containerleft"></div>

<div class = "container">

<a href="Location:../login.php"></a>
    
   
    <form  name = "form" method = "POST" action = "login.php">
       
    <div class = "inputWithIcon">

        <input required= "" type = "text"  name = "username"  placeholder = "Enter Username">
        <i class = "fa fa-user fa-lg fa-fw" aria-hidden = "true"> </i>
        </div>
        <div class = "inputlock">

        <input required= "" type = "password" name = "password" placeholder = "Enter Password">
              <i class = "fa fa-lock fa-lg fa-fw" aria-hidden = "true"> </i>

            
    </div>
        <div class = "btn">
           <input required = "" type = "submit" name = "cmdlogin" value = "Login" >  </input>
       
        </div>
    <div class ="btn1" >
        <input type = "button" value = "Cancel"> </div></input>
    </div>
   


    </form>
    </div>


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

<script src="../../plugins/jQuery/jquery-3.1.1.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>

</html>

