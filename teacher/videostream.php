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
include "../sessionLogout.php";

$id =$_GET['id'];
$firstname = $_GET['firstname'];

?>
    <head>
    
    <title> VIDEO STREAM </title>
        <meta http-equiv="content-type" content="text/html"; charset="utf-8"/>
		    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/css/cs-skin-elastic.css">
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
		
		function joinCall()
		{
			vidyoConnector.Connect({
				host : "prod.vidyo.io",
				token : "cHJvdmlzaW9uAGNhdGhwb3QwNUAzOGI1ZTcudmlkeW8uaW8ANjM2ODg0ODY2NTUAADVmMjBmOGRjMzEwZDc0ODU5MWQ3YWFkZDQzOWE3ZjE0MzhhZTVjMjRjMTU4MzFkNjdiYjAzNGRkYzA0OTgwNGYzZmJiYzc0OTljOTA5M2Y2ZmE5OTUwZWU2ODFlMzc3Ng==",
				displayName : "<?php echo $firstname; ?>",
				resourceId : "pnhs_room_<?php echo $id; ?>",
				onSuccess : function (){
					console.log("Connected!! ");
				},
				onFailure : function (reason)
				{
					console.log("Connection failiure "+reason);
					
				},
				onDisconnected : function (reason)
				{
						console.log("Disconnected!!");
				}
				
			})
		}
          
           
        
        </script>
        
        
        
         <script src = "https://static.vidyo.io/latest/javascript/VidyoClient/VidyoClient.js?onload=onVidyoClientLoaded"> </script>
    <h3> Video Stream</h3>
     <a href="deletestream.php?id=<?php echo $id; ?>"
                                    class="btn btn-outline-danger btn-sm">End Call</a>
         <div id = "renderer"> </div>
    </body>
    
    
    
</html>