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
require("sear.php");
			$sem=$_POST['sem'];
			$di=$_POST['di'];
        	$branch=$_POST['branch'];
			include("student.php");
	if(isset($_POST['searc']))
 {		echo "<div class='fixed'><div class='title' align='center'>Class:$sem branch: $branch division: $di"."</div>";    
			
			$Query="SELECT * from student where semester = '$sem' And branch = '$branch' And division = '$di' order by roll_number ";
   
       if($sem == '')
	  {
   $Query="SELECT * from student where branch = '$branch' And division = '$di' order by roll_number "; 

   }
                if($branch == '')
	  {
  $Query="SELECT * from student where semester = '$sem' And division = '$di' order by roll_number ";
 
   }
 
          if($di == '')
	  {
   $Query="SELECT * from student where semester = '$sem' And branch = '$branch' order by roll_number "; 
   }


         if($di == '' and $branch == '')
	  {
   $Query="SELECT * from student where semester = '$sem' order by roll_number "; 
   } 
if($di == '' and $sem == '')
	  {
$Query="SELECT * from student where branch = '$branch' order by roll_number ";
   }
if($sem == '' and $branch == '')
	  {
$Query="SELECT * from student where division = '$di' order by roll_number ";
   }


			$dbresult=mysql_query($Query);

			if(mysql_num_rows($dbresult) >0)
				{						while($row=mysql_fetch_row($dbresult))
					{
				       			
                  echo "<div class='dana'>Roll Number  :  "."$row[12]"."</div>";

                echo "<div class='menu'>Name  :  "."$row[0]"."</div>";
	    		 echo "<div class='menu'>Register Number  :  "."$row[1]"."</div>";
                 echo "<div class='menu'>Admission Number  :  "."$row[2]"."</div>";
			  echo "<div class='menu'>Date of Birth  :  "."$row[4]"."</div>";
	    		 echo "<div class='menu'>Gender  :  "."$row[5]"."</div>";
                 echo "<div class='menu'>Blood Group  :  "."$row[6]"."</div>";
	    		 echo "<div class='menu'>Branch  :  "."$row[9]"."</div>";
                 echo "<div class='menu'>Semester  :  "."$row[10]"."</div>";
	    		 echo "<div class='menu'>Email  :  "."$row[13]"."</div>";
                 echo "<div class='menu'>Mobile Number  :  "."$row[14]"."</div>";
	    		 echo "<div class='menu'>Father's Name  :  "."$row[15]"."</div>";
                 echo "<div class='menu'>Mother's Name  :  "."$row[18]"."</div>";
	    		 echo "<div class='menu'>District  :  "."$row[25]"."</div>"; 
            
           echo "</div></div></div>";
		

			
		
}	
			
			}	
				
			
			else
			{
			
			}	
			
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
      if($branch == '')
	  {
   $Query="SELECT * from student where division = '$di' order by roll_number ";
   }  
        if($di == '')
	  {
   $Query="SELECT * from student where branch = '$branch' order by roll_number ";
   }

