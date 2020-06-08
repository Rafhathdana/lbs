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
$in=$_SESSION[admin];
$mn=$_POST['editmn'];
$date=$_POST['editdate'];
$g=$_POST['editg'];
$blood=$_POST['editblood'];
$department=$_POST['editdepartment'];
$em=$_POST['editem'];
$cap1=strtoupper($fn);
$cap2=strtoupper($rn);

if(isset($_POST['Submit']))
 {			
		
		
 $Query = "UPDATE adminlbs SET name =  '$cap1', id =  '$cap2', password =  '$pad', mobile_number =  '$mn', dob =  '$date', gender =  '$g', blood_group =  '$blood', department =  '$department', email =  '$em' where id = '$cap2' and password = '$pad'";
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

