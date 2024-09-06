<?php
if(isset($_POST['submit']))
{
	include "connect.php";


$name= $_POST['name'];
$dob= $_POST['dob'];
$sex= @$_POST['sex'];
$center= $_POST['center'];
$no= $_POST['no'];
$photo= $_FILES['image'];
$type=$_POST['ExamType'];
$year=$_POST['ExamYear'];
$tbl=$type.$year;

if(!empty($name) && !empty($dob) && !empty($sex) && !empty($center) && !empty($no) && !empty($photo))
{
	$url="./photos/";
		$digit=rand(0000,9999);
		$picname=$digit.$_FILES['image']['name'];
		move_uploaded_file($_FILES['image']['tmp_name'],$url.$picname);
		$imagetype=((isset($GLOBALS["___mysqli_ston"]) && is_object($GLOBALS["___mysqli_ston"])) ? mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_FILES['image']['type']) : ((trigger_error("[MySQLConverterToo] Fix the mysql_escape_string() call! This code does not work.", E_USER_ERROR)) ? "" : ""));
		if(substr($imagetype,0,5)=="image")
			{
				$insert="INSERT INTO `".$tbl."` VALUES('',
														'".$_POST['name']."',
														'".$_POST['dob']."',
														'".$_POST['sex']."',
														'".$_POST['center']."',
														'".$_POST['no']."',
														'".$picname."',
														'".$_POST['ExamType']."',
														'".$_POST['ExamYear']."',
														'".$_POST['Mathgrade']."',
														'".$_POST['Enggrade']."',
														'".$_POST['Chemgrade']."',
														'".$_POST['Biograde']."',
														'".$_POST['Econsgrade']."',
														'".$_POST['Commgrade']."',
														'".$_POST['Acctgrade']."',
														'".$_POST['Cscgrade']."',
														'".$_POST['Agricgrade']."',
														'".$_POST['Phygrade']."',
														'".$_POST['Litgrade']."',
														'".$_POST['Fmathsgrade']."',
														'".$_POST['Geograde']."',
														'".$_POST['Govtgrade']."',
														'".$_POST['Crsgrade']."',
														'".$_POST['Irsgrade']."',
														'".$_POST['Arabicgrade']."',
														'".$_POST['Hausagrade']."',
														'".$_POST['Igbograde']."',
														'".$_POST['Yorubagrade']."',
														'".$_POST['Homegrade']."'
														)";
				$query=mysqli_query($GLOBALS["___mysqli_ston"], $insert);
				if(!$query)
				{
					echo "Failed to Add Record<br>".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false));
				}
				else
				{
					echo "Record added Successfully!";
				}
			}
		else
			{
			echo 'Only Images allowed';
			}
			
}
else
{
	echo "***All Fields Must Be Filled***";
}
}
?>