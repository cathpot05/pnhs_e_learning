<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> 

<?php
include "../sessionLogout.php";
include "../db.inc.php";

$sql = "SELECT *from tbl_teachers where teacherid = $id";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
	$row = $result->fetch_assoc();
	$name = $row['firstName']." ". $row['lastName'];
}
$studentid =0;
if(isset($_GET['studentId']))
{
$studentid = $_GET['studentId'];
}			
?>

<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pantay National High School</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link rel="shortcut icon" href="pantaylogo1.bmp">

    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
       

     <link rel="stylesheet" href="../assets/scss/style.css">
    <link href="../assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                     <i class="fa fa-bars"></i>
                </button>      
              <!--note: mamaya remove yung sidebar image/text --> <a class="navbar-brand" href="index1"><img src="../images/pantaylogo.png" alt="logor"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i><?php echo $name; ?></a>   
                    </li>
					<h3 class="menu-title">Account</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>My Account</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-id-badge"></i><a href="quiz.php">Quizzes</a></li>
                            <li><i class="fa fa-book"></i><a href="notification.php">Notifications</a></li>
                            <li><i class="fa fa-id-card-o"></i><a href="schedule.php">Schedules</a></li>
                            <li><i class="fa fa-exclamation-triangle"></i><a href="messages.php">Personal Messages</a></li>
							<li><i class="fa fa-exclamation-triangle"></i><a href="groupMessages.php">Group Messages</a></li>
                             <li><i class="fa fa-exclamation-triangle"></i><a href="videostream.php">Stream</a></li>
                            </ul>
                        
                    </li>
				
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Courses</a>
                        <ul class="sub-menu children dropdown-menu">
							<?php
							$sql = "SELECT tbl_course.courseid, tbl_course.course from tbl_teacherinfo 
							INNER JOIN tbl_course ON tbl_teacherinfo.courseid = tbl_course.courseid
							WHERE tbl_teacherinfo.teacher_id = $id GROUP by tbl_course.courseid";
							
							$result = $conn->query($sql);

							if ($result->num_rows > 0) 
							{
								while($row = $result->fetch_assoc())
								{
								?>
								<li><i class="fa fa-id-card-o"></i><a href="courseSubjects.php?courseid=<?php echo $row['courseid']; ?>"><?php echo $row['course']; ?></a></li>
								<?php
								}
							}
							?>
                        </ul>
                        
                    </li>
                   <h3 class="menu-title"></h3>
                      <li>
                          <a href="../logout.php"> <i class="menu-icon ti-power-off"></i>Log out </a>
                    </li> 
					</ul>
				</div>	
                 </nav>
                     
   
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right"> 
                        <img class="user-avatar rounded-circle" src="../images/pantaylogo.png" alt="User Avatar">
                       
                   
             <style>
                        
                p
                 {
                     
                     font-size: 25px;
                     margin-right: 40px;
                     color: black;
                     padding-top: 10px;
                   
                 }
                        
                        </style>

                        
                          <p><?php echo "Teacher"; ?> 
       </p>      
                        
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                           
                        </a>
                        
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Pantay National High School</h1>
                        <style>
                            
                            
                .p
                 {
                    
                     font-size: 25px;
                     margin-left: 900px;
                     color: black;
                     margin-right: -90px;
                     margin-top: -50px;
                   
                 }
                        
                        </style>
                    </div>
                </div>
            </div>
           
        </div>

      <div class="col-lg-8">
                    <div class="card">
                      <div class="card-header">
					  
					  <?php
					    if(isset($_GET['studentId'])){
					  $sql = "SELECT *FROM tbl_students where studentid = $studentid";
								
								$result = $conn->query($sql);

								if ($result->num_rows > 0) 
								{
									$row = $result->fetch_assoc();
									$studentName = $row['frstName']." ".$row['lastName'];
									
								}
					  
					  ?>
                        <strong><?php echo $studentName; ?></strong>
                          <?php
						}
						  ?>
                          
                      </div>
                      <div class="card-body">
						<div style=" max-height: 400px; overflow-y: scroll;" id="messageDiv">
						
						</div>
							<hr>
							<?php if(isset($_GET['studentId'])){?>
							<form action="sendMessage.php?teacherid=<?php echo $id; ?>&studentid=<?php echo $studentid; ?>" method="post">
							<div class="row form-group">
                            <div class="col-12 col-md-10"><textarea name="message" id="textarea-input" rows="5" placeholder="Message..." class="form-control" required></textarea></div>
							<div class="col-12 col-md-2"><button style="position: absolute; bottom: 0;" type="submit" class="btn btn-primary">Send</button> </div>
							</div>
							</form>
							
						<?php }?>
                    </div>
            </div>
  </div>
      <div class="col-lg-4">
                    <div class="card">
                      <div class="card-header">
                        <strong>Students</strong>
                      </div>
                      <div class="card-body">
					  <table width=100%>
					  <?php if(isset($_GET['studentId'])){?>
					 <tr>
									
										<td width=100%><a href="messages.php?studentId=<?php echo $studentid ;?>" ><?php echo $studentName; ?></a>
											<hr width=100%></td>
											
											</tr>
									<?php }?>
						<?php
						 $sql = "SELECT  tbl_students.studentid, tbl_students.frstName,tbl_students.lastName, tbl_teachers.firstName, tbl_pmessage.message,tbl_pmessage.sendertype FROM tbl_pmessage
						INNER JOIN tbl_students ON tbl_pmessage.studentID = tbl_students.studentId
						INNER JOIN tbl_teachers ON tbl_pmessage.teacherId = tbl_teachers.teacherid
						where tbl_pmessage.teacherId = $id and tbl_pmessage.studentId != $studentid GROUP BY tbl_pmessage.studentId ORDER by id ASC";
								
								$result = $conn->query($sql);

								if ($result->num_rows > 0) 
								{
									while($row = $result->fetch_assoc())
									{
										?>
										
										
											<tr>
											<td><a href="messages.php?studentId=<?php echo $row['studentid']; ?>" > <?php echo $row['frstName']." ".$row['lastName']; ?> </a></td>
											</tr>
										
										
										<?php
											
									}
									
								}
						
						
						?>
						</table>
						
                    </div>
                    <div class="card">
       
                </div>
            </div>
  </div>


         
    <!-- Right Panel -->


    <script src="../assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script>


    <script src="../assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="../assets/js/dashboard.js"></script>
    <script src="../assets/js/widgets.js"></script>
    <script src="../assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="../assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="../assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="../assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
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
<script type="text/javascript">
	function refreshData(){
        var xhr;
			if (window.XMLHttpRequest) xhr = new XMLHttpRequest(); // all browsers 
			else xhr = new ActiveXObject("Microsoft.XMLHTTP"); 	// for IE
			var url = 'refreshMessage.php?studentid=<?php echo $studentid; ?>';
			xhr.open('GET', url, false);
			xhr.onreadystatechange = function () {
				document.getElementById("messageDiv").innerHTML = xhr.responseText;

			}
			xhr.send();
			// ajax stop
			return false;
  
    }
	refreshData();
	var myVar = setInterval(function(){ refreshData(); }, 2000);
						var objDiv = document.getElementById("messageDiv");
objDiv.scrollTop = objDiv.scrollHeight;
  </script>
</body>
</html>
