<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> 

<?php
include "../sessionLogout.php";
include "../db.inc.php";
$g_Id =0;
if(isset($_GET['g_Id']))
{
$g_Id = $_GET['g_Id'];
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
              <!--note: mamaya remove yung sidebar image/text --> <a class="navbar-brand" href="index.php"><img src="../images/teacher.png" alt="logor"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Teacher <?php echo $_SESSION['firstname']; ?></a>   
                    </li>
					<h3 class="menu-title">Account</h3><!-- /.menu-title -->
                  <li class="menu-item-has-children dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>My Account</a>
							<ul class="sub-menu children dropdown-menu">
								 <li>
									<a href="messages.php"  aria-haspopup="true" aria-expanded="false"> <i class="ti-info-alt"></i>Messages</a>
								 </li>
								 <li>
									<a href="groupMessages.php"  aria-haspopup="true" aria-expanded="false"> <i class="ti-info-alt"></i>Group Messages</a>
								 </li>
								 <li>
									<a href="changePasswordForm.php"  aria-haspopup="true" aria-expanded="false"> <i class="fa fa-lock"></i>Change Password</a>
								 </li>
							</ul>
						 </li>
					 <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Groups</a>
                        <ul class="sub-menu children dropdown-menu">
						<?php
						$sql = "SELECT *from tbl_group WHERE teacherId";
							
							$result = $conn->query($sql);

							if ($result->num_rows > 0) 
							{
								while($row = $result->fetch_assoc())
								{
									?>
									<li><i class="fa fa-id-badge"></i><a href="group.php?g_Id=<?php echo $row['g_Id']; ?>"><?php echo $row['group_title']; ?></a></li>
									<?php
								}
							}
						?>
                             <li><i class="fa fa-plus"></i><a href="addGroup.php">Create Group</a></li>
                        </ul>
                    </li>
                             
				
					<h3 class="menu-title">School Year</h3><!-- /.menu-title -->
							<?php
							$sql = "SELECT *from tbl_sy ORDER BY SY_To DESC";
							
							$result = $conn->query($sql);

							if ($result->num_rows > 0) 
							{
								while($row = $result->fetch_assoc())
								{
									$syId = $row['syId'];
								?>
								 <li class="menu-item-has-children dropdown">
								 <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i><?php echo $row['SY_From']." - ".$row['SY_To']; ?></a>
								<ul class="sub-menu children dropdown-menu">
									<?php
									$sql2 = "SELECT tbl_course.course_description,tbl_course.courseId, tbl_sy_course.sy_courseId 
									from tbl_sy_course_subj
									INNER JOIN tbl_sy_course ON tbl_sy_course_subj.sy_courseId = tbl_sy_course.sy_courseId 
									INNER JOIN tbl_course ON tbl_sy_course.courseId = tbl_course.courseId
									Where tbl_sy_course.syId = $syId AND tbl_sy_course_subj.teacherId = $id GROUP BY tbl_course.courseID";
									
									$result2 = $conn->query($sql2);

									if ($result2->num_rows > 0) 
									{
										while($row2 = $result2->fetch_assoc())
										{
											
										?>
										<li><i class="fa fa-id-card-o"></i><a href="courseSubjects.php?sy_courseId=<?php echo $row2['sy_courseId']?>"><?php echo $row2['course_description']; ?></a></li>
										<?php
										}
									}
									?>
								</ul> 
							</li>
							
								<?php
								}
							}
							?>
                        
					
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
					  if(isset($_GET['g_Id']))
					  {
					  $sql = "SELECT tbl_group.group_title, tbl_teachers.firstname, tbl_teachers.lastname FROM tbl_group 
					  INNER JOIN tbl_teachers ON tbl_group.teacherId = tbl_teachers.teacherId 
					  where g_Id = $g_Id";
								
								$result = $conn->query($sql);

								if ($result->num_rows > 0) 
								{
									$row = $result->fetch_assoc();
									$groupName = $row['group_title'];
									$teacherName = $row['firstname']." ".$row['lastname'];
								}
					  
					  ?>
                        <strong><?php echo $groupName; ?></strong>
                        <?php
					  }
					  else
					  {
						  echo "Please choose a group";
						  
					  }   
					  ?>
                      </div>
                      <div class="card-body">
						<div style=" max-height: 400px; overflow-y: scroll;" id="groupMessageDiv">
						
						</div>
							<hr>
							 <?php
							if(isset($_GET['g_Id'])){
							?>
							<form action="sendGroupMessage.php?g_Id=<?php echo $g_Id; ?>" method="post">
							<div class="row form-group">
                            <div class="col-12 col-md-10"><textarea name="message" id="textarea-input" rows="5" placeholder="Message..." class="form-control" required></textarea></div>
							<div class="col-12 col-md-2"><button style="position: absolute; bottom: 0;" type="submit" class="btn btn-primary">Send</button> </div>
							</div>
							</form>
							<?php
							  }
							  ?>
						
                    </div>
            </div>
  </div>
      <?php
	if(isset($_GET['g_Id']))
	{
		?>
      <div class="col-lg-4">
                    <div class="card">
                      <div class="card-header">
                        <strong>Members</strong>
                      </div>
                      <div class="card-body">
					  <table width=100%>
					 <tr>
									
										<td><?php echo $teacherName; ?></td>
											<td><i style="float:right; font-size:.6em"><?php echo "You"; ?></i></td>
											</tr>
											<tr>
												<td colspan=2><hr width=100%></td>
											</tr>
											<?php
											 $sql = "SELECT tbl_students.firstname,tbl_students.lastname,tbl_students.studId 
											 FROM tbl_gmembers 
											 INNER JOIN tbl_students ON tbl_gmembers.studentId = tbl_students.studId
											 WHERE tbl_gmembers.g_Id = $g_Id";
													
													$result = $conn->query($sql);

													if ($result->num_rows > 0) 
													{
														while($row = $result->fetch_assoc())
														{
															?>
															
															
																<tr>
																<td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
																<td width=20%><a  style="float:right; font-size:.6em" href="messages.php?studId=<?php echo $row['studId']; ?>" class="btn btn-outline-primary btn-sm">Send Message</a></td>
																</tr>
																<tr>
																<td colspan=2><hr width=100%></td>
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
<?php
	}
	else
	{
		?>
		      <div class="col-lg-4">
                    <div class="card">
                      <div class="card-header">
                        <strong>Groups</strong>
						
                      </div>
                      <div class="card-body">
					  <table width=100%>
					 <?php
							$sql = "SELECT *from tbl_group WHERE teacherId = $id";
							
							$result = $conn->query($sql);

							if ($result->num_rows > 0) 
							{
								while($row = $result->fetch_assoc())
								{
									?>
									 <td><a href="groupMessages.php?g_Id=<?php echo $row['g_Id']; ?>" ><?php echo $row['group_title']; ?></a></td>
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
		
		<?php
	}
?>

         
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
			var url = 'refreshGroupMessage.php?g_Id=<?php echo $g_Id; ?>';
			xhr.open('GET', url, false);
			xhr.onreadystatechange = function () {
				document.getElementById("groupMessageDiv").innerHTML = xhr.responseText;
			}
			xhr.send();
			// ajax stop
			return false;
  
    }
	refreshData();
	var myVar = setInterval(function(){ refreshData(); }, 2000);
			var objDiv = document.getElementById("groupMessageDiv");
objDiv.scrollTop = objDiv.scrollHeight;
  </script>
</body>
</html>
