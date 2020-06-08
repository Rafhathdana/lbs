﻿﻿﻿﻿﻿﻿﻿<script language="javascript">
     function validate()
{
  var fname=document.reg.fn.value;
               
if(fname=='')
  {
    window.alert("Please Enter Full name!");
    document.reg.fn.focus();
    return false;

 }
 if(department=='')
  {
    window.alert("Please Select Department!");
    document.reg.department.focus();
    return false;

 }
 if(sem=='')
  {
    window.alert("Please Select Semester!");
    document.reg.sem.focus();
    return false;

 }

}

</script>
</head>

<body>
<center>
<form method="POST" action="" name="reg" onSubmit="return validate()" enctype="multipart/form-data">
    <center>	<div class="fixed"><div class="title" align="center">Upload File</div><div class="content"><div class='menu'>FILE NAME:
		&nbsp&nbsp<input type="text" name="fn" /></div>
<div class='menu'>DEPARTMENT:	&nbsp&nbsp >select Department
<Br><input type="checkbox" name="department" value="ALL">ALL
<Br><input type="checkbox" name="department1" value="CSE">CSE
<Br><input type="checkbox" name="department2" value="IT">IT
<Br><input type="checkbox" name="department3" value="EC">EC
<Br><input type="checkbox" name="department4" value="CIVIL">CIVIL
<Br><input type="checkbox" name="department5" value="MECHNICAL">MECHNICAL
<Br><input type="checkbox" name="department6" value="EEE">EEE
</div>
<div class='menu'>Semester:	&nbsp&nbsp
 <Br><input type="checkbox" name="sem10" value="ADMIN">ADMIN
<br><input type="checkbox" name="sem9" value="TEACHER">TEACHER
<br>>select semester
<Br><input type="checkbox" name="sem"  value="ALL">ALL
<Br><input type="checkbox" name="sem1" value="S1">S1
<Br><input type="checkbox" name="sem2" value="S2">S2
<Br><input type="checkbox" name="sem3" value="S3">S3
<Br><input type="checkbox" name="sem4" value="S4">S4
<Br><input type="checkbox" name="sem5" value="S5">S5
<Br><input type="checkbox" name="sem6" value="S6">S6
<Br><input type="checkbox" name="sem7" value="S7">S7
<Br><input type="checkbox" name="sem8" value="S8">S8
</div>
<div class='menu'>File:	&nbsp&nbsp  <input type="file" name="fileToUpload" id="fileToUpload"></div></div><div class="title" align="center"><input type="submit" name="submit" value="ADD" />  &nbsp&nbsp <input name="submit2" type="reset" value="RESET" /></div>
</div>
</form></center>

