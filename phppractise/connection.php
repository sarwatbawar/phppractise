<?php

$db_name ="phpclass";
$db_user = "root";//local server ka user root hota h
$db_pas = "";
$db_host ="localhost";
//create connection
//database host,user,password,name lst py dn gy
$connect = new mysqli($db_host,$db_user,$db_pas,$db_name);
//check connection
//By Default php ki trf sy ->connect_error
if($connect->connect_error){
 echo "Connection error";
}
else{
	echo "Database Connected";
}
?>