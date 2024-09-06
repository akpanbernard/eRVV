<?php
include 'header.php';
?>
		<div class="body">
		<b><a href="welcome.php"  style="margin:1%; float:right; border:solid 1px black; text-decoration:none; background:green; color:yellow; padding:2px;">Back</a></b>
		<h3 style="margin-left:5%">Welcome to the Users section.</h3>

		<div style="border: 1px solid #999;
		position:relative;
		width:30%;
		height:auto;
		box-shadow:0px 2px 2px 2px #ddd;
		border-radius:15px;
		margin:1em; float:left;
		padding:1em;">
		<form  method="POST" action="users.php">
				<p><font color="red">Add a System User</font></p>
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
$user_name=$_POST['name'];
$user_pass=$_POST['password'];
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
	if(!empty($user_name) && !empty($user_pass))
	{
		$insert="INSERT INTO `users_table` VALUES('', '".$user_name."' ,'".$user_pass."')";
		$query=mysqli_query($GLOBALS["___mysqli_ston"], $insert);
		if($query)
		{
				echo 'User added successfully!';
				header("location:users.php");		
		}
		else { echo 'Error while adding User.'; }
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
			<h3><font color="navy">System Users</font></h3>
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
		$query=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM `users_table`");
		echo '<table cellspacing="5" style="border-collapse:collapse;" border="1" cellpadding="15">';
		echo '<tr><td><b>S/N</b></td><td><b>USERNAME</b></td><td><b>PASSWORD</b></td><td><b>ACTION</b></td></tr>';
		while ($row=mysqli_fetch_assoc($query))
		{
			echo '<tr><td>'.$row['user_id'].'</td><td>'.$row['user_name'].'</td><td>'.$row['user_pass'].'</td><td><a href="delete_users.php?user_id='.$row['user_id'].'">Delete</a></td></tr>';
		}
		echo '</table>';
}
}
		?>
		</div>
		</div>
<?php include 'footer.php';?>
