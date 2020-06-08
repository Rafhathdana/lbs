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

if (isset($_SESSION[admin]))
{
$Query="SELECT * from adminlbs where id = '$_SESSION[admin]' and password = '$_SESSION[rafh]' ";
$dbresult=mysql_query($Query);
require("main1.php");
				 echo "<div class='str'>hello  :  "."$_SESSION[admin]"."</div>";
 require("adddteach.php");
require("footer.php");
require'student.php';
$fn=$_POST['fn'];
$in=$_POST['in'];
$pad=$_POST['pad'];
$mn=$_POST['mn'];
$dd=$_POST['dd'];
$mm=$_POST['mm'];
$yy=$_POST['yy'];
$g=$_POST['g'];
$blood=$_POST['blood'];
$department=$_POST['department'];
$em=$_POST['em'];
$gmn=$_POST['gmn'];
$hn=$_POST['hn'];
$lm=$_POST['lm'];
$district=$_POST['district'];
$st=$_POST['st'];
$cn=$_POST['cn'];
$pin=$_POST['pin'];
$cap1=strtoupper($fn);
$cap2=strtoupper($in);
mkdir("uploads/teacher/$cap2");
$target_dir = "uploads/teacher/$cap2/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

if(isset($_POST['submit']))
 {
   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
                $uploadOk = 1;
    } else {
        $yat="File is not an image.";
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
if($imageFileType != "jpg" && $imageFileType != "jpeg" ) {
    $ner="Sorry, only JPG, JPEG files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $ser=" So, your file was not uploaded.";
       echo "<script type='text/javascript'>alert(\"$yat$nar$mer$ner$ser\")</script>";
// if everything is ok, try to upload file
}
 else {
        $orgin="uploads/teacher/$cap2/$cap2.jpg";
         $photo="$orgin";
         $q1=mysql_query("insert into teacherlbs values('$cap1','$cap2','$pad','$mn','$yy-$mm-$dd','$g','$blood','$department','$em','$photo','$gmn','$hn','$lm','$district','$st','$cn','$pin')");
      if($q1)
         {  
     if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
       { 
                  if (rename("$target_file","$orgin"));
      {    echo "<script type='text/javascript'>alert(\"Record Successfully Updated\")</script>";
        } }}
      else
         {
           echo "<script type='text/javascript'>alert(\"Try Again! Your Record Not Updated\")</script>";
          }
      }  }
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

