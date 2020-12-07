// JavaScript Document
function contact_validation()
{
	// Validation of Name:
	name=document.getElementById("name").value;
	if(name=="")
	{
		alert("Please Enter the The Name");
		document.getElementById("name").focus();
		return false;
	}
	// Validation of Email:
	email=document.getElementById("email").value;
		if(email=="")
		{
			alert ("Please Enter E-mail ID");
			document.getElementById("email").focus();
			return false;
		}
		// Validation Email must be correct form:
		if(email.indexOf("@") ==-1 || email.lastIndexOf(".")==0 || email.indexOf("@")>email.lastIndexOf("."))
		{
			alert ("Invalid Email // As like milan@gmail.com");
			email=document.getElementById("email").focus();
			return false;
		}
	// Validation of Phone:
	phone_num=document.getElementById("phone_num").value;
	if(phone_num=="")
	{
		alert("Please Enter the The Phone Number");
		document.getElementById("phone_num").focus();
		return false;
	}
	// Validation of Name:
	mes=document.getElementById("mes").value;
	if(mes=="")
	{
		alert("Please Enter the The Message");
		document.getElementById("mes").focus();
		return false;
	}
}
