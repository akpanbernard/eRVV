<?php
include 'header.php';
?>
		<div class="body" align="center">
		<b><a href="../verify.php"  style="margin:1%; float:right; border:solid 1px black; text-decoration:none; background:green; color:yellow; padding:2px;">Back</a></b>

		<div style="border: 1px solid #999;
		position:relative;
		width:35%;
		height:auto;
		box-shadow:0px 2px 2px 2px #ddd;
		border-radius:15px;
		margin:1em;
		padding:1em;">
		<h2> Login to Enter Control Panel </h2>

		<form name="frmLogin" method="POST" action="index.php">
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
$admin_name=$_POST['user_name'];
$admin_pass=$_POST['user_pass'];
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
	if(!empty($admin_name) && !empty($admin_pass))
	{
		$select="SELECT * FROM `admin_table` WHERE(`username`='".$admin_name."' AND `password`='".$admin_pass."')";
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
				header("location:welcome.php");
			}
				
		}
		else { echo 'Error while logging in.'; }
	}
	else
	{
		echo 'FIELDS CANNOT BE BLANK.';
	}
}
}
}
?>
		</div>
		</div>
<?php include 'footer.php'; ?>
