<?php
	require 'connect.php';
	
	$uname=$_SERVER['QUERY_STRING'];
	$query="DELETE FROM `db`.`user` WHERE username='$uname'";
	
	if(mysql_query($query)){
		mysql_close();
		header("location: admin.php");
	}
?>