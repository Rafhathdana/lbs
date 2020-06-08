﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿    ﻿﻿<?php
require("main.php");
?></body>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script language="javascript">
     function validate()
{
  var fname=document.reg.fn.value;
    var rn=document.reg.rn.value;
      var admission=document.reg.an.value;
       var aadhar=document.reg.aad.value;
        var mm=document.reg.mm.value;
         var dd=document.reg.dd.value;
          var yy=document.reg.yy.value;
           var gender=document.reg.g.value;
            var blood=document.reg.blood.value;
             var branch=document.reg.branch.value;
              var semester=document.reg.sem.value;
               var division=document.reg.di.value;
                var rollno=document.reg.rol.value;
                 var email=document.reg.em.value;
                  var mobile=document.reg.mn.value;
                   var father=document.reg.fan.value;
                    var mother=document.reg.man.value;
                     var address=document.reg.hn.value;

           

if(fname=='')
  {
    window.alert("Please Enter Full name!");
    document.reg.fn.focus();
    return false;

 }
 if(rn=='')
  {
    window.alert("Enter Register number!");
    document.reg.rn.focus();
    return false;

 }
 if(admission=='')
  {
    window.alert("Please Enter Addmission number!");
    document.reg.an.focus();
    return false;

 }
 if(aadhar=='')
  {
    window.alert("Please Enter Aadhar Number!");
    document.reg.aad.focus();
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
 if(branch=='')
  {
    window.alert("Please Select Branch!");
    document.reg.branch.focus();
    return false;

 }
 if(semester=='')
  {
    window.alert("Please Select Semester!");
    document.reg.sem.focus();
    return false;

 }
  if(division=='')
  {
    window.alert("Please Select Division!");
    document.reg.di.focus();
    return false;

 } if(rollno=='')
  {
    window.alert("Please Enter Roll Number!");
    document.reg.rol.focus();
    return false;

 } if(email=='')
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
 

 if(father=='')
  {
    window.alert("Please Enter Father's Name!");
    document.reg.fan.focus();
    return false;

 }
 if(mother=='')
  {
    window.alert("Please Enter Mother's Name!");
    document.reg.man.focus();
    return false;

 }
 if(address=='')
  {
    window.alert("Please enter house name!");
    document.reg.hn.focus();
    return false;

 }


}

</script>
</head>

<body>
<center>
<form method="POST" action="" name="reg" onSubmit="return validate()">
<center>	<div class="fixed"><div class="title" align="center">STUDENT REGISTRATION</div><div class="content"><div class='menu'>FULL NAME:
		&nbsp&nbsp<input type="text" name="fn" /></div><div class='menu'>University Register Number:	&nbsp&nbsp<input type="text" name="rn" maxlength="10" size="12" /></div><div class='menu'>College Admission Number:	&nbsp&nbsp<input type="text" name="an" maxlength="7" size="10" /></div><div class='menu'>Aadhar Number:	&nbsp&nbsp<input type="text" name="aad" /></div><div class='menu'>Date Of Birth:  &nbsp&nbspDate<input type="text" name="dd" maxlength="2" size="4" />Month<select name="mm">
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
</div><div class='menu'>Religion:	&nbsp&nbsp<select name="rel">
<option >Select religion</option>
<option value="hindu">Hindu</option>
<option value="muslim">Muslim</option>
<option value="christian">Christian</option>
<option value="others">Others</option>
</select>
</div>
<div class='menu'>Community:	&nbsp&nbsp<select name="comm">
<option >Select Community</option>
<option value="sc">SC</option>
<option value="st">ST</option>
<option value="obc">OBC</option>
<option value="general">GENERAL</option>
</select>
</div>

<div class='menu'>Branch:	&nbsp&nbsp<select name="branch">
<option >select branch</option>
<option value="CSE">CSE</option>
<option value="IT">IT</option>
<option value="EC">EC</option>
<option value="CIVIL">CIVIL</option>
<option value="MECHNICAL">MECHNICAL</option>
<option value="EEE">EEE</option>
</select>
</div>
<div class='menu'>Semester:	&nbsp&nbsp<select name="sem">
<option >select semester</option>
<option value="S1">S1</option>
<option value="S2">S2</option>
<option value="S3">S3</option>
<option value="S4">S4</option>
<option value="S5">S5</option>
<option value="S6">S6</option>
<option value="S7">S7</option>
<option value="S8">S8</option>
</select>
</div><div class='menu'>Class Division:	&nbsp&nbsp<select name="di">
<option >select semester</option>
<option value="no">no</option>
<option value="a">a</option>
<option value="b">b</option>
</select>
</div><div class='menu'>Roll number:	&nbsp&nbsp<input type="text" name="rol" maxlength="2" /></div><div class='menu'>Email:	&nbsp&nbsp<input type="text" name="em" /></div><div class='menu'>mobile number:	&nbsp&nbsp<input type="text" name="mn" maxlength="10" /></div></div>

<div class="title" align="center">Parents information</div><div class="content"> 
<div class='menu'>Father's name:	&nbsp&nbsp<input type="text" name="fan" /></div><div class='menu'>Father's occupation:	&nbsp&nbsp<input type="text" name="fao" /></div><div class='menu'>Father's mobile number:	&nbsp&nbsp<input type="text" name="fmo" maxlength="15" /></div><div class='menu'>Mother's name:	&nbsp&nbsp<input type="text" name="man" /></div><div class='menu'>Mother's occupation:	&nbsp&nbsp<input type="text" name="mao" /></div><div class='menu'>Mother's mobile number:	&nbsp&nbsp<input type="text" name="mmo" maxlength="15"/></div><div class='menu'>Guardians name:	&nbsp&nbsp<input type="text" name="gn" /></div><div class='menu'>Guardians mobile number:	&nbsp&nbsp<input type="text" name="gmn" maxlength="10" size="11" /></div></div>
<div class="title" align="center">Address information</div><div class="content"> 
<div class='menu'>House name:	&nbsp&nbsp<input type="text" name="hn" /></div><div class='menu'>Land mark:	&nbsp&nbsp<input type="text" name="lm" /></div><div class='menu'>District:	&nbsp&nbsp<input type="text" name="district" /></div><div class='menu'>State:	&nbsp&nbsp<input type="text" name="st" /></div><div class='menu'>Country:	&nbsp&nbsp<input type="text" name="cn" /></div><div class='menu'>Pin:	&nbsp&nbsp<input type="text" name="pin" /></div></div><div class="title" align="center"><input type="submit" name="submit" value="UPLOAD" />  &nbsp&nbsp <input name="submit2" type="reset" value="RESET" /></div>
</div>
</form></center>

﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿ ﻿﻿<?php
require("footer.php");
?>
</body>
</html>
<?php
require'student.php';
$fn=$_POST['fn'];
$rn=$_POST['rn'];
$an=$_POST['an'];
$aad=$_POST['aad'];
$dd=$_POST['dd'];
$mm=$_POST['mm'];
$yy=$_POST['yy'];
$g=$_POST['g'];
$blood=$_POST['blood'];
$rel=$_POST['rel'];
$comm=$_POST['comm'];
$branch=$_POST['branch'];
$sem=$_POST['sem'];
$di=$_POST['di'];
$rol=$_POST['rol'];
$em=$_POST['em'];
$mn=$_POST['mn'];
$fan=$_POST['fan'];
$fao=$_POST['fao'];
$fmo=$_POST['fmo'];
$man=$_POST['man'];
$mao=$_POST['mao'];
$mmo=$_POST['mmo'];
$gn=$_POST['gn'];
$gmn=$_POST['gmn'];
$hn=$_POST['hn'];
$lm=$_POST['lm'];
$district=$_POST['district'];
$st=$_POST['st'];
$cn=$_POST['cn'];
$pin=$_POST['pin'];
$cap1=strtoupper($fn);
$cap2=strtoupper($rn);

if(isset($_POST['submit']))
 {

 $q1=mysql_query("insert into student values('$cap1','$cap2','$an','$aad','$yy-$mm-$dd','$g','$blood','$rel','$comm','$branch','$sem','$di','$rol','$em','$mn','$fan','$fao','$fmo','$man','$mao','$mmo','$gn','$gmn','$hn','$lm','$district','$st','$cn','$pin')");
if($q1)
{
echo '<script language="javascript">';
echo 'alert("Record Successfully Added")';
echo '</script>';
}
else
{
echo '<script language="javascript">';
echo 'alert("Try Again. Your Record Not Added")';
echo '</script>';

}
 }
?>

