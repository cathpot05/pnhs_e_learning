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
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>        Student
                            <?php echo $_SESSION['firstname']; ?></a>


                    </li>
                    
                    
                 


<h3 class="menu-title">My Account</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Subjects</a>
                        <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-bars"></i><a href="subjects.php">My Subjects</a></li>
                        
                        </ul>
                        <h3 class="menu-title"></h3>
                        <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Quizzes</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-bars"></i><a href="viewquiz.php">View Quizzes</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="takequiz.php">Take a Quiz</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="newquiz.php">New Quizzes</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="score.php">Scores</a></li>
                            
                            </ul>
                            <h3 class="menu-title"></h3>
                             <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Video Sessions</a>
                                 
                                 
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-bars"></i><a href="join.php">Join</a></li>
                            <li><i class="fa fa-bars"></i><a href="sched.php">Schedule</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="history.php">History</a></li>
                           </ul>
                            
                                   <h3 class="menu-title"></h3>
                             <li>
                             <a href="ListofTeachers.php"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-info-alt"></i>Teachers</a>
                             </li>
                                 
                                  <h3 class="menu-title"></h3>
                             <li>
                             <a href="notif.php"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-info-alt"></i>Notifications</a>
                             </li>
                                  <h3 class="menu-title"></h3>
                        <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Messages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-bars"></i><a href="groupMessages.php">Group Chat</a></li>
                            <li><i class="fa fa-id-message"></i><a href="messages.php">Personal Chat</a></li>
                            
                            
                            </ul>
                             
                      
                   
                
                    
                  
 
                    
                  
                        
                    
                    
                    <h3 class="menu-title"></h3>
                      <li>
                     
                          
                          <a href="../login.php"> <i class="menu-icon ti-power-off"></i>Log out </a>
                        
                         
                    </li> 
                 
                     
   
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
                    <strong class="card-title">Notifications</strong>
                </div>
                <div class="card-body">
                    <table class="table table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">School Year</th>
                            <th scope="col">Subject</th>
							<th scope="col" width=20%>Score</th>

                        </tr>
                        </thead>
                        <tbody>

                        <?php
                      $sql = "SELECT  B.quizId, B.quizDesc, B.timestart,B.timeend, C.score
					   FROM tbl_sy_course_subj A 
					   INNER JOIN tbl_quiz B ON B.sy_course_subjId = A.sy_course_subjId
					   INNER JOIN tbl_sy_course D ON A.sy_courseId = D.sy_courseId
					   INNER JOIN tbl_enrolledstudents E ON E.sy_courseId = D.sy_courseId
					   LEFT JOIN tbl_score C ON C.quizId = B.quizId  AND C.es_Id = E.es_Id
					   WHERE E.studId = $id ORDER BY B.quizId DESC";
                        $result = $conn->query($sql);

                        while($row = $result->fetch_assoc()){
                           ?>
     								<tr>
     								<td> <?php echo $row["quizDesc"]; ?></td>
     								<td><?php echo "<strong>From: </strong>".$row['timestart'].' <br> <strong>To: </strong>'.$row['timeend']; ?></td>
									
									<td><?php
									if($row['score'] == "")
									{	
										if(strtotime(date('Y-m-d H:i:s')) > strtotime($row['timestart'])  &&  strtotime(date('Y-m-d H:i:s')) < strtotime($row['timeend']))
										{
											?>
											<a href="takequiz.php?quizId=<?php echo $row["quizId"] ?>"   class="btn btn-outline-primary btn-sm">Take Quiz</a>
									<?php
										}
										else
										{
												
											echo "<strong> Not Taken </strong>";
										}										
									}
									else
									{
										echo $row['score']; 
									}
											?></td>
     								</tr>
									
									<?php
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
    </script>

</body>
</html>
