<?php
include 'header.php';
?>
		<div class="body">
		<b><a href="welcome.php"  style="margin:1%; float:right; border:solid 1px black; text-decoration:none; background:green; color:yellow; padding:2px;">Back</a></b>
		<h3 style="margin-left:5%">Welcome to the Administrative section.</h3>

		<div style="border: 1px solid #999;
		position:relative;
		width:30%;
		height:auto;
		box-shadow:0px 2px 2px 2px #ddd;
		border-radius:15px;
		margin:1em; float:left;
		padding:1em;">
		<form  method="POST" action="admin.php">
				<p><font color="red">Add an Administrator</font></p>
				<p>USERNAME:<input type="text" name="name" placeholder="Enter UserName"  style="margin-left:10%;" /></p>
				<p>PASSWORD:<input type="password" name="password" placeholder="Enter Password" style="margin-left:10%;" /></p>
				<p><input type="submit" value="ADD" name="submit" style="margin-left:35%;" /></p>
		</form>
		<?php
if(isset($_POST['submit']))
{
$server	    = 'localhost';
$username	= 'root';
$password	= '';
$admin_name=$_POST['name'];
$admin_pass=$_POST['password'];
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
		$insert="INSERT INTO `admin_table` VALUES('', '".$admin_name."' ,'".$admin_pass."')";
		$query=mysqli_query($GLOBALS["___mysqli_ston"], $insert);
		if($query)
		{
				echo 'Admin added successfully!';
				header("location:admin.php");		
		}
		else { echo 'Error while adding Admin.'; }
	}
	else
	{
		echo '*** fields cannot be blank ***.';
	}
}
}
}
?>
		</div>
		
		<div style="border: 1px solid #999;
		position:relative;
		width:55%;
		height:auto;
		box-shadow:0px 2px 2px 2px #ddd;
		margin:1em; float:left;
		padding:1em;">
			<h3><font color="navy">System Administrators</font></h3>
<?php
$server	    = 'localhost';
$username	= 'root';
$password	= '';
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
		$query=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM `admin_table`");
		echo '<table cellspacing="5" style="border-collapse:collapse;" border="1" cellpadding="15">';
		echo '<tr><td><b>S/N</b></td><td><b>USERNAME</b></td><td><b>PASSWORD</b></td><td><b>ACTION</b></td></tr>';
		while ($row=mysqli_fetch_assoc($query))
		{
			echo '<tr><td>'.$row['id'].'</td><td>'.$row['username'].'</td><td>'.$row['password'].'</td><td><a href="delete_admin.php?id='.$row['id'].'">Delete</a></td></tr>';
		}
		echo '</table>';
}
}
		?>
		</div>
		</div>
<?php include 'footer.php';?>
