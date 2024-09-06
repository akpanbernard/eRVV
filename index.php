<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html lang="en" xml:lang="en">
	<head>
		<title>eRVV |KSUSTA|</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		<link rel="shortcut icon" type="image/jpeg" href="./images/KSUSTA.png" />
		<script language="javascript" src="dept.js"></script>

		
	</head>

	<body>
		<header>
<img src="./images/header.png" style="position:relative; left:13%;" />
		</header>
		<div class="body" align="center">
		<div style="border: 1px solid #999;
		position:relative;
		width:30%;
		height:auto;
		box-shadow:0px 2px 2px 2px #ddd;
		border-radius:15px;
		margin:1em;
		padding:1em;">
		<h2> Login to Continue </h2>

		<form method="POST" action="index.php">
			<p>Username: <input type="text" name="user_name" /></p>
			<p>Password: <input type="password" name="user_pass" /></p>
			<p><input type="submit" name="submit" value="Login" /></p>
		</form>
<?php
if(isset($_POST['submit']))
{
$server	    = 'localhost';
$username	= 'root';
$password	= '';
$name=$_POST['user_name'];
$pass=$_POST['user_pass'];
$con=($GLOBALS["___mysqli_ston"] = mysqli_connect($server,  $username,  $password));
if(!$con)
{
 	exit('Error: could not establish connection to the server');
}
else
{
$con_db=((bool)mysqli_query($con, "USE ervv"));
if(!$con_db)
{
	exit('Error: Failed to connect to the database');
}
else
{
	if(!empty($name) && !empty($pass))
	{
		$select="SELECT * FROM `users_table` WHERE(`user_name`='".$name."' AND `user_pass`='".$pass."')";
		$query=mysqli_query($GLOBALS["___mysqli_ston"], $select);
		if($query)
		{
			if(mysqli_num_rows($query) == 0)
			{
				echo 'ERROR: Invalid Username and Password combination';
			}
			else
			{
				$_SESSION['login']=true;
				header("location:verify.php");
			}
				
		}
		else { echo 'Error while logging in.'; }
	}
	else
	{
		echo '***FIELDS CANNOT BE BLANK.***';
	}
}
}
}
?>
		
		</div>
		</div>
<?php include 'footer.php'; ?>
