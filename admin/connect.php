<?php
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
mysqli_query($GLOBALS["___mysqli_ston"], "CREATE DATABASE IF NOT EXISTS `ervv`");
$con_db=((bool)mysqli_query($con, "USE ervv"));
if(!$con_db)
{
	exit('Error: Failed to connect to the database');
}

$table="CREATE TABLE IF NOT EXISTS `".$tbl."` (
		  `can_id` int(255) NOT NULL AUTO_INCREMENT,
		  `can_name` varchar(255) NOT NULL,
		  `dob` varchar(255) NOT NULL,
		  `sex` varchar(255) NOT NULL,
		  `center` varchar(255) NOT NULL,
		  `can_no` varchar(255) NOT NULL,
		  `can_photo` varchar(255) NOT NULL,
		  `exam_type` varchar(255) NOT NULL,
		  `exam_year` varchar(255) NOT NULL,
		  `maths` varchar(5) NOT NULL,
		  `english` varchar(5) NOT NULL,
		  `chemistry` varchar(5) NOT NULL,
		  `biology` varchar(5) NOT NULL,
		  `economics` varchar(5) NOT NULL,
		  `commerce` varchar(5) NOT NULL,
		  `accounting` varchar(5) NOT NULL,
		  `computer` varchar(5) NOT NULL,
		  `agric` varchar(5) NOT NULL,
		  `physics` varchar(5) NOT NULL,
		  `literature` varchar(5) NOT NULL,
		  `fmaths` varchar(5) NOT NULL,
		  `geography` varchar(5) NOT NULL,
		  `government` varchar(5) NOT NULL,
		  `crs` varchar(5) NOT NULL,
		  `irs` varchar(5) NOT NULL,
		  `arabic` varchar(5) NOT NULL,
		  `hausa` varchar(5) NOT NULL,
		  `igbo` varchar(5) NOT NULL,
		  `yoruba` varchar(5) NOT NULL,
		  `home` varchar(5) NOT NULL,
		  PRIMARY KEY (`can_id`),
		  UNIQUE KEY (`can_no`)
		)
";
$tbl_query= mysqli_query($GLOBALS["___mysqli_ston"], $table);
if(!$tbl_query)
{
echo "Error: Failed to create Table. ".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false));
}
}
?>