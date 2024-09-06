<?php
include "header.php";
session_start();
//connect.php
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
}
?>
<div class="body">
		<div class="content">

<?php
if(isset($_POST['submit']) || isset($_SESSION['verified']))
{
$tbl=$_SESSION['exam_type'].$_SESSION['exam_year'];
$id=$_SESSION['can_id'];

	$select="SELECT * FROM `".$tbl."` WHERE(`can_id` = '".$id."')";
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
						<font size="6" color="red">
						<ul>
						<li>Candidate Record not found in our Database</li>
						<li>Incorrect Entering of results</li>
						<li>Fake result entered</li>
						</ul>
						</font>
						
						';
						$verified = false;
					}
					else 
					{
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

								$countA=0;
								foreach($sub_grade as $key=> $value)
								{
								if($value == "A1") { $countA++; }
								}
								
								$countB2=0;
								foreach($sub_grade as $key=> $value)
								{
								if($value == "B2") { $countB2++; }
								}
								
								$countB3=0;
								foreach($sub_grade as $key=> $value)
								{
								if($value == "B3") { $countB3++; }
								}
								
								$countC4=0;
								foreach($sub_grade as $key=> $value)
								{
								if($value == "C4") { $countC4++; }
								}
								
								$countC5=0;
								foreach($sub_grade as $key=> $value)
								{
								if($value == "C5") { $countC5++; }
								}
								
								$countC6=0;
								foreach($sub_grade as $key=> $value)
								{
								if($value == "C6") { $countC6++; }
								}
							
								$total=array($countA,$countB2,$countB3,$countC4,$countC5,$countC6);	
								$sum = array_sum($total);
						

								}
							
								if($sum < 5)
								{
									echo '<font size="15" color="red">Result Not Valid! <img src="./images/error.png" height="50" /></font><br><br>';
								echo '<font size="4" color="green"><b><p>No. of A1 = '.$countA.'</p>';
								echo "<p>No. of B2 = ".$countB2."</p>";
								echo "<p>No. of B3 = ".$countB3."</p>";
								echo "<p>No. of C4 = ".$countC4."</p>";
								echo "<p>No. of C5 = ".$countC5."</p>";
								echo "<p>No. of C6 = ".$countC6."</p>";
								echo '<p>TOTAL No. of Grades = '.$sum.'</p></b></font>';
									echo '<p><font size="6" color="navy"><u>Reasons:</u></font></p>
									
									
									<font size="6" color="red">
									<p>Candidate\'s Result does not met the NUC requirement of at least five (5) credit passes.</p>
									</font>
									<font size="6" color="navy"><u>REMARK</u></font>
									<font size="6" color="red">
									<p>The student is to defer His/Her admission till the stipulated requirement is met. </p>
									</font>';
								}
								else
								{
								echo '<font size="15" color="navy">Result Validated! <img src="./images/ok.png" height="50" /></font><br>';
								echo '<font size="4" color="green"><b><p>No. of A1 = '.$countA.'</p>';
								echo "<p>No. of B2 = ".$countB2."</p>";
								echo "<p>No. of B3 = ".$countB3."</p>";
								echo "<p>No. of C4 = ".$countC4."</p>";
								echo "<p>No. of C5 = ".$countC5."</p>";
								echo "<p>No. of C6 = ".$countC6."</p>";
								echo '<p>TOTAL No. of Grades = '.$sum.'</p></b></font>';
								echo '<font size="6" color="red">
									<p>Candidate\'s Result has met the NUC requirement of at least five (5) credit passes.</p>
									</font>
									<font size="6" color="navy"><u>REMARK</u></font>
									<font size="6" color="red">
									<p>The student is to continue His/Her registration to the next level. </p>
									</font>';

								}

						}
					}
				}
			

?>
</div>
		</div>
<?php include 'footer.php'; ?>