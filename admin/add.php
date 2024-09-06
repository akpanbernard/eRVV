<?php
include 'header.php';
?>
		<div class="body">
		<div class="content">
		<b><a href="welcome.php"  style="float:right; border:solid 1px black; text-decoration:none; background:green; color:yellow; padding:2px;">Back</a></b>
		<h3> Welcome to <font color="green">KSUSTA Online Result Verification & Validation System</font> </h3>
		
		
		<form method="POST" action="add.php" enctype="multipart/form-data" onsubmit="return check()" name="regForm">
		<table cellspacing="15">
			<tr><td>CANDIDATE NAME:</td><td><input type="text" name="name" /></td></tr>			
			<tr><td>DATE OF BIRTH:</td><td><input type="text" name="dob"  /></td></tr>			
			<tr><td>SEX:</td><td><input type="radio" name="sex" value="male"  />MALE<input type="radio" name="sex" value="female" />FEMALE</td></tr>			
			<tr><td>EXAM CENTER:</td><td><input type="text" name="center" /></td></tr>			
			<tr><td>CANDIDATE NUMBER:</td><td><input type="text" name="no" /></td></tr>			
			<tr><td>EXAM TYPE:</td><td><select name="ExamType">
						  <option value="WAEC">WAEC</option>
						  <option value="NECO">NECO</option>
						  <option value="NABTEB">NABTEB</option>
						</select>
			
			<tr><td>EXAM YEAR:</td><td><select name="ExamYear">
			<?php 
			$d=date('Y');
			for($i=$d; $i>=1990; $i--)
			{
			echo '<option value="'.$i.'">'.$i.'</option>';
			}
			?>
			
			</select>
			</td></tr>
			<tr><td>PHOTO:</td><td><input type="file" name="image" id="adm"></td></tr>			
			<tr><td><b style="color:darkgreen;">SUBJECTS</b></td><td><b style="color:darkgreen;">GRADES</b></td></tr>
			<tr><td>MATHEMATICS:</td><td><input type="hidden" name="maths" />
			<select name="Mathgrade">
				<option value="NIL">NIL</option>
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
				</select>
			</td>
			</tr>
			<tr><td>ENGLISH LANGUAGE:</td><td><input type="hidden" name="english" />
			<select name="Enggrade">
				<option value="NIL">NIL</option>
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
				</select>
			</td>
			</tr>
			<tr><td>CHEMISTRY:</td><td><input type="hidden" name="chemistry" />
			<select name="Chemgrade">
				<option value="NIL">NIL</option>
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
				</select>
			</td>
			</tr>
			<tr><td>BIOLOGY:</td><td><input type="hidden" name="biology" />
			<select name="Biograde">
				<option value="NIL">NIL</option>
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
				</select>
			</td>
			</tr>
			<tr><td>ECONOMICS:</td><td><input type="hidden" name="econs" />
			<select name="Econsgrade">
				<option value="NIL">NIL</option>
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
				</select>
			</td>
			</tr>
			<tr><td>COMMERCE:</td><td><input type="hidden" name="comm" />
			<select name="Commgrade">
				<option value="NIL">NIL</option>
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
				</select>
			</td>
			</tr>
			<tr><td>ACCOUNTING:</td><td><input type="hidden" name="acct" />
			<select name="Acctgrade">
				<option value="NIL">NIL</option>
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
				</select>
			</td>
			</tr>
			<tr><td>COMPUTER SCIENCE:</td><td><input type="hidden" name="csc" />
			<select name="Cscgrade">
				<option value="NIL">NIL</option>
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
				</select>
			</td>
			</tr>
			<tr><td>AGRICULTURAL SCIENCE:</td><td><input type="hidden" name="agric" />
			<select name="Agricgrade">
				<option value="NIL">NIL</option>
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
				</select>
			</td>
			</tr>
			<tr><td>PHYSICS:</td><td><input type="hidden" name="physics" />
			<select name="Phygrade">
				<option value="NIL">NIL</option>
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
				</select>
			</td>
			</tr>
			<tr><td>LITERATURE:</td><td><input type="hidden" name="lit" />
			<select name="Litgrade">
				<option value="NIL">NIL</option>
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
				</select>
			</td>
			</tr>
			<tr><td>FURTHER MATHEMATICS:</td><td><input type="hidden" name="fmaths" />
			<select name="Fmathsgrade">
				<option value="NIL">NIL</option>
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
				</select>
			</td>
			</tr>
			<tr><td>GEOGRAPHY:</td><td><input type="hidden" name="geo" />
			<select name="Geograde">
				<option value="NIL">NIL</option>
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
				</select>
			</td>
			</tr>
			<tr><td>GOVERNMENT:</td><td><input type="hidden" name="govt" />
			<select name="Govtgrade">
				<option value="NIL">NIL</option>
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
				</select>
			</td>
			</tr>
			<tr><td>CHRISTAIN RELIGIOUS STUDIES:</td><td><input type="hidden" name="crs" />
			<select name="Crsgrade">
				<option value="NIL">NIL</option>
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
				</select>
			</td>
			</tr>
			<tr><td>ISLAMIC RELIGIOUS STUDIES:</td><td><input type="hidden" name="irs" />
			<select name="Irsgrade">
				<option value="NIL">NIL</option>
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
				</select>
			</td>
			</tr>
			<tr><td>ARABIC LANGUAGE:</td><td><input type="hidden" name="arabic" />
			<select name="Arabicgrade">
				<option value="NIL">NIL</option>
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
				</select>
			</td>
			</tr>
			<tr><td>HAUSA LANGUAGE:</td><td><input type="hidden" name="hausa" />
			<select name="Hausagrade">
				<option value="NIL">NIL</option>
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
				</select>
			</td>
			</tr>
			<tr><td>IGBO LANGUAGE:</td><td><input type="hidden" name="igbo" />
			<select name="Igbograde">
				<option value="NIL">NIL</option>
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
				</select>
			</td>
			</tr>
			<tr><td>YORUBA LANGUAGE:</td><td><input type="hidden" name="yoruba" />
			<select name="Yorubagrade">
				<option value="NIL">NIL</option>
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
				</select>
			</td>
			</tr>
			<tr><td>HOME MANAGEMENT:</td><td><input type="hidden" name="home" />
			<select name="Homegrade">
				<option value="NIL">NIL</option>
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
				</select>
			</td>
			</tr>
			
			
			</table>
			<p><input type="checkbox" name="agree" />
	
			<i>I agree that the information provided above is true and the registration was done in person.</i></p>

			<p><input type="submit" name="submit" value="ADD RECORD" id="submit" /></p>
		</form>
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
					echo "<font color=red>Failed to Add Record</font><br>".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false));
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
		</div>
		</div>
<?php include 'footer.php'; ?>
