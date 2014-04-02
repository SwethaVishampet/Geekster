<?php
include "api.php";
$username=$_POST['user_name'];
$mysql=mysql_query("INSERT INTO user (item_name,price,category_id)
    VALUES ('$name','10','0')");
	if($mysql)
	echo 'success';
	else
	echo 'error';
	die; 
?>