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
require("main1.php");
echo "<div class='str'>hello  :  "."$_SESSION[admin]"."</div>";
require("delttt.php");
$rn=$_POST['rn'];
$Query="SELECT * from teacherlbs where id = '$rn' ";
$dbresult=mysql_query($Query);
            
		if(mysql_num_rows($dbresult) >0)
				{
					while($row=mysql_fetch_row($dbresult))
					{
						 				
echo "<div class='fixed'><div class='title' align='center'>DELETING STUDENT CONFIRMATION</div>"	;
echo "<form method=post name=f1 action='delete2ttt.php'>";

				echo "<div class='content'><div class='menu'>TEACHER ID NUMBER:	&nbsp&nbsp" . "$row[1] </div>";
$_SESSION[rna]=$rn;
echo "<div class='menu'>FULL NAME:
		&nbsp&nbsp" . "$row[0]  </div>";
echo "<div class='menu'>Date Of Birth:
		&nbsp&nbsp" . "$row[4]  </div>";
echo "<div class='menu'>Gender  : 	&nbsp&nbsp " . "$row[5] </div>";

echo "<div class='menu'>Blood Group:
		&nbsp&nbsp" . "$row[6]  </div>";
echo "<div class='menu'>Branch:
		&nbsp&nbsp" . "$row[7] </div>";
echo "<div class='menu'>Email:		&nbsp&nbsp" . "$row[8] </div>";

echo "<div class='menu'>Mobile Number:		&nbsp&nbsp" . "$row[3]  </div></div>";

               echo "<div class='title' align='center'><input name='Submit' type='Submit' value=' CONFORM DELETE' />  </div> ";
echo "<div class='dana'><a href='editadmin.php' class='style2'>Go Back</a></div>";

echo "</div></form></div>";

         
				}	
			
			}	
				
			
			else
			{
				echo "<div class='fixed'><div class='title' align='center'>$rn STUDENT REGISTRATION NUMBER NOT FOUND </div></div>"	;

			}	
			
			
		
            require("footer.php");
					exit();

				}			
				?>
﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿<?php
require("main2.php");
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
