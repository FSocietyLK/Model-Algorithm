<?php
	session_start();
	$_SESSION['logged']=true;
	$_SESSION['user']=$dbName;
	$_SESSION['admin']=$dbAdmin;
	if(!empty($_SESSION['user'])||!empty($_SESSION['admin']))
		header("location: index.php");
	else{
		$_SESSION['user']=$username;
		header("location: welcome.php");
	}
?>
