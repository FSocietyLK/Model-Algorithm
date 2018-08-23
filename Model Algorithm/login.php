<!DOCTYPE HTML>
<html>
	<html lang="en">
	<!-- Website Developed by bowss corperation | http://www.bowss.lk |  Here goes our standards -->
	<head>
		<meta charset="utf-8">
		<title>Model Algorithms</title>
		<link type="text/css" rel="stylesheet" href="css/style.css">
		<style>
			.content-in{
				width: 667px;
				padding-left: 322px;
				padding-top: 35px;
				padding-bottom: 75px;
				padding-right: 0px;
			}
			
			.login-panel{
				width: 356px;
				float: left;
				text-align: center;
			}

			.login-panel h2{
				font-family: "Times New Roman", Times, serif;
				font-size: 24px;
				line-height: 48px;
				color: #f1f1f1;
				background-image: url(images/login-head.jpg);
				background-repeat: no-repeat;
				background-position: left top;
				height: 48px;
			}
				
			.form{
				background-color: #f1f1f1;
				background-image: url(images/login-bottom.jpg);
				background-repeat: no-repeat;
				background-position: left bottom;
				clear: both;
				padding-bottom: 40px;
				padding-top: 25px;
			}
			
			.error{
				font-size: 11px;
				color: #cc0000;
				height: 5px;
				margin-top: 10px;
			}
			
			.user{
				font-size: 16px;
				padding: 15px;
				margin-right: 143px;
			}
			
			.login{
				width: 223px;
				height: 30px;
				margin-left: 47px;
				padding: 20px;
				float: none;
			}
			
			.submit{
				font-size: 17px;
				width: 223px;
				height: 30px;
			}
			
			.input{
				width: 220px;
				height: 25px;
			}
			
			.signup{
				font-size: 16px;
			}
			
			.signup a{
				text-decoration: none;
			}
		</style>
	</head>
	<body>
		<div class="main">
			<div class="page">
				<div class="header">
					<div class="banner">
						<marquee class="animation" scrollamount="15" loop="loop">
							<h1>Model Algorithms</h1>
						</marquee>
					</div>
					<div class="topmenu">
						<ul>
							<li style="border-left: medium none;">
								<a href="index.php">Home</a>
							</li>
							<li><a href="faq.php">FAQ</a></li>
							<li><a href="about.php">About Us</a></li>
							<li><a href="contact.php">Contact Us</a></li>
							<?php
								if(!empty($_SESSION['admin']))
									echo "<li><a href='admin.php'>Administrate</a></li>";
							?>
						</ul>
					</div>
				</div>
				<div class="content">
					<div class="content-in">
						<div class="login-panel">
							<h2>Sign in</h2>
							<div class="form">
								<form method="post" action="<?php require 'validate.php';?>">
									<div class="user">
										Username :
									</div>
									<div>
										<input type="text" class="input" name="uname"/>
									</div>
									<div class="user">
										Password :
									</div>
									<div>
										<input type="password" class="input" name="pass"/>
									</div>
									<div class="error">
										<?php echo $error;?>
									</div>
									<div class="login">
										<input type="submit" class="submit" name="login" value="Log in"/>
									</div>
									<div class="signup">
										Don't have an Account? <a href="signup.php">Sign up</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="footer">
					<p>&copy; Copyright 2015 Designed by BOWSS Corperation</p>
					<ul>
						<li style="border-left: medium none;">
							<a href="index.php">Home</a>
						</li>
						<li><a href="faq.php">FAQ</a></li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="contact.php">Contact Us</a></li>
						<?php
							if(!empty($_SESSION['admin']))
								echo "<li><a href='admin.php'>Administrate</a></li>";
						?>
					</ul>
				</div>
			</div>
		</div>
	</body>
</html>