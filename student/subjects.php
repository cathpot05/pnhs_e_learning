<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->


<?php


include "../sessionLogout.php";
include "../db.inc.php";
?>
<?php
//will remove this later
//$_SESSION["id"] = 1;


//$conn->close();

$es_Id = $_GET['es_Id'];
?>




<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pantay National High School</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="shortcut icon" href="../images/pantaylogo1_.bmp">

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
                
               
              <!--note: mamaya remove yung sidebar image/text --> <a class="navbar-brand" href="index.php"><img src="../images/student.png" alt="logor"></a>
                
                 
                
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>
                            Student
                            <?php echo $_SESSION['firstname']; ?>
						</a>
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Groups</a>
                        <ul class="sub-menu children dropdown-menu">
                            <?php
							$sql = "SELECT B.group_title,B.g_Id 
							FROM tbl_gmembers A
							INNER JOIN tbl_group B ON A.g_Id = B.g_Id
							WHERE A.studentId = $id";
							
							$result = $conn->query($sql);

							if ($result->num_rows > 0) 
							{
								while($row = $result->fetch_assoc())
								{
									?>
									 <li><i class="fa fa-bars"></i><a href="group.php?g_Id=<?php echo $row['g_Id']; ?>" ><?php echo $row['group_title']; ?></a></li>
									<?php
								}
							}
								?>
                            </ul>
						
						 	<li>
						   <a href="ListofTeachers.php"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-info-alt"></i>Teachers</a>
						 </li>
						 <li>
						   <a href="viewquiz.php"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-info-alt"></i>Quizzes</a>
						 </li>
						 <h3 class="menu-title"></h3>
						 
                        <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>School Year</a>
                        <ul class="sub-menu children dropdown-menu">
                            <?php
							$sql = "SELECT tbl_enrolledstudents.es_Id, tbl_sy.SY_From, tbl_sy.SY_To FROM tbl_enrolledstudents
							INNER JOIN tbl_sy_course ON tbl_enrolledstudents.sy_courseId = tbl_sy_course.sy_courseId 
							INNER JOIN tbl_sy ON tbl_sy_course.syId = tbl_sy.syId
							WHERE tbl_enrolledstudents.studId = $id ORDER BY tbl_sy.SY_To DESC";
							
							$result = $conn->query($sql);

							if ($result->num_rows > 0) 
							{
								while($row = $result->fetch_assoc())
								{
									?>
									 <li><i class="fa fa-bars"></i><a href="subjects.php?es_Id=<?php echo $row['es_Id']; ?>" ><?php echo $row['SY_From']." - ".$row['SY_To']; ?></a></li>
									<?php
								}
							}
								?>
                            </ul>
							</li>
							<h3 class="menu-title"></h3>

                      <li>
                     
                          
                          <a href="../login.php"> <i class="menu-icon ti-power-off"></i>Log out </a>
                        
                         
                    </li> 
                 
                     
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
                       
						 <div class="dropdown for-message">
                          <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-bell"></i>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="message">
						   <?php
					$sql = "SELECT B.subjDesc,C.notif,C.date,C.time 
							FROM tbl_sy_course_subj A
							INNER JOIN tbl_subjects B ON A.subjectId = B.subjectId
							INNER JOIN tbl_notif C ON A.sy_course_subjId = C.sy_course_subjId
							INNER JOIN tbl_sy_course D ON A.sy_courseId = D.sy_courseId
							INNER JOIN tbl_enrolledstudents E ON E.sy_courseId = D.sy_courseId
							WHERE E.studId = $id  ORDER BY C.notifId DESC LIMIT 10";
							
							$result = $conn->query($sql);

							if ($result->num_rows > 0) 
							{
								while($row = $result->fetch_assoc())
								{
									$datetime = strtotime($row['date']." ".$row['time']);
									if($row['date'] == date('Y-m-d'))
									{
									$newdatetime = date('g:i a',$datetime);
									}
									else
									{
										$newdatetime =date('M j, Y g:i a',$datetime);
									}
									?>
									     <a class="dropdown-item media bg-flat" style="background-color:#e6e6e6" href="#">
											<span class="message media-body">
												<span class="name float-left"><strong><?php echo $row['subjDesc']; ?></strong></span>
												<span class="time float-right"><?php echo $newdatetime; ?></span>
													<p><?php echo $row['notif']; ?></p>
											</span>
										</a>
										
							<hr style="padding:0; margin:.5px;">
									<?php
								}
							}
							else
							{
								?>
								<a class="dropdown-item media bg-flat" style="background-color:#e6e6e6" href="#">
											<span class="message media-body">
													<p>No Notifications</p>
											</span>
										</a>
								<?php
							}
						?>
						 

                          </div>
                        </div>
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
                       
                   <p> Student</p>
             <style>
                        
                p
                 {
                     
                     font-size: 25px;
                     margin-right: 40px;
                     color: black;
                     padding-top: 10px;
                   
                 }
                        
                        </style>


                             
   
    
                        

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
                    <strong class="card-title">Subjects List</strong>
                </div>
                <div class="card-body">
                    <table class="table table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Subject</th>
                            <th scope="col">Teacher</th>
                            <th width=20% scope="col">Manage</th>

                        </tr>
                        </thead>
                        <tbody>

                        <?php
                       $sql = "SELECT A.studId,C.sy_course_subjId, D.subjDesc, E.firstname,E.middlename,E.lastname, F.id as videoId, G.firstname AS student
						FROM tbl_enrolledstudents A 
						INNER JOIN tbl_sy_course B ON A.sy_courseId = B.sy_courseId
						INNER JOIN tbl_sy_course_subj C ON B.sy_courseId = C.sy_courseId
						INNER JOIN tbl_subjects D ON C.subjectId = D.subjectId
						INNER JOIN tbl_teachers E ON C.teacherId = E.teacherId
						INNER JOIN tbl_students G ON A.studId = G.studId
						LEFT JOIN tbl_stream F ON C.sy_course_subjId =  F.sy_course_subjId
						WHERE A.es_Id = $es_Id";
                        $result = $conn->query($sql);

                        while($row = $result->fetch_assoc()){
                            echo '
     								<tr>
     								<td>'.$row["subjDesc"].'</td>
     								<td>'.$row["firstname"].' '.$row["middlename"].' '.$row["lastname"].' </td>
     								<td>
     								<h3>

            
            <div class="animated fadeIn">

                    <div class="btn-sm">

     								<a href="viewmodulesubj.php?sy_course_subjId='.$row["sy_course_subjId"].'"
                                    class="btn btn-outline-primary btn-sm">View Modules  </a>';
                            if($row['videoId']!=null){
                                echo'
                                    <br />
                                    <br />
                                    <br />
                                    <br />
                                    <a class="btn btn-outline-warning btn-sm" href="videostream.php?videoId='.$row["videoId"].'&name='.$row["student"].'&sub='.$row['subjDesc'].'">Join Video</a>
                                ';
                            }//<a class="btn btn-outline-info btn-sm" target="_blank" href="videostream.php?videoId='.$row["videoId"].'&name='.$row["firstname"].'">Join Video Conference</a>
                                    echo'
                                    <br />
                                    <br />
                                   
								 <a href="viewquizsubj.php?sy_course_subjId='.$row["sy_course_subjId"].'&es_Id='.$es_Id.'"
                                    class="btn btn-outline-success btn-sm">View Quizzes</a>

     						</div>
							</div>

							</h3>
     								</td>
     								</tr>
     								';
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
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


        function gotoWindow(id, name){
            url = "localhost/eLearning/student/videostream.php?videoId="+id+"&name="+name;
            var win = window.open(url, '_blank');
            win.focus();
        }
    </script>

</body>
</html>
