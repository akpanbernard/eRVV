<?php
@session_start();
//connect.php
$server	    = 'localhost';
$username	= 'root';
$password	= '';
$type=$_POST['ExamType'];
$year=$_POST['ExamYear'];
$tbl=$type.$year;

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
}
?>