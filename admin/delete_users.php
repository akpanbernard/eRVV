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
	$id = $_GET['user_id'];
		$query=mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM `users_table` WHERE(`user_id` = '$id')");
		if($query)
		{
		header("location:users.php");	
		}
		else { echo 'Error while Deleting User.'; }
}
}
		?>