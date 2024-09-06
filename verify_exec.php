<?php
include "header.php";
?>
<div class="body">
		<div class="content">

<?php
if(isset($_POST['submit']))
{
include "connect.php";
$exam_no= $_POST['can_no'];
$type=$_POST['ExamType'];
$year=$_POST['ExamYear'];
$tbl=$type.$year;
if(!empty($exam_no))
{
	$select="SELECT * FROM `".$tbl."` WHERE(`can_no` = '".$_POST['can_no']."' AND
											`maths` = '".$_POST['Mathgrade']."' AND
											`english` = '".$_POST['Enggrade']."' AND
											`chemistry` = '".$_POST['Chemgrade']."' AND
											`biology` = '".$_POST['Biograde']."' AND
											`economics` = '".$_POST['Econsgrade']."' AND
											`commerce` = '".$_POST['Commgrade']."' AND
											`accounting` = '".$_POST['Acctgrade']."' AND
											`computer` = '".$_POST['Cscgrade']."' AND
											`agric` = 	'".$_POST['Agricgrade']."' AND
											`physics` = '".$_POST['Phygrade']."' AND
											`literature` = '".$_POST['Litgrade']."' AND
											`fmaths` = 	'".$_POST['Fmathsgrade']."' AND
											`geography` = '".$_POST['Geograde']."' AND
											`government` = '".$_POST['Govtgrade']."' AND
											`crs` = '".$_POST['Crsgrade']."' AND
											`irs` = '".$_POST['Irsgrade']."' AND
											`arabic` = '".$_POST['Arabicgrade']."' AND
											`hausa` = '".$_POST['Hausagrade']."' AND
											`igbo` = '".$_POST['Igbograde']."' AND
											`yoruba` = '".$_POST['Yorubagrade']."' AND
											`home` = '".$_POST['Homegrade']."'
														)";
				$query=mysqli_query($GLOBALS["___mysqli_ston"], $select);
				if(!$query)
				{
					echo "Failed to Select Record<br>".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false));
				}
				else
				{
					if(mysqli_num_rows($query) == 0)
					{
						echo '<font size="15" color="red">Result Not Verified! <img src="./images/error.png" height="50" /></font><br><br>';
						echo '<font size="6" color="navy"><u>Possible reasons:</u></font>
						
						<ul>
						<font size="6" color="red">
						<li>Candidate Record not found in our Database</li>
						<li>Incorrect Entering of results</li>
						<li>Fake result entered</li>
						</font>
						</ul>
						
						
						';
						$_SESSION['verified'] = false;
					}
					else 
					{
						echo '<font size="15" color="navy">Result Verified! <img src="./images/ok.png" height="50" /></font><br>';
						while($row=mysqli_fetch_assoc($query))
						{
						//creates an array of the grades.
						$sub_grade= array(
						'MATHEMATICS ' => $row['maths'],
						'ENGLISH LANGUAGE' => $row['english'],
						'CHEMISTRY' => $row['chemistry'],
						'BIOLOGY' => $row['biology'],
						'ECONOMICS' => $row['economics'],
						'COMMERCE' => $row['commerce'],
						'ACCOUNTING' => $row['accounting'],
						'COMPUTER SCIENCE' => $row['computer'],
						'AGRICULTURAL SCIENCE' => $row['agric'],
						'PHYSICS' => $row['physics'],
						'LITERATURE IN ENGLISH' => $row['literature'],
						'FURTHER MATHEMATICS' => $row['fmaths'],
						'GEOGRAPHY' => $row['geography'],
						'GOVERNMENT' => $row['government'],
						'CHRISTIAN RELIGIOUS STUDIES' => $row['crs'],
						'ISLAMIC RELIGIOUS STUDIES' => $row['irs'],
						'ARABIC STUDIES' => $row['arabic'],
						'HAUSA LANGUAGE' => $row['hausa'],
						'IGBO LANGUAGE' => $row['igbo'],
						'YORUBA LANGUAGE' => $row['yoruba'],
						'HOME MANAGEMENT ' => $row['home']);
						echo '<div style="float:right; border:solid 1px black; width:150px; height:150px";>
						<img src="./admin/photos/'.$row['can_photo'].'" height="150" width="150" /></div>';
						echo '
						<table>
						<tr><td><b><font color="green"></font></b></td><td style="padding-left:80px;"><b></b></td></tr>
						<tr><td><b><font color="green"></font></b></td><td style="padding-left:80px;"><b></b></td></tr>
						<tr><td><b><font color="green"></font></b></td><td style="padding-left:80px;"><b></b></td></tr>
						<tr><td><b><font color="green"></font></b></td><td style="padding-left:80px;"><b></b></td></tr>
						<tr><td><b><font color="green"></font></b></td><td style="padding-left:80px;"><b></b></td></tr>
						<tr><td><b><font color="green">CANDIDATE NAME:</font></b></td><td style="padding-left:80px;"><b>'.strtoupper($row['can_name']).'</b></td></tr>
						<tr><td><b><font color="green">GENDER:</font></b></td><td style="padding-left:80px;"><b>'.strtoupper($row['sex']).'</b></td></tr>
						<tr><td><b><font color="green">CANDIDATE NUMBER:</font></b></td><td style="padding-left:80px;"><b>'.strtoupper($row['can_no']).'</b></td></tr>
						<tr><td><b><font color="green">EXAMINATION CENTER:</font></b></td><td style="padding-left:80px;"><b>'.strtoupper($row['center']).'</b></td></tr>
						<tr><td><b><font color="green"></font></b></td><td style="padding-left:80px;"><b></b></td></tr>
						<tr><td><b><font color="green"></font></b></td><td style="padding-left:80px;"><b></b></td></tr>
						<tr><td><b><font color="green"></font></b></td><td style="padding-left:80px;"><b></b></td></tr>
						<tr><td><b><font color="green"></font></b></td><td style="padding-left:80px;"><b></b></td></tr>
						<tr><td><b><font color="green"></font></b></td><td style="padding-left:80px;"><b></b></td></tr>
						
						<tr><td><b><font color="navy">SUBJECTS</font></b></td><td style="padding-left:80px;"><b><font color="navy">GRADES</font></b></td></tr>';
						foreach($sub_grade as $key=> $grade)
							{
								if($grade != "NIL")
								{
									
								echo '<tr><td style="width:200px;">'.$key.'</td><td style="padding-left:80px;">'.$grade.'</td></tr>';
								
								}
							}
							echo "</table>";
						$_SESSION['verified'] = false;
						$_SESSION['can_id'] = $row['can_id'];
						$_SESSION['exam_type'] = $row['exam_type'];
						$_SESSION['exam_year'] = $row['exam_year'];
						echo '<p><a href="validate.php?can_id='.$row['can_id'].'"><img src="./images/val.png" height="80" /></a></p>';

						}
						
					}
				}
			
}
else
{
	echo "***You Must Enter Candidate Number***";
}
}
?>
</div>
		</div>
<?php include 'footer.php'; ?>