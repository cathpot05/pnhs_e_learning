<?php
$username = $_REQUEST['username'];
$msg = $_REQUEST['msg'];

$con = mysql_connect('localhost', 'root', '');
mysql_select_db('chat',$con);

mysql_query("INSERT INTO logs (`username`, `msg`, `tmp_name`) VALUES ('$username', '$msg', '.$current_date')");

$result = mysql_query("SELECT * FROM logs order by id DESC");, 


while($extract = mysql_fetch_array($result)){
    
    echo $extract['username'] . " : " . $extract['msg'] . " : " . $['current_date'] . "<br />";
}

?>
