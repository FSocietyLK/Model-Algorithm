<?php session_start();?>
<?php
	require 'connect.php';
	$uname=$_SERVER['QUERY_STRING'];
	$query="SELECT * FROM `db`.`user` WHERE username='$uname'";
	$record=mysql_query($query);
			
	if(!mysql_num_rows($record)==0){
		while($row=mysql_fetch_array($record)){
				$fname=$row['fname'];
				$lname=$row['lname'];
				$address=$row["address"];
				$gender=$row["gender"];
				$dob=$row["dob"];
				$email=$row["email"];
				$password=$row["password"];
				$country=$row["country"];
				$userType=$row["user_type"];
		}
	}
	mysql_close();
?>
<!DOCTYPE HTML>
<html lang="en">
	<!-- Website Developed by bowss corperation | http://www.bowss.lk |  Here goes our standards -->
	<head>
		<meta charset="utf-8">
		<title>Model Algorithms</title>
		<script type="text/javascript" src="js/edit.js"></script>
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
				height: 600px;
				padding-bottom: 0px;
			}
			
			.row2{
				padding-bottom: 20px;
			}
			
			.row2 td{
				padding-right: 15px;
			}
			
			.row2 a:link{
				text-decoration: none;
			}
			
			.row2 a:hover{
				text-decoration: underline;
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
											<span>Update User</span> Form
										</span>
									</h2>
									<div class="row2">
										<form name="form1" id="form1" method="post" action="<?php require 'admin-update.php';?>">
											<table cellpadding="10" cellspacing="2" style="font:13px sans-serif">
												<div class="popup" id="popup0" style="margin-left:-35px" onclick="return drop(0)">
													<div class="close" id="close0"><a href="javascript:void(0);" style="text-decoration: none;color: white">x</a></div>
													<div class="msg" id="msg0"> </div>
												</div>
												<tr>
													<td>First Name:</td>
													<td style="width:162px"><label><?php echo "$fname";?></label></td>
													<td><a href="javascript:void(0);" onclick="fnpop()">Change</a></td>
													<td height="21px"><input type="text" name="fname" id="fname" size="28" value="<?php echo $fname;?>" style="display:none;width:200px"/></td>
												</tr>
												<div class="popup" id="popup1" onclick="return drop(1)">
													<div class="close" id="close1"><a href="javascript:void(0);" style="text-decoration: none;color: white">x</a></div>
													<div class="msg" id="msg1"> </div>
												</div>
												<tr>
													<td>Last Name:</td>
													<td><label><?php echo "$lname";?></label></td>
													<td><a href="javascript:void(0);" onclick="lnpop()">Change</a></td>
													<td height="21px"><input type="text" name="lname" id="lname" size="28" value="<?php echo $lname;?>" style="display:none;width:200px"/></td>
												</tr>
												<div class="popup" id="popup2" onclick="return drop(2)">
													<div class="close" id="close2"><a href="javascript:void(0);" style="text-decoration: none;color: white">x</a></div>
													<div class="msg" id="msg2"> </div>
												</div>
												<tr>
													<td>Address:</td>
													<td><label><?php echo "$address";?></label></td>
													<td><a href="javascript:void(0);" onclick="adrpop()">Change</a></td>
													<td height="70px"><textarea name="address" id="address" cols="25" rows="4" style="display:none;width:197px"><?php echo $address;?></textarea></td>
												</tr>
												<div class="popup" id="popup3" onclick="return drop(3)">
													<div class="close" id="close3"><a href="javascript:void(0);" style="text-decoration: none;color: white">x</a></div>
													<div class="msg" id="msg3"> </div>
												</div>
												<tr>
													<td>Gender:</td>
													<td><label><?php echo "$gender";?></label></td>
													<td></td>
													<td height="21px">
														<input type="radio" name="gender" value="Male" checked/>Male
														<input type="radio" name="gender" value="Female"/>Female
													</td>
												</tr>
												<tr>
													<td>Date of Birth:</td>
													<td><label><?php echo "$dob";?></label></td>
													<td><a href="javascript:void(0);" onclick="dobpop()">Change</a></td>
													<td height="23px"><input type="date" name="dob" id="bday" size="15" value="<?php echo $dob;?>" style="display:none"/></td>
												</tr>
												<div class="popup" id="popup4" onclick="return drop(4)">
													<div class="close" id="close4"><a href="javascript:void(0);" style="text-decoration: none;color: white">x</a></div>
													<div class="msg" id="msg4"> </div>
												</div>
												<tr>
													<td>E-mail:</td>
													<td><label><?php echo "$email";?></label></td>
													<td><a href="javascript:void(0);" onclick="empop()">Change</a></td>
													<td height="21px"><input type="text" name="email" id="email" size="28" value="<?php echo $email;?>" style="display:none;width:200px"/></td>
												</tr>
												<div class="popup" id="popup5" onclick="return drop(5)">
													<div class="close" id="close5"><a href="javascript:void(0);" style="text-decoration: none;color: white">x</a></div>
													<div class="msg" id="msg5"> </div>
												</div>
												<tr>
													<td>Username:</td>
													<td><label><?php echo "$uname";?></label></td>
												</tr>
												<div class="popup" id="popup6" onclick="return drop(6)">
													<div class="close" id="close6"><a href="javascript:void(0);" style="text-decoration: none;color: white">x</a></div>
													<div class="msg" id="msg6"> </div>
												</div>
												<tr>
													<td>Password:</td>
													<td><label>**************</label></td>
													<td><a href="javascript:void(0);" onclick="pwdpop()">Change</a></td>
													<td height="21px">
														<input type="password" name="password" id="password" size="28" style="display:none;width:200px"/>
													</td>
												</tr>
												<tr>
													<td style="padding-right:0px">Confirm Password:</td>
													<td><label>**************</label></td>
													<td></td>
													<td height="21px">
														<input type="password" name="repassword" id="repassword" size="28" style="display:none;width:200px"/>
													</td>
												</tr>
												<div class="popup" id="popup7" onclick="return drop(7)">
													<div class="close" id="close7"><a href="javascript:void(0);" style="text-decoration: none;color: white">x</a></div>
													<div class="msg" id="msg7"> </div>
												</div>
												<tr>
													<td>Country:</td>
													<td><label><?php echo "$country";?></label></td>
													<td><a href="javascript:void(0);" onclick="cnpop()">Change</a></td>
													<td height="21px">
														<select id="country" name="country" style="display:none">
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
													<td><label><?php echo "$userType";?></label></td>
													<td></td>
													<td height="21px">
														<input type="radio" name="userType" value="Admin" checked/>Admin
														<input type="radio" name="userType" value="Net"/>Net User
													</td>
												</tr>
												<tr>
													<td align="right">
														<input type="button" id="cancel" name="cancel" value="Cancel" onclick="discard('<?php echo $fname;?>','<?php echo $lname;?>','<?php echo $address;?>','<?php echo $dob;?>','<?php echo $email;?>')"/>
													</td>
													<td style="padding-right:0px">
														<input type="submit" id="update" name="update" style="margin-right:22px" value="Update"/>
														<a href="admin.php"><input type="button" id="done" name="done" value="Done"/></a>
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
	</body>
</html>  