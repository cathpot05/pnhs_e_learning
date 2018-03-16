<html>

<?php
//include "VidyoConnector.js";
//include "VidyoConnector.css";
//include "VidyoClient.js";
//include "VidyoClientDispatcher.js";
//include "VidyoClientTransportElectron.js";
//include "VidyoClientTransportElectron.js";
//include "VidyoClientTransportPlugin.js";
//include "VidyoClientTransportWeb.js";
//include "VidyoClientTransportWebRTC.js";
$id = $_GET['videoId'];
$name = $_GET['name'];
$subj = $_GET['sub'];
//
?>
<head>
    <title>Pantay National High School</title>
    <meta http-equiv="content-type" content="text/html"; charset="utf-8"/>
    <link rel="shortcut icon" href="../images/pantaylogo1_.bmp">
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../assets/scss/style.css">
    <link href="../assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
<script>
    var vidyoConnector;
    function onVidyoClientLoaded(status){

        console.log("VidyoClient load state - " + status.state);
        if (status.state = "READY")
        {
            VC.CreateVidyoConnector({
                viewId:"renderer",
                viewStyle: "VIDYO_CONNECTORVIEWSTYLE_DEFAULT",
                remoteParticipants: 16, //participants to be.... ayusin na lang pagkaya pa
                logFileFilter: "error",
                logFileName:"",
                userData:""
            }).then(function (vc){
                console.log("Create Success!");
                vidyoConnector = vc;
                joinCall();
            }).catch(function(error){
            });
        }
    }

    /*//<?php echo $name .' (Student)';?>
     //<?php echo 'pnhs_room_'.$id ;?>*/
    function joinCall()
    {
        vidyoConnector.Connect({
            host : "prod.vidyo.io",
            token : "cHJvdmlzaW9uAGNhdGhwb3QwNUA2MDUyOGMudmlkeW8uaW8ANjM2ODgzOTQ2NzEAAGE0OTk3ZDNlYTcyZTFlMzU2NTBkOTgzNzdhNDU4MjViN2M4ZGY3NmU0OWQzMGU2ODNiMTNjYjRlOGNjMTQ1YjE3NDBkMjE3NjdjYWJkNjhkMzdhNjQ2N2MzZTJhMjQzMA==",
            displayName : "<?php echo $name . '(Student)';?>",
            resourceId : "<?php echo 'pnhs_room_'. $id ;?>",
            onSuccess : function (){
                console.log("Connected!! ");
            },
            onFailure : function (reason)
            {
                console.log("Connection failiure:"+reason);
            },
            onDisconnected : function (reason)
            {
                console.log("Disconnected!!");
            }
        })
    }
</script>

<script src = "https://static.vidyo.io/latest/javascript/VidyoClient/VidyoClient.js?onload=onVidyoClientLoaded"> </script>
<a class="btn btn-outline-danger btn-sm" href="index.php">End Call</a>
<div class="container">
    <h2 style="align-items: center;">Video Streaming for Subject: <?php echo $subj;?></h2>

    <div id = "renderer"> </div>
</div>
</body>





</html>