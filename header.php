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
				var x=document.regForm;
				var re;	
				var re2;	
			if(x.name.value.length == 0)
			{
				alert("You Must Enter Candidate Name");
				x.name.focus();
				return false;
			} 
			
			if(x.can_no.value.length != 12)
			{
				alert("Candidate Number Must Be 12 Digits");
				x.can_no.focus();
				return false;
			} 
			
			re = /[a-z]/;
			re2 = /[A-Z]/;
			if(!re.test(x.can_no.value) && !re2.test(x.can_no.value))
			{
				alert("Candidate Number must contain Alphabeths");
				x.can_no.focus();
				return false;
			} 
			re2 = /[0-9]/;
			if(!re2.test(x.can_no.value))
			{
				alert("Candidate Number must contain Numeric Values");
				x.can_no.focus();
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
		</script>

		
	</head>

	<body>
		<header>
<img src="./images/header.png" style="position:relative; left:13%;" />
		</header>
		<div class="menu">
		<ul>
		<li><a href="verify.php">HOME</a></li>
		<li><a href="about.php">ABOUT</a></li>
		<li><a href="./admin/">ADMIN</a></li>
		<li><a href="index.php">LOGOUT</a></li>
		</ul>
		</div>