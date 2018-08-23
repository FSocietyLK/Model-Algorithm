function popup(){
      var overlay = document.getElementById("overlay");
      var popup = document.getElementById("popupbox");
      overlay.style.display = "block";
      popup.style.display = "block";
}

function drop(n){
	var close=document.getElementById("popup"+n);
	close.style.display="none";
}

function formValidate(){
	var fname=document.form1.fname.value;
	var lname=document.form1.lname.value;
	var address=document.form1.address.value;
	var bday=document.form1.bday.value;
	var email=document.form1.email.value;
	var uname=document.form1.uname.value;
	var password=document.form1.password.value;
	var repassword=document.form1.repassword.value;
	
	for(i=0;i<8;i++)
		document.getElementById("popup"+i).style.display="none";
	
	if(!isEmpty(fname,"First Name",156,112,-37,2))
		if(fNameValidation())
			if(!isEmpty(lname,"Last Name",156,112,-37,48))
				if(lNameValidation())
					if(!isEmpty(address,"Address",140,88,-35,92))
						if(addressValidation())
							if(!isEmpty(bday,"Date of Birth",158,106,-111,240))
								if(isNull())
									if(!isEmpty(email,"Email",128,75,-37,285))
										if(emailValidation())
											if(!isEmpty(uname,"Username",152,96,-37,329))
												if(unameValidation())
													if(!isEmpty(password,"Password",156,112,-37,374))
														if(passwordValidation(8,16))
															if(!isEmpty(repassword,"Confirm Password",190,144,-27,423))
																if(rePasswordValidation()){
																	popup();
																	return true;
																}
																else
																	return false;
															else
																return false;
														else
															return false;
													else
														return false;
												else
													return false;
											else
												return false;
										else
											return false;
									else
										return false;
								else
									return false;
							else
								return false;
						else
							return false;
					else
						return false;
				else
					return false;
			else
				return false;
		else
			return false;
	else
		return false;
}

function isEmpty(elemValue,field,w,l,x,y){
	if(elemValue==""||elemValue==null){
		document.getElementById("popup0").style.marginTop=y+"px";
		document.getElementById("popup0").style.marginLeft=x+"px";
		document.getElementById("popup0").style.display="block";
		document.getElementById("popup0").style.width=w+"px";
		document.getElementById("msg0").style.width=l+"px";
		document.getElementById("msg0").innerHTML="Enter "+field;
		return true;
	}
	else
		return false;
}

function fNameValidation(){
	var fname=document.form1.fname.value;
	var exp=/^[a-zA-Z]+$/;
	if(!fname==""||!fname==null){
		if(fname.match(exp))
			return true;
		else{
			document.getElementById("popup1").style.display="block";
			document.getElementById("popup1").style.width=256+"px";
			document.getElementById("msg1").style.width=196+"px";
			document.getElementById("msg1").innerHTML="Enter only letters for your First Name";
			return false;
		}
	}
	else
		return false;
}

function lNameValidation(){
	var lname=document.form1.lname.value;
	var exp=/^[a-zA-Z]+$/;
		if(!lname==""||!lname==null){
			if(lname.match(exp))
				return true;
			else{
				document.getElementById("popup2").style.marginTop=48+"px";
				document.getElementById("popup2").style.display="block";
				document.getElementById("popup2").style.width=256+"px";
				document.getElementById("msg2").style.width=196+"px";
				document.getElementById("msg2").innerHTML="Enter only letters for your Last Name";
				return false;
			}
		}
		else
			return false;
}

function addressValidation(){
	var address=document.form1.address.value;
	if(!address==""||!address==null){
		if(address.length>=10&&address.length<=150)
			return true;
		else if(address.length<10){
			document.getElementById("popup3").style.marginTop=92+"px";
			document.getElementById("popup3").style.marginLeft=-35+"px";
			document.getElementById("popup3").style.height=50+"px";
			document.getElementById("popup3").style.display="block";
			document.getElementById("popup3").style.width=250+"px";
			document.getElementById("msg3").style.width=196+"px";
			document.getElementById("msg3").innerHTML="Enter atleast 15 characters for your address";
			return false;
		}
		else if(address.length>150){
			document.getElementById("popup3").style.marginTop=92+"px";
			document.getElementById("popup3").style.marginLeft=-35+"px";
			document.getElementById("popup3").style.height=50+"px";
			document.getElementById("popup3").style.display="block";
			document.getElementById("popup3").style.width=250+"px";
			document.getElementById("msg3").style.width=196+"px";
			document.getElementById("msg3").innerHTML="Enter below 250 characters for your address";
			return false;
		}
	}
}

function isNull(){
	var bday=document.form1.bday.value;
	if(!bday==""||!bday==null){
		if(!bday.length==10){
			document.getElementById("popup4").style.display="block";
			document.getElementById("popup4").style.width=256+"px";
			document.getElementById("msg4").style.width=196+"px";
			document.getElementById("msg4").innerHTML="Enter your Birth Date";
			return false;
		}
		else
			return true;
	}
	else
		return false;
}

function emailValidation(){
	var email=document.form1.email.value;
	if(!email==""||!email==null){
		var atpos=email.indexOf("@");
		var dotpos=email.lastIndexOf(".");
		if(atpos<1||dotpos+2>=email.length||atpos+2>dotpos){
			document.getElementById("popup5").style.marginTop=285+"px";
			document.getElementById("popup5").style.marginLeft=-37+"px";
			document.getElementById("popup5").style.display="block";
			document.getElementById("popup5").style.width=210+"px";
			document.getElementById("msg5").style.width=154+"px";
			document.getElementById("msg5").innerHTML="Enter a valid email address";
			return false;
		}
		else
			return true;
	}
	else
		return false;
}

function unameValidation(){
	var uname=document.form1.uname.value;
	var exp=/^[0-9a-zA-Z]+$/;
		if(!uname==""||!uname==null){
			if(uname.match(exp))
				return true;
			else{
				document.getElementById("popup6").style.marginTop=329+"px";
				document.getElementById("popup6").style.display="block";
				document.getElementById("popup6").style.width=206+"px";
				document.getElementById("msg6").style.width=154+"px";
				document.getElementById("msg6").innerHTML="Enter letters and numbers for your username";
				return false;
			}
		}
		else
			return false;
}

function passwordValidation(min,max){
	var password=document.form1.password.value;
	var exp=/[0-9a-zA-Z]/;
	var exp1=/[!@#$%^&*]/;
	if(!password==""||!password==null){
		if(password.length>=min&&password.length<=max){
			if(password.match(exp)&&password.match(exp1))
				return true;
			else{
				document.getElementById("popup7").style.marginTop=374+"px";
				document.getElementById("popup7").style.height=78+"px";
				document.getElementById("popup7").style.display="block";
				document.getElementById("popup7").style.width=246+"px";
				document.getElementById("msg7").style.width=190+"px";
				document.getElementById("msg7").innerHTML="Password must be a combination of uppercase characters, lowercase characters, numeric characters and a special character.";
				//document.form1.password.value="";
				//document.form1.repassword.value="";
				return false;
			}
		}
		else{
			document.getElementById("popup7").style.marginTop=374+"px";
			document.getElementById("popup7").style.height=50+"px";
			document.getElementById("popup7").style.display="block";
			document.getElementById("popup7").style.width=256+"px";
			document.getElementById("msg7").style.width=196+"px";
			document.getElementById("msg7").innerHTML="Enter a Password in between "+min+" and "+max+" characters";
			//document.form1.password.value="";
			//document.form1.repassword.value="";
			return false;
		}
	}
	else
		return false;
}

function rePasswordValidation(){
	var password=document.form1.password.value;
	var repassword=document.form1.repassword.value;
	if(!repassword==""||!repassword==null){
		if(password==repassword)
			return true;
		else{
			document.getElementById("popup8").style.marginTop=423+"px";
			document.getElementById("popup8").style.display="block";
			document.getElementById("popup8").style.height=52+"px";
			document.getElementById("popup8").style.width=216+"px";
			document.getElementById("msg8").style.width=165+"px";
			document.getElementById("msg8").innerHTML="Password mismatch.refill the password/confirm password";
			//document.form1.password.value="";
			//document.form1.repassword.value="";
			return false;
		}
	}
	else
		return false;
}