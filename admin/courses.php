<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->



<?php

include "../sessionLogout.php";
include '../db.inc.php';
?>


<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pantay National High School</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../images/pantaylogo1.bmp">
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



<!--Main Design -->

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="index1.php"><img src="../images/pantaylogo.png" alt="logo"></a>
        </div>
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="index1.php"> <i class="menu-icon fa fa-dashboard">
                        </i>
                        Admin <?php echo $_SESSION['firstname']; ?>
                    </a>
                </li>
                <h3 class="menu-title">Accounts</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Teacher</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="ListofTeachers.php">List of Teachers</a></li>
                        <li><i class="fa fa-plus-circle"></i><a href="TeacherAddAccount.php">Add Teacher</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-address-book "></i>Students</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="ListofStudent.php">List of Students</a></li>
                        <li><i class="fa fa-plus-circle"></i><a href="StudentAddAccount.php">Add Student</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-pencil"></i>Course and Subjects</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="courses.php">Courses</a></li>
                        <li><i class="fa fa-table"></i><a href="subject.php">Subjects</a></li>
                        <li><i class="fa fa-table"></i><a href="schoolyear.php">School Year</a></li>
                    </ul>
                </li>
                <h3 class="menu-title">Manage</h3><!-- /.menu-title -->
                <li>
                    <a href="#"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Reports</a>
                </li>
                <h3 class="menu-title"></h3>
                <li>
                    <a href="../logout.php"> <i class="menu-icon ti-power-off"></i>Log out </a>
                </li>
</aside>

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
                    </p>


                </div>

                <div class="language-select dropdown" id="language-select">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">

                    </a>

                </div>

            </div>
        </div>

    </header>
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

    <div class="content mt-3">
        <div class="col-sm-12">
            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                <span class="badge badge-pill badge-success">Note</span> Good Day, currently your are in Administrators page/view. Thank you!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>


    <!--Insert codes here-->

    <!--Start of Main Content-->
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <!--<h1>Dashboard</h1>-->
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">List of School Courses</strong>
                <button type="button" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#addschoolcourse">
                    Add New School Course
                </button>
            </div>
            <div class="card-body">
                <table class="table table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">School Year</th>
                        <th scope="col">Manage</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    $sql = "SELECT * FROM tbl_course";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()){
                        echo '
     								<tr>
     								<td>'.$row["course_description"].'</td>
     								<td>
     								<div class="btn-sm">
     								<a class="btn btn-outline-primary btn-sm" onClick="edit_Course('.$row["courseId"].' , \''.$row["course_description"].'\')" data-toggle="modal" data-target="#edit_course">Change  </a>
                                 <a href="php/remove_course.php?id='.$row["courseId"].'" class="btn btn-outline-danger btn-sm">Remove</a>
                                 </div>
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
    <!--Insert codes here-->

</div>

<!--End of Main Design -->

<!--Modals-->

<div class="modal fade" id="addschoolcourse" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Add New Course</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="php/add_schoolcourse.php" method="post" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="course" class=" form-control-label">Course Description:</label></div>
                        <div class="col-12 col-md-9"><input required="" type="text" id="course" name="course" class="form-control"></div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"  data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="edit_course" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Edit Course</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="php/edit_course.php" method="post" class="form-horizontal">
                    <div class="row form-group">
                        <input type="hidden" required="" type="text" id="edit_course_id" name="edit_course_id" class="form-control">
                        <div class="col col-md-3"><label for="edit_course_desc" class=" form-control-label">Course Description:</label></div>
                        <div class="col-12 col-md-9"><input required="" type="text" id="edit_course_desc" name="edit_course_desc" class="form-control"></div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"  data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Right Panel -->

<!---------------------------------Tables---->
<script src="../assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="../https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
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

    function edit_Course(id, desc)
    {
        document.getElementById("edit_course_id").value = id;
        document.getElementById("edit_course_desc").value = desc;

    }
</script>

</body>
</html>