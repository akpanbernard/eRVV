function selectFaculty(selectedFaculty){
	var list;
	var listValue;
		if(selectedFaculty == "AGRICULTURE")
		{
		list = new Array("AGRIC ECONS & EXTENSION", "ANIMAL SCIENCE", "CROP SCIENCE", "SOIL SCIENCE", "FISHERY/FORESTRY");
		listValue = new Array("AGRIC ECONS & EXTENSION", "ANIMAL SCIENCE", "CROP SCIENCE", "SOIL SCIENCE", "FISHERY/FORESTRY");
		}
		if(selectedFaculty == "SCIENCE")
		{
		list = new Array("BIOCHEMISTRY", "BIOLOGICAL SCIENCES", "CHEMISTRY", "COMPUTER SCI. & INFO-TECH", "MATHEMATICS", "PHYSICS");
		listValue = new Array("BIOCHEMISTRY", "BIOLOGICAL SCIENCES", "CHEMISTRY", "COMPUTER SCI. & INFO-TECH", "MATHEMATICS", "PHYSICS");
		}
	for(var i=0; i < document.regForm.faculty.length; i++){
		document.regForm.department.options[i] = null;
		}
	for(var i=0; i < list.length; i++)
		{
		document.regForm.department.options[i] = new Option(list[i], listValue[i], 0, 0);
		}

		}
		function selectCourse(selectedDepartment){
	var list;
	var listValue;
		if(selectedDepartment == "BIOLOGICAL SCIENCES")
		{
		list = new Array("BIOLOGY", "BIOLOGY EDUCATION", "BOTANY", "MICROBIOLOGY", "ZOOLOGY");
		listValue = new Array("BIOLOGY", "BIOLOGY EDUCATION", "BOTANY", "MICROBIOLOGY", "ZOOLOGY");
		}
		if(selectedDepartment == "CHEMISTRY")
		{
		list = new Array("APPLIED CHEMISTRY", "PURE CHEMISTRY");
		listValue = new Array("APPLIED CHEMISTRY", "PURE CHEMISTRY");
		}
		if(selectedDepartment == "COMPUTER SCI. & INFO-TECH")
		{
		list = new Array("COMPUTER SCIENCE", "INFORMATION TECHNOLOGY");
		listValue = new Array("COMPUTER SCIENCE", "INFORMATION TECHNOLOGY");
		}
		if(selectedDepartment == "MATHEMATICS")
		{
		list = new Array("MATHEMATICS", "STATISTICS");
		listValue = new Array("MATHEMATICS", "STATISTICS");
		}
		if(selectedDepartment == "PHYSICS")
		{
		list = new Array("PHYSICS");
		listValue = new Array("PHYSICS");
		}
		if(selectedDepartment == "BIOCHEMISTRY")
		{
		list = new Array("BIOCHEMISTRY");
		listValue = new Array("BIOCHEMISTRY");
		}
	for(var i=0; i < document.regForm.department.length; i++){
		document.regForm.course.options[i] = null;
		}
	for(var i=0; i < list.length; i++)
		{
		document.regForm.course.options[i] = new Option(list[i], listValue[i], 0, 0);
		}

		}
		//function for the agree button
function affirm(){
if(document.regForm.agree.checked == true){
	document.regForm.btnRegister.visibility == true;
	}
	else
	{
	document.regForm.btnRegister.visibility == false;
	}
}