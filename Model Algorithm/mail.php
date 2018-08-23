<?php
	$to="$email";
	$subject="Welcome to world of algorithm";
	$message="Dear $fname $lname,\n
			  \t$username account has been created for you.use this credential to log in to your account\n
			  username: $username\n
			  password: $password\n";
	$headers='From: yasey.omal@my.sliit.lk' . "\r\n" .
	         'MIME-Version: 1.0' . "\r\n" .
	         'Content-type: text/html; charset=utf-8';
			 
	mail($to,$subject,$message,$headers);
?>