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
							<div class="gap">
							</div>
							<div>
								<img width="240px" height="260px" src="images/about_us.jpg" />
							</div>	
							
						</div>
						<div class="right-panel">
							<div class="right-content">
								<div class="row1">
									<h2 class="title">
										<span>
											About <span>Us</span>
										</span>
									</h2>
									<div class="row2">
										<h2 style="color: black; text-align: center">BOWSS Cooperation</h2>
											<p style="text-align: justify"><br/><br/>
											We are a leading <b>Software developing and Web developing company</b> in Sri Lanka. 
											<b>We are members of Software developing and Web developing Head council in Sri Lanka.</b> 
											From more than ten years <b>BOWSS Cooperation</b> has been empowering our web sites and 
											software to the users making a difference in their business worlds and day today lives. 
											<b>Uniqueness of our web sites and software have equipped our users to easily maintain 
											their systems and data bases using our Web sites and software. 
											Another uniqueness is we develop a parallel software to debug errors always.</b>
											So customers can easily maintain our software and web sites in the field. 
											This is the way how we give our great service to our customers.
											</p><br/>
											<p style="text-align: justify">
											<b>BOWSS Cooperation</b> was stablished in 2004. We opened our doors to more than hundred employees 
											and creative web designers, software designers and software engineers in our Head Branch 
											in Colombo-11. We are design million number of software, web sites, and systems for our users 
											for various aspects from the beginning.. We try to give a marvelous service to our customers.
											</p><br/>
											<p style="text-align: justify">
											<b>Our company provides so many packages to our customers.</b> Because of that customers mostly 
											select our company to get great services for them. Hence we have got good ratings from our 
											customers from the beginning. <b>That is the our succsess we gain from the beginning.</b>
											</p><br/><br/>
										<h2 style="color: white; text-align: center">Our Vision</h2>
										<p style="text-align: justify; color: black"><br/>
											<b>TO BE ACOMPANY OF EXELLENCE TO ADVANCE AND DISSEMINATE OUR PRODUCTS TO PRODUCE WORLD CLASS INTELLENCTUALS
											TO THE BEST SERVE FOR OUR CUSTOMERS.</b>
										</p><br/>
										<h2 style="color: white; text-align: center">Our Mission</h2>
										<p style="text-align: justify; color: black"><br/>
											<b>TO CREATE A MARVOLOUS PRODUCTS TO OUR CUSTOMERS AND GIVES A GREAT AND MORE EFFICIENT SERVICE 
											TO UOR NATION AND BEYOND.</b>
										</p>
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