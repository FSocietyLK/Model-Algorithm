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
											Bubble <span>Sort</span>
										</span>
									</h2>
									<div class="row2">
										<p>
											Here goes some details about
											<strong>Bubble Sort</strong>
										</p>
										<ul class="list-home">
											<li>Bubble sort is a simple sorting algorithm. </li>
											<li>The algorithm starts at the beginning of the data set. </li>
											<li>It compares the first two elements, and if the first is greater than the second, it swaps them.</li>
											<li>It continues doing this for each pair of adjacent elements to the end of the data set.</li>
											<li>It then starts again with the first two elements, repeating until no swaps have occurred on the last pass.</li>
											<li>This algorithm's average and worst-case performance is O(n<sup>2</sup>), so it is rarely used to sort large, unordered data sets. </li>
											<li>Bubble sort can be used to sort a small number of items (where its asymptotic inefficiency is not a high penalty).</li>
											<li>Bubble sort can also be used efficiently on a list of any length that is nearly sorted (that is, the elements are not significantly out of place).</li>
											<li>For example, if any number of elements are out of place by only one position (e.g. 0123546789 and 1032547698), bubble sort's exchange will get them 
											in order on the first pass, the second pass will find all elements in order, so the sort will take only 2n time.</li>
											<li>We can impliment the Bubble Sort function like bellow.</li>
										</ul><br />
										<div style="background-color:brown; margin-left:  40px; width: 534px; height: 505px">
											<p><pre><strong>
void Sorting::bubbleSort(int data[], int size)
{
	double temp;<br />
	//Inner loop controls the number of passes.<br />
	for(int pass=1; pass<size; pass++)<br />
	{<br />
		//Outer loop perform the comparisson & interchange.<br />
		for(int i=0; i<size-pass; i++)<br />
		{<br />
			//compares whether upper is larger than lower value.<br />
			if(data[i]>data[i+1])<br />
			{<br />
				temp=data[i];<br />
				data[i]=data[i+1];<br />
				data[i+1]=temp;<br />
			}<br />
		}<br />
	}<br />
}<br />
											</strong></pre></p>
										</div>
										<br/>
										<div id="demo" class="demo"><a href="bubblesort.php">View Demo</a></div>
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