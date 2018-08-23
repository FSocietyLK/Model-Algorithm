<?php
	require 'connect.php';
	if(isset($_POST["signup"])){
		if(!empty($_POST["fname"])&&!empty($_POST["lname"])&&!empty($_POST["address"])&&!empty($_POST["gender"])&&!empty($_POST["dob"])&&!empty($_POST["email"])&&!empty($_POST["username"])&&!empty($_POST["password"])&&!empty($_POST["country"])){
			$fname=$_POST["fname"];
			$lname=$_POST["lname"];
			$address=$_POST["address"];
			$gender=$_POST["gender"];
			$dob=$_POST["dob"];
			$email=$_POST["email"];
			$username=$_POST["username"];
			$password=$_POST["password"];
			$country=$_POST["country"];
			
			$queryValid="SELECT username FROM `db`.`user` WHERE username='$username'";
			$recordValid=mysql_query($queryValid);
			
			if(mysql_num_rows($recordValid)==0){
			
				$query="INSERT INTO `db`.`user` (`fname`,`lname`,`address`,`gender`,`dob`,`email`,`username`,`password`,`country`)
						VALUES ('$fname','$lname','$address','$gender','$dob','$email','$username','$password','$country')";
			
				if(mysql_query($query)){
					require 'mail.php';
					require 'session.php';
				}
			}
		}
	}
	mysql_close($con);
?>