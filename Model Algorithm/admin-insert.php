<?php
	require 'connect.php';
	if(isset($_POST["insert"])){
		if(!empty($_POST["fname"])&&!empty($_POST["lname"])&&!empty($_POST["address"])&&!empty($_POST["gender"])&&!empty($_POST["dob"])&&!empty($_POST["email"])&&!empty($_POST["username"])&&!empty($_POST["password"])&&!empty($_POST["country"])&&!empty($_POST["userType"])){
			$fname=$_POST["fname"];
			$lname=$_POST["lname"];
			$address=$_POST["address"];
			$gender=$_POST["gender"];
			$dob=$_POST["dob"];
			$email=$_POST["email"];
			$username=$_POST["username"];
			$password=$_POST["password"];
			$country=$_POST["country"];
			$userType=$_POST["userType"];
			
			$queryValid="SELECT username FROM `db`.`user` WHERE username='$username'";
			$recordValid=mysql_query($queryValid);
			
			if(mysql_num_rows($recordValid)==0){
				if($userType=="Net"){
					$query="INSERT INTO `db`.`user` (`fname`,`lname`,`address`,`gender`,`dob`,`email`,`username`,`password`,`country`)
							VALUES ('$fname','$lname','$address','$gender','$dob','$email','$username','$password','$country')";
					
					if(mysql_query($query)){
						require 'mail.php';
						mysql_close();
						header("location: admin.php");
					}
				}
				else if($userType=="Admin"){
					$queryMax="SELECT MAX(`admin_id`) `max` FROM `db`.`user`";
					$recordMax=mysql_query($queryMax);
					$row=mysql_fetch_array($recordMax);
					$max=$row['max']+1;
					
					$query="INSERT INTO `db`.`user` (`admin_id`,`fname`,`lname`,`address`,`gender`,`dob`,`email`,`username`,`password`,`country`,`user_type`)
							VALUES ('$max','$fname','$lname','$address','$gender','$dob','$email','$username','$password','$country','$userType')";
					
					if(mysql_query($query)){
						mysql_close();
						header("location: admin.php");
					}
				}
			}
		}
	}
?>