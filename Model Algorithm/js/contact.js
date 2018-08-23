function formvalidate(){
	var name=document.form2.name.value;
	var email=document.form2.email.value;
	var subject=document.form2.subject.value;
	var message=document.form2.message.value;
				
	if(nameValidation(name))
		if(emailValidation(email))
			if(subjectValidation(subject))
				if(messageValidation(message))
					return true;
				else
					return false;
			else
				return false;
		else
			return false;
	else
		return false;
}
			
function isEmpty(elemValue,field){
	if((elemValue=="")||(elemValue==null)){
		alert("Enter "+field);
		return true;	
	}
	else
		return false;
}
			
function nameValidation(elemValue){
	var exp=/^[a-zA-Z]+$/;
	if(!isEmpty(elemValue,"Name")){
		if(elemValue.match(exp))
			return true;
		else{
			alert("Enter only text for your name");
			return false;
		}
	}
	else
		return false;
}

function subjectValidation(elemValue){
	var exp=/[a-zA-Z]/;
	if(!isEmpty(elemValue,"Subject")){
		if(elemValue.length>=10&&elemValue.length<=25){
			if(elemValue.match(exp))
				return true;
			else{
				alert("Enter only text for the subject");
				return false;
			}
		}
		else if(elemValue.length<10){
				alert("Enter atleast 10 letters for the subject");
				return false;
		}
		else if(elemValue.length>25){
			alert("Enter below 25 letters for the subject");
			return false;
		}
	}
	else
		return false;
}

function emailValidation(elemValue){
	if(!isEmpty(elemValue,"E-mail")){
		var atpos=elemValue.indexOf("@");
		var dotpos=elemValue.lastIndexOf(".");
			if(atpos<1||dotpos+2>=elemValue.length||atpos+2>dotpos){
				alert("Enter a valid email address");
				return false;
			}
			else
				return true;
	}
	else
		return false;
}

function messageValidation(elemValue){
	if(!isEmpty(elemValue,"Message")){
		if(elemValue.length>=15&&elemValue.length<=2500)
			return true;
		else if(elemValue.length<15){
			alert("Enter atleast 10 letters for the message");
			return false;
		}
		else if(elemValue.length>2500){
			alert("Enter below 25 letters for the message");
			return false;
		}
	
	}
	else
		return false;
}