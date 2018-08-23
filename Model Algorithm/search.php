<?php require 'connect.php';?>
<?php session_start();?>
<!DOCTYPE HTML>
<html lang="en">
	<!-- Website Developed by bowss corperation | http://www.algorithmmaster.lk |  Here goes our standards -->
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
			
			.title{
				background-color: #646363;
			}
			
			.row2{
				padding: 14px 35px 15px 44px;
				font-size: 13px;
			}
			
			.search-content{
				text-decoration: none;
				color: #fafafa;
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
						</div>
						<div class="right-panel">
							<div class="right-content">
								<?php
									if(isset($_REQUEST["search"])){
										if(!empty($_REQUEST["text"])){
											$text=$_REQUEST["text"];
											
											$query="SELECT url,title_front,title_back,content FROM `db`.`sort` WHERE title LIKE '%$text%'";
											$result=mysql_query($query);
											
											if(mysql_num_rows($result)!=0){
												while($row=mysql_fetch_array($result)){
													$url=$row['url'];
													$titleFront=$row['title_front'];
													$titleBack=$row['title_back'];
													$content=$row['content'];
													echo "<div class='row1'>";
													echo "<h2 class='title'>";
													echo "<span>";
													echo "<a class='search-content' href='$url'>$titleFront<span> $titleBack</span></a><br/>";
													echo "</span>";
													echo "</h2>";
													echo "<div class='row2'>";
													echo "<p>";
													echo "$content";
													echo "</p>";
													echo "<br/><hr/>";
													echo "</div>";
												}
											}
											else{
												echo "<div class='row1'>";
												echo "<h2 class='title'>";
												echo "<span>";
												echo "Search Result <span> : $text</span> Not found<br/>";
												echo "</span>";
												echo "</h2>";
											}
										}
										else{
											$query="SELECT url,title_front,title_back,content FROM `db`.`sort`";
											$result=mysql_query($query);
											
											while($row=mysql_fetch_array($result)){
												$url=$row['url'];
												$titleFront=$row['title_front'];
												$titleBack=$row['title_back'];
												$content=$row['content'];
												echo "<div class='row1'>";
												echo "<h2 class='title'>";
												echo "<span>";
												echo "<a class='search-content' href='$url'>$titleFront<span> $titleBack</span></a><br/>";
												echo "</span>";
												echo "</h2>";
												echo "<div class='row2'>";
												echo "<p>";
												echo "$content";
												echo "</p>";
												echo "<br/><hr/>";
												echo "</div>";
											}
										}
									}
								?>
							</div>
						</div>
					</div>
				</div></div></div>
				<div class="footer" style="height:60px">
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