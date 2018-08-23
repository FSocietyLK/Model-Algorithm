<?php session_start();?>
<!DOCTYPE HTML>
<html lang="en">
	<!-- Website Developed by bowss corperation | http://www.bowss.lk |  Here goes our standards -->
	<head>
		<meta charset="utf-8">
		<title>Model Algorithms</title>
		<link type="text/css" rel="stylesheet" href="css/style.css">
		<style>
			.yes{
				float: left;
 				width: 60px;
    			margin-left: 68px;
    			margin-right: 20px;
			}
			
			.yes a:hover{
				padding-left: 9px;
				padding-right: 9px;
			}
			
			.no{
				float: left;
				width: 60px;
				margin-right: 72px;
				margin-left: 20px;
			}
			
			.no a:link{
				padding-left: 12px;
				padding-right: 12px;
			}
			
			.no a:hover{
				padding-left: 13px;
				padding-right: 13px;
			}
		</style>
		<script>
			function popup(){
				var overlay = document.getElementById("overlay");
				var popup = document.getElementById("popuplogin");
				overlay.style.display = "block";
				popup.style.display = "block";
			}
	
			function dropoverlay(){
				document.getElementById("popuplogin").style.display = "none";
				document.getElementById("overlay").style.display = "none";
			}
		</script>
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
					<div class="search">
						<form method="post" action="search.php">
							<input type="search" name="text"/>
							<input type="submit" name="search" value="Search"/>
						</form>
					</div>
					<div class="login">
						<?php
							if($_SESSION['logged']==true)
								echo "<p><a href='user-profile.php'>".$_SESSION['user']."</a> | <a href='#' onclick='popup()'>Log out</a></p>";
							else
								echo "<p><a href='login.php'>Log in</a></p>";
						?>
					</div>
				</div>
				<div class="content">
					<div class="content-in">
						<div class="left-panel">
							<h2>Categories</h2>
							<div class="left-content">
								<ul>
									<li><a href="bubble.php">Bubble Sort</a></li>
									<li><a href="selection.php">Selection Sort</a></li>
									<li><a href="merge.php">Merge Sort</a></li>
								</ul>
							</div>
							<div class="gap">
							</div>
							<h2>Recent Updates</h2>
							<div class="left-content">
								<ol>
									<li>
										<strong>Here go some new updates about the site</strong>
										<a href="news.php" class="more">read more...</a>
									</li>
								</ol>
							</div>
							<div style="width: 240px; height: 250px">
								<br/>
								<img width="240px" height="250px" src="images/faq.jpg"/>
							</div>
						</div>
						<div class="right-panel">
							<div class="right-content">
								<div class="row1">
									<h2 class="title">
										<span>
											Frequency <span>Ask Question</span>
										</span>
									</h2>
								</div>
								<div class="row2">
									<p>
										Here goes some details about 
										<strong>Frequency Ask Question</strong>
									</p>
									<ul class="list-home">			
										<br/>	
										<strong>How do I sign for website...</strong>
										<li> Go to <b><i> Home </i></b></li>
										<li><nav> follow :Login  then <a href="signup.php"> Sing Up</a></nav></li>
										<li> If you see the signup form, fill out your name, email address or phone number, password, birthday and gender. If you don't see the form, click <b><i>Sign Up</i></b>, then fill out the form.</li>
										<li> Click <b> <i>Submit</i>.</b></li>
										<br/>
										<strong> How do I login  my account...</strong>
										<br/>
										<li> Go to <a href="login.php" >Login</a> and enter one of the following:</li>
										<li>Enter your password</li>
										<li><b><i>Submit</i></b></li>
										<br/>
										<strong> How do change my password...
										<br/><br/>
										</strong>
										<p style ="color:black"> If you are  logged into your account, you can change your password from your<b><i> Settings </i></b> there</p>
										<li>Click <b><i>Password</i></b></li>
										<li>Type your current and new password</li>
										<li>Click <b><i>Save Changes</i></b></li>	
										<br/>
										<strong>How can I remove information about myself from  search results...</strong><br/>
										<br/>
										Search engines can't remove content directly from websites, so removing search results from would not remove the content from the web.
										If you want to remove something from the web, you should Contact the  administrator of the web site.
 										the content is posted on and ask him or her to make a change.
 										<br/><br/>
 										<strong> How does this website protect my privacy and keep my information secure...</strong><br/>
 										<br/>
 										We know security and privacy are important to you-and they are important to us, too.
	  									We make it a priority to provide strong security and give you confidence that your information is safe and accessible when you need it.
      									We're constantly working to ensure strong security, protect your privacy,
      									<br /><br />
      									<p style ="color:black"> If you cannot get the sugestion for your question you can ask from us...<nev> <a href="contact.php"> Contact Us </a></nev> 
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer"> 
					<p>&copy; Copyright 2015 Designed by BOWSS Cooperation</p>
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
		<div id="popupmenu" class="popupmenu">
			<div id="overlay" class="overlay">
			</div>
			<div id="popuplogin" class="popuplogin">
				<br/><br/>
				Are you sure you want to log out?
				<br/><br/><br/>
				<div id="yes" class="yes"><a href="logout.php">Yes</a></div>
				<div id="no" class="no"><a href="#" onclick="dropoverlay()">No</a></div>
			</div>
		</div>
	</body>
</html>