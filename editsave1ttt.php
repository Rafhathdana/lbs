﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿<?php
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
$an=$_SESSION[tann];
$aad=$_POST['editaad'];
$mn=$_POST['editmn'];
$date=$_POST['editdate'];
$g=$_POST['editg'];
$blood=$_POST['editblood'];
$branch=$_POST['editbranch'];
$em=$_POST['editem'];
$gmn=$_POST['editgmn'];
$hn=$_POST['edithn'];
$lm=$_POST['editlm'];
$district=$_POST['editdistrict'];
$st=$_POST['editst'];
$cn=$_POST['editcn'];
$pin=$_POST['editpin'];
$cap1=strtoupper($fn);
$cap2=strtoupper($an);

if(isset($_POST['Submit']))
 {			
		
		
 $Query = "UPDATE student SET full_name =  '$cap1', id =  '$cap2', password =  '$aad', mobile_number =  '$mn', dob =  '$date', gender =  '$g', blood_group =  '$blood', branch =  '$branch', email =  '$em', position =  '$gmn', house_name =  '$hn', land_mark =  '$lm', district =  '$district', state =  '$st', country =  '$cn', pin =  '$pin' where register_number = '$cap2' and admission_number = '$an'";
$dbresulta=mysql_query($Query);

			if($dbresulta)
{
echo "<script type='text/javascript'>alert(\"Record Successfully Updated\")</script>";
//header("location:editteacher.php");
include("editteacher.php");
}
else
{
echo "<script type='text/javascript'>alert(\"Try Again! Your Record Not Updated\")</script>";
//header("location:updateteacher.php");
include("updateteacher.php");
}
 }

?>﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿

