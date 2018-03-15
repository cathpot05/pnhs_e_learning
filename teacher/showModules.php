<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> 

<?php
include "../sessionLogout.php";
include "../db.inc.php";

$sy_course_subjId = $_GET['sy_course_subjId'];				
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
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i><?php echo $_SESSION['firstname']; ?></a>   
                    </li>
					<h3 class="menu-title">Account</h3><!-- /.menu-title -->
                  <li class="menu-item-has-children dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>My Account</a>
							<ul class="sub-menu children dropdown-menu">
								 <li>
									<a href="messages.php"  aria-haspopup="true" aria-expanded="false"> <i class="ti-info-alt"></i>Personal Messages</a>
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
                             <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Video Sessions</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-bars"></i><a href="join.php">Join</a></li>
                            <li><i class="fa fa-bars"></i><a href="sched.php">Schedule</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="history.php">History</a></li>
                           </ul>	
				
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

      <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
					  <?php
					  $sql = "SELECT tbl_subjects.subjDesc FROM tbl_sy_course_subj
					  INNER JOIN tbl_subjects ON tbl_sy_course_subj.subjectId = tbl_subjects.subjectId";
								
								$result = $conn->query($sql);

								if ($result->num_rows > 0) 
								{
									$row = $result->fetch_assoc();
									$subjectName = $row['subjDesc'];
								}
					  
					  ?>
                        <strong>Subject : <?php echo $subjectName; ?></strong>
                          
						  <button type="button" style="float:right" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#addFileModal">
                          Add New Topic
                      </button>
                          <strong></strong>
                      </div>
                      <div class="card-body">
                        <table class="table table">
							<thead class="thead-dark">
								<tr>
									<th>Description</th>
									<th>Quarter</th>
									<th>Week</th>
									<th>Manage</th>
								</td>
							</thead>
							<tbody>
								<?php
								$sql = "SELECT *FROM tbl_files where sy_course_subjId = $sy_course_subjId ORDER BY quarter ASC, week ASC";
								
								$result = $conn->query($sql);

								if ($result->num_rows > 0) 
								{
									while($row = $result->fetch_assoc())
									{
									?>
									<tr>
									<td><?php echo $row['description']; ?></td>
									<td><?php echo $row['quarter']; ?></td>
									<td>Week <?php echo $row['week']; ?></td>
									<td width=20%><a href="<?php echo $row['directory']; ?>" target="_blank"
                                    class="btn btn-outline-primary btn-sm">Download</a>
									<a class="btn btn-outline-danger btn-sm" onclick="confirmDelete(<?php echo $row['fileId']; ?>)" data-toggle="modal" data-target="#deleteFileModal">Delete</a></td>
									</tr>
									<?php
									}
								}
								?>
							</tbody>
						</table>
                    </div>
                    <div class="card">
       
                </div>
            </div>



           

  </div>

<div class="modal fade" id="addFileModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Add New Topic</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                              <form action="addFile.php?sy_course_subjId=<?php echo $sy_course_subjId; ?>" method="post" class="form-horizontal" enctype = "multipart/form-data">
                           
                             <div class="row form-group">
                            <div class="col col-md-3"><label for="subtopic" class=" form-control-label">Subject Topic:</label></div>
                            <div class="col-12 col-md-9"><input accept =    "image/x-png, image/gif, application/pdf, image/jpeg, application/msword, application/msexcel" required="" type="file" id="subtopic" name="subtopic" class="form-control-file"></div>
                          </div>
							<div class="row form-group">
                            <div class="col col-md-3"><label for="assquarter" class=" form-control-label">Assigned Quarter</label></div>
                            <div class="col-12 col-md-9">
                              <select name="quarter" id="assquarter" class="form-control">
                                <option value="0">Please select assigned quarter</option>
                                <option value="1">Quarter I</option>
                                <option value="2">Quarter II</option>
                               <option value="3">Quarter III</option>
							   <option value="4">Quarter IV</option>
                              </select>
                            </div>
                          </div>
                            
                               <div class="row form-group">
                            <div class="col col-md-3"><label for ="week"class=" form-control-label">Week</label></div>
                             <div class="col-12 col-md-9">
                                 <select class="form-control" name="week" id="week" required = "">
                                     
                                 <option value="0">Please select assigned week</option>
                                <option value="1">Week 1</option>
                                <option value="2">Week 2</option>
                                <option value="3">Week 3</option>
                                <option value="4">Week 4</option>
                                </select>
                          </div>
                                </div>
								
							 <div class="row form-group">
                            <div class="col col-md-3"><label for ="description"class=" form-control-label">Description</label></div>
                             <div class="col-12 col-md-9">
                                 <textarea cols=77 rows=5 name=description></textarea>
                          </div>
                                </div>
              
                      </div>
                     <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"  data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Confirm</button>
                            </div>
                           </form>
                            </div>
                            
                        </div>
                    </div>
					
					
					<div class="modal fade" id="deleteFileModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Add New Topic</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                              <form action="deleteFile.php?sy_course_subjId=<?php echo $sy_course_subjId; ?>" method="post" class="form-horizontal" enctype = "multipart/form-data">
							<p>Are you sure you want to delete this topic?</p>
							<input type=hidden name=deleteid id=deleteid >
							<div class="modal-footer">
                                
                                <button type="submit" class="btn btn-primary">Yes</button>
								<button type="button" class="btn btn-secondary"  data-dismiss="modal">No</button>
                            </div>
                           </form>
                            </div>
                            
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
		
		function confirmDelete(id)
		{
			document.getElementById("deleteid").value = id;
		}
    </script>

</body>
</html>
