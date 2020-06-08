﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿<?php
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
require("deletefile1.php");
$rn=$_POST['rn'];
if (isset($_GET['rn']))
{
$rn=$_GET['rn'];
}
$Query="SELECT * from uploads where file_name = '$rn' ";
$dbresult=mysql_query($Query);
            
		if(mysql_num_rows($dbresult) >0)
				{
					while($row=mysql_fetch_row($dbresult))
					{
						 				
echo "<div class='fixed'><div class='title' align='center'>DELETING FILE CONFIRMATION</div>"	;
echo "<form method=post name=f1 action='deletefile3.php'>";

				echo "<div class='content'><div class='menu'>Filename:	&nbsp&nbsp" . "$row[0] </div>";
$_SESSION[rnna]=$rn;
$_SESSION[rnma]=$row[3];

	echo "<div class='menu'>File is :	&nbsp&nbsp" . "<a href ='$row[3]'> $row[0]  </a></div>";
               echo "<div class='title' align='center'><input name='Submit' type='Submit' value=' CONFORM DELETE' />  </div> ";
echo "<div class='dana'><a href='editadmin.php' class='style2'>Go Back</a></div>";

echo "</div></form></div>";

         
				}	
			
			}	
				
			
			else
			{
				echo "<div class='fixed'><div class='title' align='center'>$rn FILE NAME NOT FOUND </div></div>"	;

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
