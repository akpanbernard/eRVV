<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html lang="en" xml:lang="en">
	<head>
		<title>eRVV |KSUSTA|</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		<link rel="shortcut icon" type="image/jpeg" href="./images/KSUSTA.png" />
		<script language="javascript" src="dept.js"></script>

		<script language="javascript">
		function check()
			{
				var check = /[0-9]/;
				var x=document.regForm;
				var re;	
				var re2;	
			if(x.name.value.length == 0)
			{
				alert("You Must Enter Candidate Name");
				x.name.focus();
				return false;
			} 
			
			if(x.no.value.length != 12)
			{
				alert("Candidate Number Must Be 12 Digits");
				x.no.focus();
				return false;
			} 
			
			if(!check.test(number)){
			window.alert("You must provide a valid number.");
		return false;
		}
			
			if(x.center.value.length == "")
			{
				alert("Exam Center cannot be Empty");
				x.center.focus();
				return false;
			} 
			
			if(x.dob.value == "")
			{
				alert("You Must enter your Date of Birth");
				x.dob.focus();
				return false;
			}
			re = /[a-z]/;
			if(re.test(x.dob.value))
			{
				alert("Incorrect Date of Birth");
				x.dob.focus();
				return false;
			} 
			re = /[A-Z]/;
			if(re.test(x.dob.value))
			{
				alert("Incorrect Date of Birth");
				x.dob.focus();
				return false;
			} 
			re = /[@,#,$,%,^,&,(,),_,=,+,!,|,~,?,.,*,',",,-,{,},;,:,<,>,\[,\], ]/;
			if(re.test(x.dob.value))
			{
				alert("Incorrect Date of Birth");
				x.dob.focus();
				return false;
			} 
			
			re = /[a-z]/;
			re2 = /[A-Z]/;
			if(!re.test(x.no.value) && !re2.test(x.no.value))
			{
				alert("Candidate Number must contain Alphabeths");
				x.no.focus();
				return false;
			} 
			re2 = /[0-9]/;
			if(!re2.test(x.no.value))
			{
				alert("Candidate Number must contain Numeric Values");
				x.no.focus();
				return false;
			} 
			
			re = /[@,#,$,%,^,&,(,),_,=,+,!,|,~,?,.,*,',",,-,{,},;,:,<,>,\[,\], ]/;
			if(re.test(x.can_no.value))
			{
				alert("Candidate Number Contains Invalid Characters");
				x.can_no.focus();
				return false;
			} 
			
			re = /[#,$,%,^,&,(,),\\,=,+,!,|,~,?,*,',",,-,{,},;,:,<,>,\[,\], ]/;
			if(re.test(x.email.value))
			{
				alert("Email contains Invalid Characters!");
				x.email.focus();
				return false;
			} 
			re = /[@]/;
			if(!re.test(x.email.value))
			{
				alert("Missing  '@'  in Email");
				x.email.focus();
				return false;
			} 
			re = /[.]/;
			if(!re.test(x.email.value))
			{
				alert("Missing  '.'  in Email");
				x.email.focus();
				return false;
			} 

			return true; 
		
			}
		</script>
	</head>

	<body>
		<header>
<img src="./images/header.png" style="position:relative; left:13%;" />
		</header>