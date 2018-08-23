<?php session_start();?>
<!DOCTYPE HTML>
<html lang="en">
	<!-- Website Developed by bowss corperation | http://www.algorithmmaster.lk |  Here goes our standards -->
	<head>
		<meta charset="utf-8">
		<title>Model Algorithms</title>
		<link type="text/css" rel="stylesheet" href="css/style.css">
	<style>
		.row2{
			padding-top: 20px;
			padding-bottom: 10px;
			height: 100px;
		}
		
		.row2 a:link{
				text-decoration: none;
		}
			
		.row2 a:hover{
			text-decoration: underline;
		}
		
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
				<div class="content" style="width: 989px;">
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
						</div>
						<div class="right-panel">
							<div class="right-content">
								<div class="row1">
									<h2 class="title" style="height: 85px">
										<marquee height="40" behavior="slide" direction="up" scrolldelay="100">
											<p>Welcome to</p>
										</marquee>
										<marquee height="40"behavior="slide"direction="up" scrolldelay="500" 
											<p style="color: #FABFB7">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Model Algorithms<p/>
										</marquee>
									</h2>
									<div class="row2">
										<marquee height="60"behavior="slide"direction="down" scrolldelay="500">
											<p style="font-size: 13px"><strong>Thank You</strong> for visiting our website and  <strong>Registering</strong> with us. This site will improve your knowledge about Sorting Algorithms. We have sent you a email so please check your inbox.<br/><br/>
											<nav>Please <a href="index.php">click</a> here to continue...</nav></p>
										</marquee>
									</div>
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
				<div id="no" class="yes"><a href="#" onclick="dropoverlay()">No</a></div>
			</div>
		</div>
	</body>
</html>