﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿<?php
session_start();
extract($_POST);

if (isset($_SESSION[admin]))
{
require("main1.php");
}
else{
if (isset($_SESSION[teacher]))
{
require("main2.php");
}
else{
require("main.php");
}
}
?></body><head>
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

<body>

<SCRIPT LANGUAGE="JavaScript">

function verify() 
{

   var cname;
   with(window.document.form1)
   {
      cname    = searchname;
	  }
	  if(cname.value == '')
	  {
   
      alert('Please enter your name');
     cname.focus();
      return false;
   }
   }


</script>
<div class="fixed"><div class="title" align="center">Search Based on Position</div>
<form action = "/searchposition1t.php" method="post" name="form1" class="menu" id="form1">
                   
<div class="content"><div class='menu'>
                      <input name="searchname" type="text" class="searchall" id="searchname" size="25" maxlength="200" /></div><div class='menu'>                      <input name="Search" type="submit" class="menu" id="Search" value="Search" onclick="verify();">
                     </div></div>   </form></div>
  
<?php



			$searchname=$_POST['searchname'];
			
			if($searchname =='')
			{
			echo 'No Result found please try again';
			return false;
			}
			
		
			
			
			//echo $searchname;
			
			include("student.php");
			
			$Query="SELECT * from teacherlbs where position='$searchname' order by position ";
			$dbresult=mysql_query($Query);

			if(mysql_num_rows($dbresult) >0)
				{
					while($row=mysql_fetch_row($dbresult))
					{
				       			
	echo "<div class='fixed'><div class='title' align='center'>Search Result"."</div>";     
                echo "<div class='menu'>Name  :  "."$row[0]"."</div>";
	    		 echo "<div class='menu'>Teacher ID  :  "."$row[1]"."</div>";
				  echo "<div class='menu'>Date of Birth  :  "."$row[4]"."</div>";
	    		 echo "<div class='menu'>Gender  :  "."$row[5]"."</div>";
                 echo "<div class='menu'>Blood Group  :  "."$row[6]"."</div>";
             	 echo "<div class='menu'>Position  :  "."$row[10]"."</div>";	

	    		 echo "<div class='menu'>Branch  :  "."$row[7]"."</div>";
           	   echo "<div class='menu'>Email  :  "."$row[8]"."</div>";
                 echo "<div class='menu'>Mobile Number  :  "."$row[3]"."</div>";
	   	    	 echo "<div class='menu'>District  :  "."$row[13]"."</div>";	
                echo "<div class='menu'>State  :  "."$row[14]"."</div>";
                 echo "<div class='menu'>Pin  :  "."$row[16]"."</div>";

           echo "</div></div></div>";
				}	
			}	
			
			else
			{
				
			}	
			
			
		
		
?>
﻿<?php
require("footer.php");
?>

