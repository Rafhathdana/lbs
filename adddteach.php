﻿﻿﻿<script language="javascript">
     function validate()
{
  var fname=document.reg.fn.value;
    var in=document.reg.in.value;
      var password=document.reg.pad.value;
        var mm=document.reg.mm.value;
         var dd=document.reg.dd.value;
          var yy=document.reg.yy.value;
           var gender=document.reg.g.value;
            var blood=document.reg.blood.value;
             var department=document.reg.department.value;
               var email=document.reg.em.value;
                  var mobile=document.reg.mn.value;
               
if(fname=='')
  {
    window.alert("Please Enter Full name!");
    document.reg.fn.focus();
    return false;

 }
 if(in=='')
  {
    window.alert("Enter ID Number!");
    document.reg.in.focus();
    return false;

 }
if(dd=='')
  {
    window.alert("Please Enter Day!");
    document.reg.dd.focus();
    return false;

 }
 if(mm=='')
  {
    window.alert("Please Select Month!");
    document.reg.mm.focus();
    return false;

 }
 if(yy=='')
  {
    window.alert("Please Enter Year!");
    document.reg.yy.focus();
    return false;

 }
if(gender=='')
  {
    window.alert("Please Select Gender!");
    document.reg.g.focus();
    return false;

 }
 if(blood=='')
  {
    window.alert("Please Select Blood Group!");
    document.reg.blood.focus();
    return false;

 }
 if(department=='')
  {
    window.alert("Please Select Department!");
    document.reg.department.focus();
    return false;

 }
if(email=='')
  {
    window.alert("Please Enter Email!");
    document.reg.em.focus();
    return false;

 } if(mobile=='')
  {
    window.alert("Please Enter Mobile Number!");
    document.reg.mn.focus();
    return false;

 }
 


}

</script>
</head>

<body>
<center>
<form method="POST" action="" name="reg" onSubmit="return validate()" enctype="multipart/form-data">
    <center>	<div class="fixed"><div class="title" align="center">TEACHER REGISTRATION</div><div class="content"><div class='menu'>FULL NAME:
		&nbsp&nbsp<input type="text" name="fn" /></div><div class='menu'>ID  Number:	&nbsp&nbsp<input type="text" name="in" maxlength="10" size="12" /></div><div class='menu'>Password:	&nbsp&nbsp<input type="text" name="pad" minlength="4" size="10" /></div><div class='menu'>mobile number:	&nbsp&nbsp<input type="text" name="mn" maxlength="10" /></div>
<div class='menu'>Date Of Birth:  &nbsp&nbspDate<input type="text" name="dd" maxlength="2" size="4" />Month<select name="mm">
<option> select mounth </option>
<option value="01">JAN</option>
<option value="02">FEB</option>
<option value="03">MAR</option>
<option value="04">APR</option>
<option value="05">MAY</option>
<option value="06">JUN</option>
<option value="07">JUL</option>
<option value="08">AUG</option>
<option value="09">SEP</option>
<option value="10">OCT</option>
<option value="11">NOV</option>
<option value="12">DEC</option>
</select>Year<input type="text" name="yy" maxlength="4" size="5" /></div><div class='menu'>Gender:	&nbsp&nbsp<select name="g">
<option >select Gender</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
</div><div class='menu'>Blood Group :	&nbsp&nbsp<select name="blood">
<option >select Blood Group</option>
<option value="ab+">AB +ve</option>
<option value="ab-">AB -ve</option>
<option value="a+">A +ve</option>
<option value="a-">A -ve</option>
<option value="b+">B +ve</option>
<option value="b-">B -ve</option>
<option value="o+">O +ve</option>
<option value="o-">O -ve</option>
</select>
</div><div class='menu'>Position:	&nbsp&nbsp<input type="text" name="gmn" size="12" /></div>
<div class='menu'>DEPARTMENT:	&nbsp&nbsp<select name="department">
<option >select Department</option>
<option value="CSE">CSE</option>
<option value="IT">IT</option>
<option value="EC">EC</option>
<option value="CIVIL">CIVIL</option>
<option value="MECHNICAL">MECHNICAL</option>
<option value="EEE">EEE</option>
</select>
</div>
<div class='menu'>Email:	&nbsp&nbsp<input type="text" name="em" /></div><div class='menu'>Photo:	&nbsp&nbsp  <input type="file" name="fileToUpload" id="fileToUpload"></div></div><div class="title" align="center">Address information</div><div class="content"> 
<div class='menu'>House name:	&nbsp&nbsp<input type="text" name="hn" /></div><div class='menu'>Land mark:	&nbsp&nbsp<input type="text" name="lm" /></div><div class='menu'>District:	&nbsp&nbsp<input type="text" name="district" /></div><div class='menu'>State:	&nbsp&nbsp<input type="text" name="st" /></div><div class='menu'>Country:	&nbsp&nbsp<input type="text" name="cn" /></div><div class='menu'>Pin:	&nbsp&nbsp<input type="text" name="pin" /></div></div><div class="title" align="center"><input type="submit" name="submit" value="ADD" />  &nbsp&nbsp <input name="submit2" type="reset" value="RESET" /></div>
</div>
</form></center>

