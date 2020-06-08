﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿<?php
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
$rna=$_SESSION[rnna];
$rma=$_SESSION[rnma];
if(isset($_POST['Submit']))
 {			
		If(unlink($rma))
{
$Query="DELETE from uploads where file_name = '$rna' and file = '$rma' ";
$dbresult=mysql_query($Query);

			if($dbresult)
{
echo "<script type='text/javascript'>alert(\"File Successfully Deleted $rna \")</script>";
//header("location:editadmin.php");
include("editadmin.php");
}
else
{
echo "<script type='text/javascript'>alert(\"Try Again! Your File Not Deleted\")</script>";
//header("location:updateadmin.php");
include("deletefile2.php");
}
}else
{
echo "<script type='text/javascript'>alert(\"Try Again! Your File Not Deleted\")</script>";
//header("location:updateadmin.php");
include("deletefile2.php");
}
 }

?>﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿

