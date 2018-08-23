<?php session_start();?>
<!DOCTYPE HTML>
<html lang="en">
	<!-- Website Developed by bowss corperation | http://www.bowss.lk |  Here goes our standards -->
	<head>
		<meta charset="utf-8">
		<title>Model Algorithms</title>
		<link type="text/css" rel="stylesheet" href="css/style.css">
		<script type="text/javascript" src="js/contact.js"></script>
		<style>
			.contact td{
				padding-right: 15px;
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
							<br/>
							<div style="width: 240px; height: 260px">
								<img style="width: 260px height 240px" src="images/contact.jpg" />
							</div>
							<br/>
						</div>
						<div class="right-panel">
							<div class="right-content">
								<div class="row1">
									<h2 class="title">
										<span>
											Contact <span>Details...</span>
										</span>
									</h2>
									<div class="row2">
										<p>
											If you have any question about  
											<strong>Model Algorithms</strong>
											...?<br />
											If you have any Suggesions about
											<strong>Model Algorithms</strong>
											...?<br />
											If so you can contact us directly using following details.
										</p>
										<br />
										<form name="form2" method="post" action="contact.php" onsubmit="return formvalidate()">
											<table cellpadding="4" cellspacing="5" style="font:13px sans-serif">
												<tr>
													<td style="padding-right:70px">Name:</td>
													<td><input type="text" name="name" id="name" size="30"/></td>
												</tr>
												<tr>
													<td>E-mail:</td>
													<td><input type="text" name="email" id="email" size="30"/></td>
												</tr>
												<tr>
													<td>Subject:</td>
													<td><input type="text" name="subject" id="subject" size="30"/></td>
												</tr>
												<tr>
													<td>Message:</td>
													<td><textarea name="message" id="message" cols="27" rows="5"></textarea></td>
												</tr>
												<tr>
													<td>&nbsp;</td>
													<td align="right"><input type="submit" name="submit" value="Send" /></td>
												</tr>
											</table>
										</form>
										<ul>
											<p><strong>Contact Us...</strong></p><br />
											<table class="contact">
												<tr>
													<th style="text-align: left">Name</th>
													<th style="text-align: left">E-mail</th>
													<th style="text-align: left">Contact Number</th>
												</tr>
												<tr>
													<td><nav><a href="https://www.facebook.com/omal.waidyarathna?fref=ts" style="text-decoration: none">Mr. D.Y.O.Waidyarathne</a></nav></td>
													<td>yasey.omal@mysliit.lk</td>
													<td>077-5777301</td>
												</tr>
												<tr>
													<td><nav><a href="https://www.facebook.com/profile.php?id=100009039188808" style="text-decoration: none">Mr. B.M.H.Battage</a></nav></td>
													<td>bhagya.madushanka@mysliit.lk</td>
													<td>071-0836868</td>
												</tr>
												<tr>
													<td><nav><a href="https://www.facebook.com/profile.php?id=100009113014387&fref=ts" style="text-decoration: none">Miss. S.T. Palliyaguru</a></nav></td>
													<td>sachini.thaksala@mysliit.lk</td>
													<td>077-5777301</td>
												</tr>
												<tr>
													<td><nav><a href="" style="text-decoration: none">Miss. K.V.W. Siriwardana</a></nav></td>
													<td>kalsha.weronika@mysliit.lk</td>
													<td>071-6274621</td>
												</tr>
												<tr>
													<td><nav><a href="https://www.facebook.com/profile.php?id=100001081866162&fref=ts" style="text-decoration: none">Mr. S.P. Senarath</a></nav></td>
													<td>shimira.senarath@mysliit.lk</td>
													<td>071-6961901</td>
												</tr>
											</table>
										</ul>
										<br/>
										<p><strong>You can meet us...</strong></p>
										<p class="contact">
											<br />
											<b>
											BOWSS Cooperation (PVT)Ltd,<br/>
											No:48,<br />
											8<sup>th</sup> floor,<br/>
											H.N.B. Tower,<br/>
											Galle Road,<br/>
											Colombo-11.<br/>
											Tel: 0112921150<br/></b><b>
											</b>
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