﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿<?php
require("main.php");
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
	<?php
		
		include("student.php");
			
				$username=$_POST['username'];
				$password=$_POST['password'];
				
			
				
				
				$Query="SELECT * from student where register_number = '$username' and admission_number = '$password' ";
				$dbresult=mysql_query($Query);
				if(mysql_num_rows($dbresult) >0)
				{		while($row=mysql_fetch_row($dbresult))
					{	
				 echo "<div class='str'>hello  :  "."$row[0]"."</div>";
	 		}
             require("studentlist.php");

				}
				
				else
				{
					 echo "<div class='str'>Incorrect Username or password</div>";
	    		 echo "<div class='str'><a href='studentlogin.php'>Go back</a></div>";
               require("footer.php");
					exit();
				}
				
				?>

  ﻿<?php
require("footer.php");
?>

