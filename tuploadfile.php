﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿<?php
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

if (isset($_SESSION[teacher]))
{
$Query="SELECT * from teacherlbs where id = '$_SESSION[teacher]' and password = '$_SESSION[rafha]' ";
$dbresult=mysql_query($Query);
require("main2.php");
				 echo "<div class='str'>hello  :  "."$_SESSION[admin]"."</div>";
 require("uploads1.php");
require("footer.php");
require'student.php';
$fn=$_POST['fn'];
If(isset($_POST['department']))
{
$department=$_POST['department'];
}
else
{
$department1=$_POST['department1']; $department2=$_POST['department2']; $department3=$_POST['department3']; $department4=$_POST['department4']; $department5=$_POST['department5']; $department6=$_POST['department6'];
$department="$department1,$department2,$department3,$department4,$department5,$department";
}
If(isset($_POST['sem']))
{
$sem=$_POST['sem'];
}
else
{
$sem1=$_POST['sem1'];
$sem2=$_POST['sem2'];
$sem3=$_POST['sem3'];
$sem4=$_POST['sem4'] ;
$sem5=$_POST['sem5'];
$sem6=$_POST['sem6'];
$sem7=$_POST['sem7'];
$sem8=$_POST['sem8'];
$sem9=$_POST['sem9'];
$sem10=$_POST['sem10'];
$sem="$sem1,$sem2,$sem3,$sem4,$sem5,$sem6,$sem7,$sem8,$sem9,$sem10";
}
$id = "$_SESSION[teacher]";
$upin = 'teacher';
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s', time());
echo "$date";
$qwe= "$date";

$cap1=strtoupper($fn);
mkdir("uploads/files/teacher");
$target_dir = "uploads/files/teacher/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

if(isset($_POST['submit']))
 {
   $check = filesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
                $uploadOk = 1;
    } else {
        $yat="File is not Good.";
        $uploadOk = 0;
    }
// Check if file already exists
if (file_exists($target_file)) {
    $nar="Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    $mer="Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if ($uploadOk == 0) {
    $ser=" So, your file was not uploaded.";
       echo "<script type='text/javascript'>alert(\"$yat$nar$mer\")</script>";
// if everything is ok, try to upload file
}
 else {
         $files="$target_file";
         $q1=mysql_query("insert into uploads values('$cap1','$department','$sem','$files','$id','$upin','$qwe')");
      if($q1)
         {  
     if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
       { 
  echo "<script type='text/javascript'>alert(\"Record Successfully Updated\")</script>";
        } }
      else
         {
           echo "<script type='text/javascript'>alert(\"Try Again! Your Record Not Updated\")</script>";
          }
      }  }
exit();
}
?>

    ﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿<?php
require("main2.php");
?><div class="fixed"><div class="title" align="center">TEACHER LOGIN</div>
<form id="form1" name="form1" method="post" action="editteacher.php">
           <div class='content'>  <div class='menu'>  ID Number:- <input name="username" type="text" class="menu" id="username" size="25" maxlength="255" /></div>
 <p>
              <div class='menu'>password :-
                <input name="password" type="password" class="menu" id="password" size="25" maxlength="255" />
                </div>
              </p>
           
<div class='menu'>                <input name="submit12" type="submit" class="menu" value="Login" " />  &nbsp&nbsp   <input name="Submit2" type="reset" class="menu" value="Reset" />
                </div><div class='menu'>  New Student ? <a href="insertstudent.php">Register Now</a>  </div>
                  </div>
</form></div>

﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿

