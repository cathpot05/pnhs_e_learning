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

$teacherinfoid = $_GET['teacherinfoid'];				
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

      <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
					  <?php
					 $sql = "SELECT tbl_subject.subjectDesc FROM tbl_teacherinfo 
					INNER JOIN tbl_subject ON tbl_teacherinfo.subjectid = tbl_subject.subjectid where tbl_teacherinfo.teacherinfo_id = $teacherinfoid";
								
								$result = $conn->query($sql);

								if ($result->num_rows > 0) 
								{
									$row = $result->fetch_assoc();
									$subjectName = $row['subjectDesc'];
								}
					  
					  ?>
                        <strong>Subject : <?php echo $subjectName; ?></strong>
                          <button type="button" style="float:right" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#addQuizModal">
                          Add New Quiz
                      </button>
                          <strong></strong>
                      </div>
                      <div class="card-body">
                        <table class="table table">
							<thead class="thead-dark">
								<tr>
									<th>Quiz</th>
									<th>Time Start</th>
									<th>Time End</th>
									<th>Manage</th>
								</td>
							</thead>
							<tbody>
								<?php
							 $sql = "SELECT tbl_teacherinfo.teacherinfo_id, tbl_quiz.quizId, tbl_quiz.quizDesc, tbl_quiz.timeStart,tbl_quiz.timeEnd FROM tbl_quiz
									INNER JOIN tbl_teacherinfo ON tbl_quiz.teacherinfo_id = tbl_teacherinfo.teacherinfo_id 
									where tbl_quiz.teacherinfo_id = $teacherinfoid";
								
								$result = $conn->query($sql);

								if ($result->num_rows > 0) 
								{
									while($row = $result->fetch_assoc())
									{
									?>
									<tr>
									<td><?php echo $row['quizDesc']; ?></td>
									<td><?php echo $row['timeStart']; ?></td>
									<td><?php echo $row['timeEnd']; ?></td>
									<td width=20%><a href="questions.php?quizid=<?php echo $row['quizId'];?>"
                                    class="btn btn-outline-primary btn-sm">Show Questionaire</a>
									<br>
									</td>
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
<div class="modal fade" id="addQuizModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Add New Quiz</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                              <form action="addQuiz.php?teacherinfoid=<?php echo $teacherinfoid; ?>" method="post" class="form-horizontal" >
                           <div class="row form-group">
                            <div class="col col-md-3"><label for="quizDesc" class=" form-control-label">Quiz</label></div>
                            <div class="col-12 col-md-9">
                              <input type=text name=quizDesc placeholder="Quiz Description" class="form-control">
                            </div>
                          </div>
							<div class="row form-group">
                            <div class="col col-md-3"><label for="assquarter" class=" form-control-label">Time Start</label></div>
                            <div class="col-12 col-md-9">
                              <input type=datetime-local name=timeStart placeholder="Quiz Description" class="form-control">
                            </div>
                          </div>
                            <div class="row form-group">
                            <div class="col col-md-3"><label for="assquarter" class=" form-control-label">Time End</label></div>
                            <div class="col-12 col-md-9">
                              <input type=datetime-local name=timeEnd placeholder="Quiz Description" class="form-control">
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

</body>
</html>
