﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿<?php
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

if (isset($_SESSION[admin]))
{
$Query="SELECT * from adminlbs where id = '$_SESSION[admin]' and password = '$_SESSION[rafh]' ";
$dbresult=mysql_query($Queryqw);
require("main1.php");
				 echo "<div class='str'>hello  :  "."$_SESSION[admin]"."</div>";
 require("uploadsmsg1.php");
require("footer.php");
require'student.php';

$fn=$_POST['fn'];
$Queryqw="SELECT id  from adminlbs where id ='$fn'";
$dbresult=mysql_query($Queryqw);
if(mysql_num_rows($dbresult) >0)
  {$cap1=strtoupper($fn);
    }
else
{
 $Queryqw="SELECT id  from teacherlbs where id ='$fn'";
 $dbresult=mysql_query($Queryqw);
 if(mysql_num_rows($dbresult) >0)
 {$cap1=strtoupper($fn);
 }
 else
 {
  $Queryqw="SELECT register_number  from student where register_number ='$fn'";
  $dbresult=mysql_query($Queryqw);
  if(mysql_num_rows($dbresult) >0)
  {$cap1=strtoupper($fn);
  }
  else
  { 
   $Queryqw="SELECT admission_number  from student where admission_number ='$fn'";
   $dbresult=mysql_query($Queryqw);
   if(mysql_num_rows($dbresult) >0)
{$cap1=strtoupper($fn);
}
   else
{        
    }
  }}
}
$sn=$_POST['sn'];
$mn=$_POST['mn'];
$status= 'offline';
$fromm = "$_SESSION[admin]";
$upin = 'admin';
$qwe=date("Y-m-d H:i:s");
mkdir("uploads/notice/$_SESSION[admin]");
$target_dir = "uploads/notice/$_SESSION[admin]/";
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
           $uploadOk = 0;
    }

If($uploadOk == 1)
{
if (file_exists($target_file)) {
    $nar="Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 15000000) {
    $mer="Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if ($uploadOk == 0) {
    $ser=" So, your file was not uploaded.";
       echo "<script type='text/javascript'>alert(\"$nar$mer\")</script>";
// if everything is ok, try to upload file
}
 else {
         $files="$target_file";
       if(isset($cap1))
    {    
       $q1=mysql_query("insert into chats values('$cap1','$fromm','$sn','$mn','$upin','$status','$qwe','$files')");
      if($q1)
         { 
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
       { echo "hai";
          echo "<script type='text/javascript'>alert(\"Messege Successfully Sended\")</script>";
        } 
    else
         {
           echo "<script type='text/javascript'>alert(\"Try Again! Your File Not sended\")</script>";
          
      }  
         } 
      else
         {
           echo "<script type='text/javascript'>alert(\"Try Again! Your messege Not sended\")</script>";
          
      }  
}  else
         {
           echo "<script type='text/javascript'>alert(\"Enter Valid ID\")</script>";
          
      }    
}
}
else
{
if(isset($cap1))
    {     $q1=mysql_query("insert into chats values('$cap1','$fromm','$sn','$mn','$upin','$status','$qwe','0')");
      if($q1)
         {  
  echo "<script type='text/javascript'>alert(\"Messege Successfully Sended\")</script>";
        } 
      else
         {
           echo "<script type='text/javascript'>alert(\"Try Again! Your messege Not sended\")</script>";
          
      }  
}  else
         {
           echo "<script type='text/javascript'>alert(\"Enter Valid ID\")</script>";
          
      }  
}
}
exit();
}
?>

    ﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿<?php
require("main.php");
?><div class="fixed"><div class="title" align="center">ADMIN LOGIN</div>
<form id="form1" name="form1" method="post" action="editadmin.php">
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

