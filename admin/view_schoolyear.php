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
                        <?php
                        $sql_sy = "SELECT * FROM tbl_sy";
                        $result_sy = $conn->query($sql_sy);
                        while($row_sy = $result_sy->fetch_assoc()){
                            echo '
     								<li><i class="fa fa-table"></i><a href="view_teacher_peryear.php?id='.$row_sy["syId"].'">'.$row_sy['SY_From'].' - '.$row_sy['SY_To'].'</a></li>
     								';
                        }
                        ?>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-address-book "></i>Students</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="ListofStudent.php">List of Students</a></li>
                        <li><i class="fa fa-plus-circle"></i><a href="StudentAddAccount.php">Add Student</a></li>
                        <?php
                        $sql_sy = "SELECT * FROM tbl_sy";
                        $result_sy = $conn->query($sql_sy);
                        while($row_sy = $result_sy->fetch_assoc()){
                            echo '
     								<li><i class="fa fa-table"></i><a href="view_students_peryear.php?id='.$row_sy["syId"].'">'.$row_sy['SY_From'].' - '.$row_sy['SY_To'].'</a></li>
     								';
                        }
                        ?>

                    </ul>

                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-pencil"></i>Course and Subjects</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="courses.php">View Courses</a></li>
                        <li><i class="fa fa-table"></i><a href="subject.php">View Subjects</a></li>
                        <li><i class="fa fa-table"></i><a href="schoolyear.php">View School Year</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-pencil"></i>School Year</a>
                    <ul class="sub-menu children dropdown-menu">
                        <?php
                        $sql_sy = "SELECT * FROM tbl_sy";
                        $result_sy = $conn->query($sql_sy);
                        while($row_sy = $result_sy->fetch_assoc()){
                            echo '
     								<li><i class="fa fa-table"></i><a href="view_schoolyear.php?id='.$row_sy["syId"].'">'.$row_sy['SY_From'].' - '.$row_sy['SY_To'].'</a></li>
     								';
                        }
                        ?>
                    </ul>
                </li>
                <!--<li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-sort-numeric-asc"></i>School Year</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-eye"></i><a href="#">Add School Year</a></li>
                        <li><i class="fa fa-table"></i><a href="#">List of</a></li>
                    </ul>
                </li>-->
                <h3 class="menu-title">Manage</h3><!-- /.menu-title -->
                <li>
                    <a href="reports.php"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Reports</a>
                </li>
                 <li>
                         <a href="data.php"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Data</a>
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
                    
                  <p> Admin <?php echo $_SESSION['firstname']; ?></p> 
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

    <?php
    $sql_ = "SELECT * FROM tbl_sy WHERE syId = '".$_GET['id']."'";
    $result_ = $conn->query($sql_);
    while($row_ = $result_->fetch_assoc()){
     $desc =   $row_["SY_From"] .'-'. $row_["SY_To"];
    }
    ?>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">School Year <?php echo $desc ?></strong>
                <button type="button" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#addOfferedCourse">
                    Add New Offered Course
                </button>
            </div>
            <div class="card-body">
                <table class="table table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Course Offered</th>
                        <th scope="col">Manage</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql_1 = "SELECT A.syId, B.sy_courseId, C.courseId, C.course_description
                    FROM tbl_sy A
                    INNER JOIN tbl_sy_course B ON A.syId = B.syId
                    INNER JOIN tbl_course C ON B.courseId = C.courseId
                    WHERE A.syId = '".$_GET['id']."'";
                    //var_dump($sql_1);
                    $result_1 = $conn->query($sql_1);
                    while($row_1 = $result_1->fetch_assoc()){
                        echo '
     								<tr>
     								<td>'.$row_1["course_description"].'</td>
     								<td>
     								<div class="btn-sm">
     								<a href="view_course_subjects.php?sy_courseid='.$row_1["sy_courseId"].'&syId='.$_GET["id"].'" class="btn btn-outline-primary btn-sm">View Subjects</a>
     								<a href="view_course_enrolled_students.php?sy_courseid='.$row_1["sy_courseId"].'&syId='.$_GET["id"].'" class="btn btn-outline-warning btn-sm">View Enrolled Students</a>
                                    <a class="btn btn-outline-danger btn-sm" onClick="removeData('.$row_1["sy_courseId"].', '.$_GET["id"].')" data-toggle="modal" data-target="#deleteModal">Remove Course</a>
                                 </div>
     								</td>
     								</tr>
     								';
                    }
                    ?>
                    <!--<a href="php/remove_sy_course.php?sy_courseId='.$row_1["sy_courseId"].'&syId='.$_GET["id"].'" class="btn btn-outline-danger btn-sm">Remove Course</a>-->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--Insert codes here-->

</div>

<!--End of Main Design -->

<!--Modals-->

<div class="modal fade" id="addOfferedCourse" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Add Offered Course</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="php/add_sy_course.php" method="post" class="form-horizontal">
                    <div class="card-body">
                        <div class="form-group form-inline">
                        <div class="col-md-2 col"><label><input type="checkbox" name="checkall" id="checkall" value=""/>  Check All</label></div>
                        <div class="col col-md-4"><label for="sy" class="pull-right form-control-label">Load Course From</label></div>
                        <div class="col-md-6 pull-right">
                            <?php
                            $sql_sy_copy = "SELECT * FROM tbl_sy WHERE syId <> '".$_GET['id']."'";
                            $result_sy_copy = $conn->query($sql_sy_copy);
                            echo '
                        <select class="form-control" name="sy_copy" id="sy_copy" >
                        ';
                            if ($result_sy_copy->num_rows > 0) {
                                while($row_sy_copy = $result_sy_copy->fetch_assoc()){
                                    echo '<option value='.$row_sy_copy["syId"].'>'.$row_sy_copy["SY_From"].' - '.$row_sy_copy["SY_To"].'</option>';
                                }
                                echo '</select>';
                            }
                            ?>
                            <a class="btn btn-outline-info btn-sm pull-right" id="btnreload" onClick="reloadData(<?php echo $_GET['id'];?>) ">Reload</a>
                        </div>
                        </div>
                        <div id="table_content">
                            <table class="table table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Course</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql_2 = "SELECT A.*
                            FROM tbl_course A
                            WHERE A.courseId NOT IN
                            (SELECT courseId
                            FROM tbl_sy_course WHERE syId = '".$_GET['id']."')";
                            $result_2 = $conn->query($sql_2);
                            while($row_2 = $result_2->fetch_assoc()){
                                echo '
     								<tr>
     								<td><input type="checkbox"  name="checklist_course[]" value="'.$row_2["courseId"].'"/></td>
     								<td>'.$row_2["course_description"].' <input type="hidden" class="course_tbl" /></td>
     								</tr>
     								';
                            }
                            echo '<input type="hidden" name="sy_id" value="'.$_GET['id'].'"/>';
                            ?>
                            </tbody>
                        </table>
                        </div>
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

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Delete?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="php/remove_sy_course.php?" method="post" class="form-horizontal" enctype = "multipart/form-data">
                    <p>Are you sure you want to delete this course?</p>
                    <input type=hidden name=deleteid id=deleteid >
                    <input type=hidden name=deletesyid id=deletesyid >
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Yes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    </div>
                </form>
            </div>

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


        $("#checkall").click(function(){
            $('input:checkbox').not(this).prop('checked', this.checked);
        });

        $("#sy_copy").on('click', function() {
            //alert( this.value );
            var x = this.value;
            $.ajax({
                type: "GET",
                url: "php/reloadDataforsyCourse.php?id="+x+"&status=1",
                cache: false,
                success: function(html){
                    $("#table_content").empty(html);
                    $("#table_content").append(html);
                }
            });
        });



    } )( jQuery );



    function removeData(sy_courseid, sy_id)
    {

        //alert('test');
        document.getElementById("deleteid").value = sy_courseid;
        document.getElementById("deletesyid").value = sy_id;
        //document.getElementById("edit_sy_to").value = to;

    }

    function reloadData(id){
        ( function ( $ ) {
           $.ajax({
         type: "GET",
         url: "php/reloadDataforsyCourse.php?id="+id+"&status=0",
         cache: false,
         success: function(html){
         $("#table_content").empty(html);
         $("#table_content").append(html);
         }
         });

        } )( jQuery );
    }


</script>

</body>
</html>