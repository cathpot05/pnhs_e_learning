<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->



<html class="no-js" lang=""> <!--<![endif]-->

<head>

    <?php


    include "../sessionLogout.php";

    include "validator.php";
    include "../db.inc.php";
    //include"php/generate1.php";


    ?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Teacher's Account Information | Pantay National High School</title>

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
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>




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


            <!--note: mamaya remove yung sidebar image/text --> <a class="navbar-brand" href="index1.php"><img src="../images/pantaylogo.png" alt="logor"></a>



        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">

                <li class="active">
                    <a href="index1.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>

                </li>
                <?php
                    echo'

                    <h3 class="menu-title">Accounts</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Teacher</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-bars"></i><a href="ListofTeachers.php">List of Teachers</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="TeacherAddAccount.php">Add Accounts</a></li>
                            <li><i class="fa fa-book"></i><a href="Teachermodules.php">Modules</a></li>
                            <li><i class="fa fa-share-square-o"></i><a href="ui-social-buttons.html">Request</a></li>
                            <li><i class="fa fa-id-card-o"></i><a href="ui-cards.html">Schedules</a></li>


                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Students</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="ListofStudent.php">List of Students</a>
                            </li>
                            <li><i class="fa fa-table"></i><a href="StudentAddAccount.php">Add Account</a></li>
                              <li><i class="fa fa-table"></i><a href="tables-data.html">Subjects</a></li>
                              <li><i class="fa fa-table"></i><a href="tables-data.html">Quizzes</a></li>

                              <li><i class="fa fa-table"></i><a href="tables-data.html">Schedule</a></li>
                        </ul>
                    </li>
                     <h3 class="menu-title">Manage</h3><!-- /.menu-title -->

                    <li>
                        <a href="#"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Data</a>

                         <a href="#"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Reports</a>
                         <a href="#"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Messages</a>

                    </li>
                    ';



                ?>
               
                <li>


                    <a href="../logout.php"> <i class="menu-icon ti-power-off"></i>Log out </a>


                </li>



</aside><!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->



<!--Forms   last -->



<script>

    function lettersOnly(input){
        var regex = /[^a-z]/gi;
        input.value = input.value.replace(regex, "");
    }


</script>



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
                        <input required = "" class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
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
                <h1>Teacher's Account Information: </h1>
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
<?php


    echo'
        <div class="content mt-3">

            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-success">Note</span> Good Day, currently your are in Administrators page/view. Thank you!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
               </div>
            </div>';

?>



<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Course and Subject's Information</strong>
        </div>
        <div class="card-body card-block">
            <form action="php/addsubject.php"method="post" class="form-horizontal">


                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Courses</label></div>
                    <div class="col-12 col-md-9">

                        <input type="hidden" value="<?php echo $_GET['id']?>" name="teacherid">
                        <select class="form-control" name="courses" id="courses" >
                            <?php
                            $sql = "SELECT * FROM tbl_course";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()){
                                echo '
                   <option value='.$row["courseid"].'>'.$row["course"].'</option>
                   ';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row form-group" id="subjects_container">
                </div>

        </div>

        <div class="card-footer">
            <div class="col-6 col-md-6">
                <button onclick="check()" class="btn btn-outline-primary btn-lg btn-block">Add Subjects</button></div>


            <div class="col-6 col-md-6">
                <button type="button" class="btn btn-outline-danger btn-lg btn-block">Cancel</button></div>

        </div>
        </form>
    </div>
    <div class="card">

    </div>
</div>


</div>
</div>
</div>

</div>
</div>
</div>

</div><!--/.col-->


</div><!--/.col-->


</div><!--/.col-->



</div>
</div>
</div>


</div>


<!-- /# card -->
</div>


</div> <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->

<!---------------------------------Tables---->






<!--<script src="../assets/js/vendor/jquery-2.1.4.min.js"></script>-->
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
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

<!--
<script type="text/javascript">
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




</script>-->



</body>
</html>

<script type="text/javascript">
    $("#courses").on('change', function() {
        //alert( this.value );
        var x = this.value;
        $.ajax({
            type: "GET",
            url: "loadSubject.php?courseid="+x,
            cache: false,
            success: function(html){
                $("#subjects_container").empty(html);
                $("#subjects_container").append(html);
            }
        });
    });


</script>