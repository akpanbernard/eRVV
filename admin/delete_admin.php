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
	$id = $_GET['id'];
		$query=mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM `admin_table` WHERE(`id` = '$id')");
		echo '<table cellspacing="5" style="border-collapse:collapse;" border="1" cellpadding="15">';
		echo '<tr><td><b>S/N</b></td><td><b>USERNAME</b></td><td><b>PASSWORD</b></td><td><b>ACTION</b></td></tr>';
		if($query)
		{
		header("location:admin.php");	
		}
		else { echo 'Error while Deleting Admin.'; }
}
}
		?>