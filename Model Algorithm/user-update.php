<?php
	require 'connect.php';
	if(isset($_POST["update"])){
		if(!empty($_POST["fname"])&&!empty($_POST["lname"])&&!empty($_POST["address"])&&!empty($_POST["dob"])&&!empty($_POST["email"])&&!empty($_POST["password"])){
			$fName=$_POST["fname"];
			$lName=$_POST["lname"];
			$aDdress=$_POST["address"];
			$gEnder=$_POST["gender"];
			$dOb=$_POST["dob"];
			$eMail=$_POST["email"];
			$cOuntry=$_POST["country"];
			$uSerType=$_POST["userType"];
	
			$query="UPDATE `db`.`user` SET `fname`='$fName',`lname`='$lName',`address`='$aDdress',`gender`='$gEnder',
									`dob`='$dOb',`email`='$eMail',`country`='$cOuntry' WHERE username='$uname'";
					
			if(mysql_query($query)){
				mysql_close();
				header("location: user-profile.php");
			}
		}
		
		else if(!empty($_POST["fname"])&&!empty($_POST["lname"])&&!empty($_POST["address"])&&!empty($_POST["dob"])&&
		!empty($_POST["email"])&&empty($_POST["password"])){
			$fName=$_POST["fname"];
			$lName=$_POST["lname"];
			$aDdress=$_POST["address"];
			$gEnder=$_POST["gender"];
			$dOb=$_POST["dob"];
			$eMail=$_POST["email"];
			$passWord=$password;
			$cOuntry=$_POST["country"];
			$uSerType=$_POST["userType"];
	
			$query="UPDATE `db`.`user` SET `fname`='$fName',`lname`='$lName',`address`='$aDdress',`gender`='$gEnder',
					`dob`='$dOb',`email`='$eMail',`password`='$passWord',`country`='$cOuntry' WHERE username='$uname'";
					
			if(mysql_query($query)){
				mysql_close();
				header("location: user-profile.php");
			}
		}
	}
?>