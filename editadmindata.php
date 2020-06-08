﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿<?php
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
            
		if(mysql_num_rows($dbresult) >0)
				{
					while($row=mysql_fetch_row($dbresult))
					{
						 echo "<div class='str'>hello  :  "."$row[0]"."</div>";
				
echo "<div class='fixed'><div class='title' align='center'>EDIT ADMIN DATA</div>"	;
echo "<form method=post name=f1 action='editsave3.php'>";

				echo "<div class='content'><div class='menu'>ID Number:	&nbsp&nbsp" . "$row[1]  <br>";
				echo "<font color = red> University Register Number can't changed </font> " . "</div>";
echo "<div class='menu'>FULL NAME:
		&nbsp&nbsp" . "$row[0]  <br>";
				echo "<font color = red> Edit Full Name </font> :  " . "<input name = editfn id = editfn type = text value = '$row[0]'>" . "</div>";
echo "<div class='menu'>Password:		&nbsp&nbsp" . "$row[2]  <br>";
				echo "<font color = red> Edit Password: </font> :  " . "<input name = editpad id = editpad type = password value = '$row[2]'>" . "</div>";
echo "<div class='menu'>MOBILE NUMBER:
		&nbsp&nbsp" . "$row[3]  <br>";
				echo "<font color = red> Edit Mobile Number </font> :  " . "<input name = editmn id = editmn type = text value = '$row[3]'>" . "</div>";

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

echo "<div class='menu'>DEPARTMENT:
		&nbsp&nbsp" . "$row[7]  <br>";
				echo "<font color = red> Edit Department </font> :  ";
				
				echo "<select name='editbranch' id = 'editbranch'><option  value='$row[7]'>$row[7]</option><option value='CSE'>CSE</option><option value='IT'>IT</option><option value='EC'>EC</option><option value='CIVIL'>CIVIL</option><option value='MECHNICAL'>MECHNICAL</option><option value='EEE'>EEE</option></select>" . "</div>";
echo "<div class='menu'>Email:		&nbsp&nbsp" . "$row[8]  <br>";
				echo "<font color = red> Edit Email </font> :  " . "<input name = editem id = editem type = text value = '$row[8]'>" . "</div></div>";
               echo "<div class='title' align='center'><input name='Submit' type='Submit' value='Update' />   &nbsp&nbsp<input name='submit2' type='reset' value='Reset' />";
echo "</div></div></form></div>";

         
				}	
			
			}	
				
			
			else
			{
				
			}	
			
			
		
            require("footer.php");
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

