<?php
	session_start();
	if(empty($_SESSION['user']))
		header("location: user-valid.php");
?>
<!DOCTYPE HTML>
<html lang="en">
	<!-- Website Developed by bowss corperation | http://www.bowss.lk |  Here goes our standards -->
	<head>
		<meta charset="utf-8">
		<title>Model Algorithms</title>
		<script type="text/javascript" src="js/bubble.js"></script>
		<link type="text/css" rel="stylesheet" href="css/style.css">
		<style>
			#demo{
				width: 607px;
				height: 300px;
    			transform: rotate(180deg);
			}
			
			.d{
				width: 25px;
				height: 250px;
				border: 1px solid black;
				border-top-style: none;
				margin-right:3px;
				float: left;
				background-color: #F1F1F1;
			}
			
			.butn{
				padding-top: 30px;
				padding-left: 3px;
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
	<body onload="return rand()">
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
						</div>
						<div class="right-panel">
							<div class="right-content">
								<div class="row1">
									<h2 class="title">
										<span>
											Merge <span>Sort</span>
										</span>
									</h2>
									<div class="row2">
										<div id="demo">
											<div class="d" id="d0"> </div>
											<div class="d" id="d1"> </div>
											<div class="d" id="d2"> </div>
											<div class="d" id="d3"> </div>
											<div class="d" id="d4"> </div>
											<div class="d" id="d5"> </div>
											<div class="d" id="d6"> </div>
											<div class="d" id="d7"> </div>
											<div class="d" id="d8"> </div>
											<div class="d" id="d9"> </div>
											<div class="d" id="d10"> </div>
											<div class="d" id="d11"> </div>
											<div class="d" id="d12"> </div>
											<div class="d" id="d13"> </div>
											<div class="d" id="d14"> </div>
											<div class="d" id="d15"> </div>
											<div class="d" id="d16"> </div>
											<div class="d" id="d17"> </div>
											<div class="d" id="d18"> </div>
											<div class="d" id="d19"> </div>
										</div>
										<div class="butn">
											<table cellpadding="5">
												<td>
													<input type="button" value="Random" onclick="return rand()"/>
												</td>
												<td>
													<input type="button" value="Sort" onclick="return bSort()"/>
												</td>
												<td>
													<input type="button" value="Step" onclick="return stepp()"/>
												</td>
											</table>
										</div>
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

