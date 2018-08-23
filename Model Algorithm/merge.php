<?php session_start();?>
<!DOCTYPE HTML>
<html lang="en">
	<!-- Website Developed by bowss corperation | http://www.algorithmmaster.lk |  Here goes our standards -->
	<head>
		<meta charset="utf-8">
		<title>Model Algorithms</title>
		<link type="text/css" rel="stylesheet" href="css/style.css">
		<style>
			.demo a:link, .demo a:visited{
				color:#fff;
				text-decoration:none;
				font-size:15px;
				background:#000000;
				padding:5px;
				padding-left: 8px;
				padding-right: 8px;
			}
			
			.demo a:hover, .demo a:active{
				color:#fff;
				text-decoration:none;
				font-size:15px;
				background:#333333;
				padding:5px;
		padding-left: 8px;
				padding-right: 8px;
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
									<h2 class="title">
										<span>
											Merge <span>Sort</span>
										</span>
									</h2>
									<div class="row2">
										<p>
											Here goes some details about
											<strong>Merge Sort</strong>
										</p>
										<ul class="list-home">
											<li>Merge sort takes advantage of the ease of merging already sorted lists into a new sorted list. </li>
											<li>It starts by comparing every two elements (i.e., 1 with 2, then 3 with 4...) and swapping them if the first should come after the second.</li>
											<li>It then merges each of the resulting lists of two into lists of four, then merges those lists of four, and so on; until at last two lists 
												are merged into the final sorted list Of the algorithms described here, this is the first that scales well to very large lists, 
												because its worst-case running time is O(n log<sub>n</sub>).</li>
											<li>It is also easily applied to lists, not only arrays, as it only requires sequential access, not random access.</li>
											<li>However, it has additional O(n) space complexity, and involves a large number of copies in simple implementations.</li>
											<li>Merge sort has seen a relatively recent surge in popularity for practical implementations, due to its use in the 
												sophisticated algorithm Timsort, which is used for the standard sort routine in the programming languages Python and Java (as of JDK7).</li>
											<li>Merge sort itself is the standard routine in Perl, among others, and has been used in Java at least since 2000 in JDK1.3 </li>
											<li>We can impliment the Merge Sort function like bellow.</li>
										</ul><br />
										<div style="background-color:brown; margin-left: 40px; width: 572px; height: 810px">
											<p><pre><strong>
void MergeSorting::merge(int workSpace[], int lowPtr, int highPtr, int upperBound)
{
	int j=0;<br />
	int lowerBound=lowPtr;<br />
	int mid=highPtr-1;<br />
	int n= upperBound-lowerBound+1;<br />
	while((lowPtr<=mid) && (highPtr<=upperBound))
	{
		if((data[lowPtr])<(data[highPtr]))<br />
		{<br />
			workSpace[j++]= data[lowPtr++];<br />
		}<br />
		else<br />
		{<br />
			workSpace[j++]= data[highPtr++];<br />
		}<br />
	}<br />
	while(lowPtr<= mid)<br />
	{<br />
		workSpace[j++]= data[lowPtr++];<br />
	}<br />
	while(highPtr<=upperBound)<br />
	{<br />
		workSpace[j++]= data[highPtr++];<br />
	}<br />
	for(j=0;j<n;j++)<br />
	{<br />
		data[lowerBound+j]=workSpace[j];<br />
	}<br />
}<br />
											</strong></pre></p>
										</div>
										<br/>
										<div id="demo" class="demo"><a href="mergesort.php">View Demo</a></div>
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