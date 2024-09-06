<?php
include 'header.php';
?>
		<div class="body">
		<div class="content">
		<h3> Welcome to <font color="green">KSUSTA Online Result Verification & Validation System</font> </h3>
		Please fill in your information below to verify result.
		<form name="regForm" method="POST" action="verify_exec.php" onsubmit="return check()">
			<p>CANDIDATE NUMBER: <input type="text" name="can_no" value="" id="adm" style="margin-left:3%;" /><p>			
			<p>EXAM TYPE:<select name="ExamType" style="margin-left:12.5%;">
						  <option value="WAEC">WAEC</option>
						  <option value="NECO">NECO</option>
						  <option value="NABTEB">NABTEB</option>
						</select>
			</p>
			<p>EXAM YEAR:</td><td><select name="ExamYear" style="margin-left:12%;">
			<?php 
			$d=date('Y');
			for($i=$d; $i>=1990; $i--)
			{
			echo '<option value="'.$i.'">'.$i.'</option>';
			}
			?>
			</select>
			</p>
			<table cellspacing="15">
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
	
			<p><input type="submit" name="submit" value="VERIFY" id="submit" /></p>
		</form>
		
		</div>
		</div>
<?php include 'footer.php'; ?>
