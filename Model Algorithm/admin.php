<?php require 'connect.php';?>
<?php session_start();?>
<!DOCTYPE HTML>
<html lang="en">
	<!-- Website Developed by bowss corperation | http://www.bowss.lk |  Here goes our standards -->
	<head>
		<meta charset="utf-8">
		<title>Model Algorithms</title>
		<script type="text/javascript" src="js/edit.js"></script>
		<link type="text/css" rel="stylesheet" href="css/style.css">
		<style>
			.content{
				width: 989px;
			}
			
			.right-panel{
				width: 697px;
				margin-right: 248px
			}

			.right-content{
				width: 697px;
				height: 160px;
				padding-bottom:0px
			}
			
			.title{
				background-color: #646363;
			}
			
			.user{
				clear: both;
				padding-top: 20px;
			}
			
			.result{
				clear: both;
				float: left;
				font-family: monospace;
				font-size: 14px;
				padding-top: 20px;
				width: 500px;
			}
			
			.result td{
				padding-right: 50px;
				padding-bottom: 8px;
			}
			
			.result a:link{
				text-decoration: none;
			}
			
			.result a:hover{
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
						<h1>Administration</h1>
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
						<div class="right-panel">
							<div id="right-content" class="right-content">
								<div class="row1">
									<h2 class="title">
										<span>
											<span>Administration</span> of User Data
										</span>
									</h2>
									<div class="row2">
										<div class="user">
											<form method="post" action="">
												<table>
													<td><a href="admin-add-user.php"><input type="button" name="insert" value="Add User"/></a></td>
													<td style="padding-left:135px"><input type="search" name="name"/></td>
													<td><input type="submit" name="search" value="Search"/></td>
												</table>
											</form>
										</div>
										<div class="result">
											<?php
												if(isset($_REQUEST["search"])){
													if(!empty($_REQUEST["name"])){
														$name=$_REQUEST["name"];
														
													$query="SELECT fname,username FROM `db`.`user` WHERE fname LIKE '%$name%' OR lname LIKE '%$name%' OR username LIKE '%$name%'";
													$result=mysql_query($query);
													
													$count=mysql_num_rows($result);
													echo "<script>\n";
													echo "\tdocument.getElementById('right-content').style.height=$count*26+190+'px';\n";
													echo "</script>\n";
													if(mysql_num_rows($result)!=0){
														echo "<table>";
														while($row=mysql_fetch_array($result)){
															$fname=$row['fname'];
															$uname=$row['username'];
															echo "<tr>";
															echo "<td>$fname</td><td>$uname</td>";
															echo "<td><a href='admin-edit-user.php'>Edit</a></td>";
															echo "<td><a href='admin-delete.php?".$uname."'>Delete</a></td>";
															echo "</tr>";
														}
														echo "</table>";
													}
													else{
														echo "<p>";
														echo "Search Result : $name Not found<br/>";
														echo "</p>";
													}
												}
												else{
													$query="SELECT * FROM `db`.`user`";
													$result=mysql_query($query);
													
													$count=mysql_num_rows($result);
													echo "<script>\n";
													echo "\tdocument.getElementById('right-content').style.height=($count-2)*26+190+'px';\n";
													echo "</script>\n";
													echo "<table>";
													while($row=mysql_fetch_array($result)){
														$fname=$row['fname'];
														$uname=$row['username'];
														echo "<tr>";
														echo "<td>$fname</td><td>$uname</td>";
														echo "<td><a href='admin-edit-user.php?".$uname."'>Edit</a></td>";
														echo "<td><a href='admin-delete.php?".$uname."'>Delete</a></td>";
														echo "</tr>";
													}
													echo "</table>";
												}
											}
											?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="footer" style="height:60px">
						<p>&copy; Copyright 2015 Designed by bowss corperation</p>
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