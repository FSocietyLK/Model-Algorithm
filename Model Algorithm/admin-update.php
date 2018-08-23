<?php
	require 'connect.php';
	if(isset($_POST["update"])){
		if(!empty($_POST["password"])){
			$fName=$_POST["fname"];
			$lName=$_POST["lname"];
			$aDdress=$_POST["address"];
			$gEnder=$_POST["gender"];
			$dOb=$_POST["dob"];
			$eMail=$_POST["email"];
			$passWord=$_POST["password"];
			$cOuntry=$_POST["country"];
			$uSerType=$_POST["userType"];
	
			$query="UPDATE `db`.`user`
					SET `fname`='$fName',`lname`='$lName',`address`='$aDdress',`gender`='$gEnder',
									`dob`='$dOb',`email`='$eMail',`password`='$passWord',`country`='$cOuntry'
					WHERE username='$uname'";
					
			if(mysql_query($query)){
				mysql_close();
				header("location: admin.php");
			}
		}
		
		else if(empty($_POST["password"])){
			$fName=$_POST["fname"];
			$lName=$_POST["lname"];
			$aDdress=$_POST["address"];
			$gEnder=$_POST["gender"];
			$dOb=$_POST["dob"];
			$eMail=$_POST["email"];
			$passWord=$password;
			$cOuntry=$_POST["country"];
			$uSerType=$_POST["userType"];
	
			$query="UPDATE `db`.`user`
					SET `fname`='$fName',`lname`='$lName',`address`='$aDdress',`gender`='$gEnder',
									`dob`='$dOb',`email`='$eMail',`password`='$passWord',`country`='$cOuntry'
					WHERE username='$uname'";
					
			if(mysql_query($query)){
				mysql_close();
				header("location: admin.php");
			}
		}
	}
?>