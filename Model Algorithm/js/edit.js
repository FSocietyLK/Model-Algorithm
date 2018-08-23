function drop(n){
	var close=document.getElementById("popup"+n);
	close.style.display="none";
}

function fnpop(){
	document.getElementById("fname").style.display="block";
}

function lnpop(){
	document.getElementById("lname").style.display="block";
}

function adrpop(){
	document.getElementById("address").style.display="block";
}

function dobpop(){
	document.getElementById("bday").style.display="block";
}

function empop(){
	document.getElementById("email").style.display="block";
}

function pwdpop(){
	document.getElementById("password").style.display="block";
	document.getElementById("repassword").style.display="block";
}

function cnpop(){
	document.getElementById("country").style.display="block";
}

function discard(fn,ln,adr,bdy,eml){
	document.form1.fname.value=fn;
	document.form1.lname.value=ln;
	document.form1.address.value=adr;
	document.form1.bday.value=bdy;
	document.form1.email.value=eml;
	document.form1.password.value="";
	document.form1.repassword.value="";
	
	for(i=0;i<8;i++)
		document.getElementById("popup"+i).style.display="none";
	
	document.getElementById("fname").style.display="none";
	document.getElementById("lname").style.display="none";
	document.getElementById("address").style.display="none";
	document.getElementById("bday").style.display="none";
	document.getElementById("email").style.display="none";
	document.getElementById("password").style.display="none";
	document.getElementById("repassword").style.display="none";
	document.getElementById("country").style.display="none";
	
	
}

window.onload=function(){
	document.getElementById("form1").onsubmit=function(){
		var fName=document.form1.fname.value;
		var lName=document.form1.lname.value;
		var adDress=document.form1.address.value;
		var bDay=document.form1.bday.value;
		var eMail=document.form1.email.value;
		
		for(i=0;i<8;i++)
			document.getElementById("popup"+i).style.display="none";
		
		if(!isEmpty(fName,"First Name",156,112,176,0)&&fNameValidation()&&!isEmpty(lName,"Last Name",156,112,176,45)&&
		lNameValidation()&&!isEmpty(adDress,"Address",140,88,176,92)&&addressValidation()&&isNull()&&
		!isEmpty(eMail,"Email",128,75,176,260)&&emailValidation()&&passwordValidation(8,16)&&rePasswordValidation())
			return true;
		else
			return false;
	};
};

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
			document.getElementById("popup0").style.display="none";
			document.getElementById("popup1").style.marginLeft=176+"px";
			document.getElementById("popup1").style.marginTop=0+"px";
			document.getElementById("popup1").style.display="block";
			document.getElementById("popup1").style.width=256+"px";
			document.getElementById("msg1").style.width=196+"px";
			document.getElementById("msg1").innerHTML="Enter only letters for your First Name";;
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
				document.getElementById("popup0").style.display="none";
				document.getElementById("popup2").style.marginLeft=176+"px";
				document.getElementById("popup2").style.marginTop=45+"px";
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
			document.getElementById("popup0").style.display="none";
			document.getElementById("popup3").style.marginTop=92+"px";
			document.getElementById("popup3").style.marginLeft=176+"px";
			document.getElementById("popup3").style.height=50+"px";
			document.getElementById("popup3").style.display="block";
			document.getElementById("popup3").style.width=250+"px";
			document.getElementById("msg3").style.width=196+"px";
			document.getElementById("msg3").innerHTML="Enter atleast 15 characters for your address";
			return false;
		}
		else if(address.length>150){
			document.getElementById("popup0").style.display="none";
			document.getElementById("popup3").style.marginTop=92+"px";
			document.getElementById("popup3").style.marginLeft=176+"px";
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
	var bDay=document.form1.bday.value;
	if(!bDay==""||!bDay==null){
		if(!bDay.length==10){
			alert(bDay.length);
			document.getElementById("popup0").style.display="none";
			document.getElementById("popup4").style.marginTop=214+"px";
			document.getElementById("popup4").style.marginLeft=118+"px";
			document.getElementById("popup4").style.display="block";
			document.getElementById("popup4").style.width=172+"px";
			document.getElementById("msg4").style.width=118+"px";
			document.getElementById("msg4").innerHTML="Enter your Birth Date";
			return false;
		}
		else
			return true;
	}
	else{
		document.getElementById("popup0").style.display="none";
		document.getElementById("popup4").style.marginTop=214+"px";
		document.getElementById("popup4").style.marginLeft=118+"px";
		document.getElementById("popup4").style.display="block";
		document.getElementById("popup4").style.width=172+"px";
		document.getElementById("msg4").style.width=118+"px";
		document.getElementById("msg4").innerHTML="Enter your Birth Date";
		return false;
	}
}

function emailValidation(){
	var eMail=document.form1.email.value;
	if(!eMail==""||!eMail==null){
		var atpos=eMail.indexOf("@");
		var dotpos=eMail.lastIndexOf(".");
		if(atpos<1||dotpos+2>=eMail.length||atpos+2>dotpos){
			document.getElementById("popup0").style.display="none";
			document.getElementById("popup5").style.marginTop=260+"px";
			document.getElementById("popup5").style.marginLeft=176+"px";
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

function passwordValidation(min,max){
	var password=document.form1.password.value;
	var exp=/[0-9a-zA-Z]/;
	var exp1=/[!@#$%^&*]/;
	if(!password==""||!password==null){
		if(password.length>=min&&password.length<=max){
			if(password.match(exp)&&password.match(exp1))
				return true;
			else{
				document.getElementById("popup0").style.display="none";
				document.getElementById("popup7").style.marginLeft=176+"px";
				document.getElementById("popup7").style.marginTop=356+"px";
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
			document.getElementById("popup0").style.display="none";
			document.getElementById("popup7").style.marginLeft=176+"px";
			document.getElementById("popup7").style.marginTop=356+"px";
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
		return true;
}

function rePasswordValidation(){
	var password=document.form1.password.value;
	var repassword=document.form1.repassword.value;
	if(!password==""||!password==null){
		if(password==repassword)
			return true;
		else{
			document.getElementById("popup0").style.display="none";
			document.getElementById("popup7").style.marginLeft=176+"px";
			document.getElementById("popup7").style.marginTop=356+"px";
			document.getElementById("popup7").style.height=50+"px";
			document.getElementById("popup7").style.display="block";
			document.getElementById("popup7").style.width=256+"px";
			document.getElementById("msg7").style.width=196+"px";
			document.getElementById("msg7").innerHTML="Password mismatch.refill the password/confirm password";
			//document.form1.password.value="";
			//document.form1.repassword.value="";
			return false;
		}
	}
	else
		return true;
}