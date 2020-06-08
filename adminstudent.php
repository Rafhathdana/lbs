﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿<?php
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
require("main1.php");
echo "<div class='str'>hello  :  "."$_SESSION[admin]"."</div>";
require("raf.php");
$rn=$_POST['rn'];
$Query="SELECT * from student where register_number = '$rn' ";
$dbresult=mysql_query($Query);
            
		if(mysql_num_rows($dbresult) >0)
				{
					while($row=mysql_fetch_row($dbresult))
					{
						 				
echo "<div class='fixed'><div class='title' align='center'>EDIT STUDENT DATA</div>"	;
echo "<form method=post name=f1 action='editsave1.php'>";

				echo "<div class='content'><div class='menu'>University Register Number:	&nbsp&nbsp" . "$row[1]  <br>";
				echo "<font color = red> University Register Number can't changed </font> " . "</div>";
	echo "<div class='menu'>College Admission Number:	&nbsp&nbsp" . "$row[2]  <br>";
				echo "<font color = red> College Admission Number can't changed </font> " . "</div>";
echo "<div class='menu'>FULL NAME:
		&nbsp&nbsp" . "$row[0]  <br>";
				echo "<font color = red> Edit Full Name </font> :  " . "<input name = editfn id = editfn type = text value = '$row[0]'>" . "</div>";
echo "<div class='menu'>Aadhar Number:		&nbsp&nbsp" . "$row[3]  <br>";
				echo "<font color = red> Edit Aadhar Number: </font> :  " . "<input name = editaad id = editaad type = text value = '$row[3]'>" . "</div>";

echo "<div class='menu'>Date Of Birth:
		&nbsp&nbsp" . "$row[4]  <br>";
				echo "<font color = red> Edit Date Of Birth </font> :  " . "<input name = editdate id = editdate type = text value = '$row[4]'>" . "</div>";
echo "<div class='menu'>Gender  : 	&nbsp&nbsp " . "$row[5] <br>";
				
				echo "<font color = red> Edit Gender </font> :  ";
				
				echo "<select name='editg' id = 'editg'><option  value='$row[5]'>$row[5]</option><option value='Male'>Male</option><option value='Female'>Famale</option></select>" . "</div>";

echo "<div class='menu'>Blood Group:
		&nbsp&nbsp" . "$row[6]  <br>";
				echo "<font color = red> Edit blood group </font> :  ";
				
				echo "<select name='editblood' id = 'editblood'><option  value='$row[6]'>$row[6]</option><option value='ab+'>AB +ve</option>
<option value='ab-'>AB -ve</option>
<option value='a+'>A +ve</option>
<option value='a-'>A -ve</option>
<option value='b+'>B +ve</option>
<option value='b-'>B -ve</option>
<option value='o+'>O +ve</option>
<option value='o-'>O -ve</option></select>" . "</div>";

echo "<div class='menu'>Religion:
		&nbsp&nbsp" . "$row[7]  <br>";
				echo "<font color = red> Edit Religion </font> :  ";
				
				echo "<select name='editrel' id = 'editrel'><option  value='$row[7]'>$row[7]</option><option value='hindu'>Hindu</option><option value='muslim'>Muslim</option><option value='christian'>Christian</option><option value='others'>Others</option></select>" . "</div>";


echo "<div class='menu'>Community:
		&nbsp&nbsp" . "$row[8]  <br>";
				echo "<font color = red> Edit Community </font> :  ";
				
				echo "<select name='editcomm' id = 'editcomm'><option  value='$row[8]'>$row[8]</option><option value='sc'>SC</option><option value='st'>ST</option><option value='obc'>OBC</option><option value='general'>GENERAL</option></select>" . "</div>";

echo "<div class='menu'>Branch:
		&nbsp&nbsp" . "$row[9]  <br>";
				echo "<font color = red> Edit Branch </font> :  ";
				
				echo "<select name='editbranch' id = 'editbranch'><option  value='$row[9]'>$row[9]</option><option value='CSE'>CSE</option><option value='IT'>IT</option><option value='EC'>EC</option><option value='CIVIL'>CIVIL</option><option value='MECHNICAL'>MECHNICAL</option><option value='EEE'>EEE</option></select>" . "</div>";
echo "<div class='menu'>Semester:
		&nbsp&nbsp" . "$row[10]  <br>";
				echo "<font color = red> Edit Semester </font> :  ";
				
				echo "<select name='editsem' id = 'editSem'><option  value='$row[10]'>$row[10]</option><option value='S1'>S1</option><option value='S2'>S2</option><option value='S3'>S3</option><option value='S4'>S4</option><option value='S5'>S5</option><option value='S6'>S6</option><option value='S7'>S7</option><option value='S8'>S8</option></select>" . "</div>";
echo "<div class='menu'>Class Division:
		&nbsp&nbsp" . "$row[11]  <br>";
				echo "<font color = red> Edit Class Division </font> :  ";
				
				echo "<select name='editdi' id = 'editdi'><option  value='$row[11]'>$row[11]</option><option value='no'>no</option><option value='a'>a</option><option value='b'>b</option></select>" . "</div>";



echo "<div class='menu'>Roll number:		&nbsp&nbsp" . "$row[12]  <br>";
				echo "<font color = red> Edit Roll number </font> :  " . "<input name = editrol id = editrol type = text value = '$row[12]'>" . "</div>";

echo "<div class='menu'>Email:		&nbsp&nbsp" . "$row[13]  <br>";
				echo "<font color = red> Edit Email </font> :  " . "<input name = editem id = editem type = text value = '$row[13]'>" . "</div>";

echo "<div class='menu'>Mobile Number:		&nbsp&nbsp" . "$row[14]  <br>";
				echo "<font color = red> Edit Mobile Number </font> :  " . "<input name = editmn id = editmn type = text value = '$row[14]'>" . "</div></div>";
echo "	<div class='title' align='center'>Parents information</div> ";
echo "<div class='content'> 
<div class='menu'>Father's name:		&nbsp&nbsp" . "$row[15]  <br>";
				echo "<font color = red> Edit Father's name </font> :  " . "<input name = editfan id = editfan type = text value = '$row[15]'>" . "</div>";
echo "<div class='menu'>Father's Occupation:		&nbsp&nbsp" . "$row[16]  <br>";
				echo "<font color = red> Edit Father's Occupation </font> :  " . "<input name = editfao id = editfao type = text value = '$row[16]'>" . "</div>";
echo "<div class='menu'>Father's Mobile Number:		&nbsp&nbsp" . "$row[17]  <br>";
				echo "<font color = red> Edit Father's Mobile Number </font> :  " . "<input name = editfmo id = editfmo type = text value = '$row[17]'>" . "</div>";
echo "<div class='menu'>Mother's name:		&nbsp&nbsp" . "$row[18]  <br>";
				echo "<font color = red> Edit Mother's name </font> :  " . "<input name = editman id = editman type = text value = '$row[18]'>" . "</div>";
echo "<div class='menu'>Mother's Occupation:		&nbsp&nbsp" . "$row[19]  <br>";
				echo "<font color = red> Edit Mother's Occupation </font> :  " . "<input name = editmao id = editmao type = text value = '$row[19]'>" . "</div>";
echo "<div class='menu'>Mother's Mobile Number:		&nbsp&nbsp" . "$row[20]  <br>";
				echo "<font color = red> Edit Mother's Mobile Number </font> :  " . "<input name = editmmo id = editmmo type = text value = '$row[20]'>" . "</div>";
echo "<div class='menu'>Guardian's name:		&nbsp&nbsp" . "$row[21]  <br>";
				echo "<font color = red> Edit Guardian's name </font> :  " . "<input name = editgn id = editgn type = text value = '$row[21]'>" . "</div>";


echo "<div class='menu'>Guardian's Mobile Number:		&nbsp&nbsp" . "$row[22]  <br>";
				echo "<font color = red> Edit Guardian's Mobile Number </font> :  " . "<input name = editgmn id = editgmn type = text value = '$row[22]'>" . "</div></div>";

echo "	<div class='title' align='center'>Address information</div> ";
echo "<div class='content'> <div class='menu'>House name:		&nbsp&nbsp" . "$row[23]  <br>";
				echo "<font color = red> Edit House name </font> :  " . "<input name = edithn id = edithn type = text value = '$row[23]'>" . "</div>";
echo "<div class='menu'>Land mark:		&nbsp&nbsp" . "$row[24]  <br>";
				echo "<font color = red> Edit Land mark </font> :  " . "<input name = editlm id = editlm type = text value = '$row[24]'>" . "</div>";

echo "<div class='menu'>District:		&nbsp&nbsp" . "$row[25]  <br>";
				echo "<font color = red> Edit District </font> :  " . "<input name = editdistrict id = editdistrict type = text value = '$row[25]'>" . "</div>";

echo "<div class='menu'>State:		&nbsp&nbsp" . "$row[26]  <br>";
				echo "<font color = red> Edit State </font> :  " . "<input name = editst id = editst type = text value = '$row[26]'>" . "</div>";
echo "<div class='menu'>Country:		&nbsp&nbsp" . "$row[27]  <br>";
				echo "<font color = red> Edit Country </font> :  " . "<input name = editcn id = editcn type = text value = '$row[27]'>" . "</div>";
echo "<div class='menu'>Pin:		&nbsp&nbsp" . "$row[28]  <br>";
				echo "<font color = red> Edit Pin </font> :  " . "<input name = editpin id = editpin type = text value = '$row[28]'>" . "</div></div>";



               echo "<div class='title' align='center'><input name='Submit' type='Submit' value='Update' />   &nbsp&nbsp<input name='submit2' type='reset' value='Reset' />";
echo "</div></div></form></div>";

         
				}	
			
			}	
				
			
			else
			{
				echo "<div class='fixed'><div class='title' align='center'>$rn STUDENT REGISTRATION NOT FOUND </div></div>"	;

			}	
			
			
		
            require("footer.php");
					exit();

				}			
				?>
﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿<?php
require("main1.php");
?>
<div class="fixed"><div class="title" align="center">ADMIN LOGIN</div>
<form id="form1" name="form1" method="post" action="editadmin.php">
           <div class='content'>  <div class='menu'>  ID Number:- <input name="username" type="text" class="menu" id="username" size="25" maxlength="255" /></div>
 <p>
              <div class='menu'>PASSWORD :-
                <input name="password" type="password" class="menu" id="password" size="25" maxlength="255" />
                </div>
              </p>
             <?php
		  if(isset($found))
		  {
		  	echo "Invalid Username or Password";
		  }
           ?>
<div class='menu'>                <input name="submit12" type="submit" class="menu" value="Login" " />  &nbsp&nbsp   <input name="Submit2" type="reset" class="menu" value="Reset" />
                </div><div class='menu'>  IF YOU ARE STUDENT PLEASE <a href="studentlogin.php">LOGIN HERE</a>  </div>
                  </div>
</form></div>
﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿<?php
require("footer.php");
?>
