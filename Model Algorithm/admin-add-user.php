<?php session_start();?>
<?php
	require 'connect.php';
		echo "<!DOCTYPE HTML>\n";
		echo "<html lang='en''>\n";
		$query="SELECT username FROM `db`.`user`";
		$record=mysql_query($query);
		$i=0;
		while($row=mysql_fetch_array($record)){
			$arr[$i++]=$row['username'];
		}
		$c=count($arr);
		echo "<script>\n";
		echo "function error(){\n";
		echo "var val=document.form1.uname.value;\n";
		echo "if(";
		for($i=0;$i<$c-1;$i++)
			echo "(val=='$arr[$i]')||";
		echo "(val=='$arr[$i]')){\n";
		echo "\tdocument.getElementById('error').innerHTML='Username exist';\n";
		echo "\treturn false;\n}\n";
		echo "else{";
		echo "\n\tdocument.getElementById('error').innerHTML='';\n";
		echo "\treturn true;\n}\n";
		echo "}\n";
		echo "</script>\n";
	mysql_close($con);
?>
	<!-- Website Developed by bowss corperation | http://www.bowss.lk |  Here goes our standards -->
	<head>
		<meta charset="utf-8">
		<title>Model Algorithms</title>
		<script type="text/javascript" src="js/insert.js"></script>
		<link type="text/css" rel="stylesheet" href="css/style.css">
		<style>
			.title{
				background-color: #646363;
			}
			
			.right-panel{
				width: 697px;
				margin-right: 248px;
			}

			.right-content{
				width: 697px;
				height: 635px;
				padding-bottom: 0px;
			}
			
			.error{
				font-size: 11px;
				height: 3px;
				color: #6b0000;
				margin-top: 6px;
			}
			
			.popup{
				display:none;
				background-color: #c04848;
				position:absolute;
				left:50%;
				top:53%;
				width:250px;
				height:40px;
				margin-left: -37px;
				margin-top: 2px;
				z-index:100000;
			}
			
			.popup::before{
				top: 0;
				left: -9px;
				border-top: 9px solid #C04848;
				border-left: 9px solid transparent;
				content: "";
				position: absolute;
			}
			
			.overlay{
				display:none;
				position:fixed;
				left:0px;
				top:0px;
				width:100%;
				height:100%;
				background:#000;
				opacity:0.4;
				z-index:99999;
			}

			.popupbox{
				display:none;
				position:fixed;
				left:50%;
				top:50%;
				color: black;
				font-family: sans-serif;
				font-weight: normal;
				font-size: large;
				text-align: center;
				width:300px;
				height:150px;
				margin-top:-75px;
				margin-left:-150px;
				background:#797979;
				border:13px solid rgba(0,0,0,0.1);
				border-radius: 5px;
				z-index:100000;
				background-clip: padding-box;
				background-clip: content-box;
			}
			
			.close{
				padding: 2px 6px 3px 6px;
				font-family: Arial,sans-serif;
				font-size: 16px;
				font-weight: normal;
				color: #fcb2b1 !important;
				line-height: 1;
				float: right;
				border: 1px solid rgba(255,255,255,0.2);
				margin-top: 8px;
				margin-right: 8px;
			}
			
			.msg{
				padding-right: 5px;
				padding: 13px;
				color: white;
				width: 170px;
			}
		</style>
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
				</div>
				<div class="content">
					<div class="content-in">
						<div class="right-panel">
							<div class="right-content">
								<div class="row1">
									<h2 class="title">
										<span>
											<span>Create User</span> Form
										</span>
									</h2>
									<div class="row2">
										<form name="form1" method="post" onsubmit="return error()&&formValidate()" action="<?php require 'admin-insert.php';?>">
											<table cellpadding="10" cellspacing="5" style="font:13px sans-serif">
												<div class="popup" id="popup0" style="margin-left:-35px" onclick="return drop(0)">
													<div class="close" id="close0"><a href="javascript:void(0);" style="text-decoration: none;color: white">x</a></div>
													<div class="msg" id="msg0"> </div>
												</div>
												<tr>
													<td style="padding-right:66px">First Name:</td>
													<td><input type="text" name="fname" id="fname" size="28" onchange="fNameValidation()"/></td>
												</tr>
												<div class="popup" id="popup1" onclick="return drop(1)">
													<div class="close" id="close1"><a href="javascript:void(0);" style="text-decoration: none;color: white">x</a></div>
													<div class="msg" id="msg1"> </div>
												</div>
												<tr>
													<td>Last Name:</td>
													<td><input type="text" name="lname" id="lname" size="28" onchange="lNameValidation()"/></td>
												</tr>
												<div class="popup" id="popup2" onclick="return drop(2)">
													<div class="close" id="close2"><a href="javascript:void(0);" style="text-decoration: none;color: white">x</a></div>
													<div class="msg" id="msg2"> </div>
												</div>
												<tr>
													<td style="position: absolute; padding-top: 8px">Address:</td>
													<td><textarea name="address" id="address" cols="25" rows="5" onchange="addressValidation()"></textarea></td>
												</tr>
												<div class="popup" id="popup3" onclick="return drop(3)">
													<div class="close" id="close3"><a href="javascript:void(0);" style="text-decoration: none;color: white">x</a></div>
													<div class="msg" id="msg3"> </div>
												</div>
												<tr>
													<td>Gender:</td>
													<td>
														<input type="radio" name="gender" value="Male" checked/>Male
														<input type="radio" name="gender" value="Female"/>Female
													</td>
												</tr>
												<tr>
													<td>Date of Birth:</td>
													<td><input type="date" name="dob" id="bday" size="15" onchange="isNull()"/></td>
												</tr>
												<div class="popup" id="popup4" onclick="return drop(4)">
													<div class="close" id="close4"><a href="javascript:void(0);" style="text-decoration: none;color: white">x</a></div>
													<div class="msg" id="msg4"> </div>
												</div>
												<tr>
													<td>E-mail:</td>
													<td><input type="text" name="email" id="email" size="28" onchange="emailValidation()"/></td>
												</tr>
												<div class="popup" id="popup5" onclick="return drop(5)">
													<div class="close" id="close5"><a href="javascript:void(0);" style="text-decoration: none;color: white">x</a></div>
													<div class="msg" id="msg5"> </div>
												</div>
												<tr>
													<td>Username:</td>
													<td style="padding-bottom: 0px">
														<div><input type="text" name="username" id="uname" size="28" onclick="error()" onchange="error()&&unameValidation()" onkeypress="error()"/></div>
														<div class="error" id="error"></div>
													</td>
												</tr>
												<div class="popup" id="popup6" onclick="return drop(6)">
													<div class="close" id="close6"><a href="javascript:void(0);" style="text-decoration: none;color: white">x</a></div>
													<div class="msg" id="msg6"> </div>
												</div>
												<tr>
													<td>Password:</td>
													<td style="padding-top: 13px">
														<input type="password" name="password" id="password" size="28" onchange="passwordValidation(8,16)"/>
													</td>
												</tr>
												<div class="popup" id="popup7" onclick="return drop(7)">
													<div class="close" id="close7"><a href="javascript:void(0);" style="text-decoration: none;color: white">x</a></div>
													<div class="msg" id="msg7"> </div>
												</div>
												<tr>
													<td>Confirm Password:</td>
													<td><input type="password" name="repassword" id="repassword" size="28" onchange="rePasswordValidation()"/></td>
												</tr>
												<div class="popup" id="popup8" onclick="return drop(8)">
													<div class="close" id="close8"><a href="javascript:void(0);" style="text-decoration: none;color: white">x</a></div>
													<div class="msg" id="msg8"> </div>
												</div>
												<tr>
													<td>Country:</td>
													<td>
														<select id="country" name="country">
															<option value="Australia">Australia</option>
															<option value="Brazil">Brazil</option>
															<option value="Canada">Canada</option>
															<option value="China">China</option>
															<option value="France">France</option>
															<option value="Germany">Germany</option>
															<option value="India">India</option>
															<option value="Italy">Italy</option>
															<option value="Japan">Japan</option>
															<option value="Korea">Korea</option>
															<option value="Malaysia">Malaysia</option>
															<option value="Mexico">Mexico</option>
															<option value="Newzealand">New Zealand</option>
															<option value="Pakistan">Pakistan</option>
															<option value="Russia">Russia</option>
															<option value="Singapore">Singapore</option>
															<option value="Southafrica">South Africa</option>
															<option value="Spain">Spain</option>
															<option value="SriLanka">SriLanka</option>
															<option value="Sweden">Sweden</option>
															<option value="Switzerland">Switzerland</option>
															<option value="United Kingdom">United Kingdom</option>
															<option value="United States">United States</option>
														</select>
													</td>
												</tr>
												<tr>
													<td>User Type:</td>
													<td>
														<input type="radio" name="userType" value="Admin" checked/>Admin
														<input type="radio" name="userType" value="Net"/>Net User
													</td>
												</tr>
												<tr>
													<td align="right">
														<a href="admin.php"><input type="button" id="done" name="done" value="Done"/></a>
													</td>
													<td>
														<input type="submit" name="insert" value="Insert"/>
													</td>
												</tr>
											</table>
										</form>
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
		<div id="overlay" class="overlay">
		</div>
		<div id="popupbox" class="popupbox">
			<br/><br/><br/>
			Please Wait...
		</div>
	</body>
</html>