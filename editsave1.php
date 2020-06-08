﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿<?php
session_start();
?>﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿
<head>
<script type="text/javascript">
function showmenu(elmnt)
{
document.getElementById(elmnt).style.visibility="visible"
}
function hidemenu(elmnt)
{
document.getElementById(elmnt).style.visibility="hidden"
}
</script>



</head>
<?php
		include("student.php");
	extract($_POST);
$fn=$_POST['editfn'];
$an=$_SESSION[raf];
$rn=$_SESSION[login];
$aad=$_POST['editaad'];
$date=$_POST['editdate'];
$g=$_POST['editg'];
$blood=$_POST['editblood'];
$rel=$_POST['editrel'];
$comm=$_POST['editcomm'];
$branch=$_POST['editbranch'];
$sem=$_POST['editsem'];
$di=$_POST['editdi'];
$rol=$_POST['editrol'];
$em=$_POST['editem'];
$mn=$_POST['editmn'];
$fan=$_POST['editfan'];
$fao=$_POST['editfao'];
$fmo=$_POST['editfmo'];
$man=$_POST['editman'];
$mao=$_POST['editmao'];
$mmo=$_POST['editmmo'];
$gn=$_POST['editgn'];
$gmn=$_POST['editgmn'];
$hn=$_POST['edithn'];
$lm=$_POST['editlm'];
$district=$_POST['editdistrict'];
$st=$_POST['editst'];
$cn=$_POST['editcn'];
$pin=$_POST['editpin'];
$cap1=strtoupper($fn);
$cap2=strtoupper($rn);

if(isset($_POST['Submit']))
 {			
		
		
 $Query = "UPDATE student SET full_name =  '$cap1', register_number =  '$cap2', admission_number =  '$an', aadhar_number =  '$aad', dob =  '$date', gender =  '$g', blood_group =  '$blood', religion =  '$rel', community =  '$comm', branch =  '$branch', semester =  '$sem', division =  '$di', roll_number =  '$rol', email =  '$em', mobile_number =  '$mn', father_name =  '$fan', father_occupation =  '$fao', father_mobile =  '$fmo', mother_name =  '$man', mother_occupation =  '$mao', mother_mobile =  '$mmo', guardian_name =  '$gn', guardian_mobile =  '$gmn', house_name =  '$hn', land_mark =  '$lm', district =  '$district', state =  '$st', country =  '$cn', pin =  '$pin' where register_number = '$cap2' and admission_number = '$an'";
$dbresulta=mysql_query($Query);

			if($dbresulta)
{
echo "<script type='text/javascript'>alert(\"Record Successfully Updated\")</script>";
//header("location:editadmin.php");
include("editadmin.php");
}
else
{
echo "<script type='text/javascript'>alert(\"Try Again! Your Record Not Updated\")</script>";
//header("location:updateadmin.php");
include("updateadmin.php");
}
 }

?>﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿

