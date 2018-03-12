<?php


$con = mysql_connect('localhost', 'root', '');
mysql_select_db('chat',$con);



$result = mysql_query("SELECT * FROM logs order by id DESC");


while($extract = mysql_fetch_array($result)){
    
    echo $extract['username'] . " : " . $extract['msg'] . "<br />";
}

?>
