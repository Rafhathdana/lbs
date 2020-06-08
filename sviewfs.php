	﻿﻿<?php			
			include("student.php");
			$Query="SELECT * from uploads where department LIKE '%$_SESSION[departmen]%' and semester LIKE '%$_SESSION[se]%' order by uptime ";
		echo "<div class='fixed'><div class='title' align='center'>Uploaded Files</div><div class='content'>";
				$dbresult=mysql_query($Query);

			if(mysql_num_rows($dbresult) >0)
				{
					
		while($row=mysql_fetch_row($dbresult))
					{  echo "<div class='menu'>File Name  :  "."$row[0]"."	&nbsp&nbsp UPLOADED ON :'$row[6]'<br>UPLOADED '$row[5]':-'$row[4]' "."</div>";
          echo "<div class='menu'>"."&nbsp&nbsp<a href ='$row[3]'>CLICK HERE TO DOWNLOAD  $row[0]</a>"."</div>";}
			}	
			
			else
			{
				
			}	
			
			
		
		
?>
<?php			
			include("student.php");
			$Query="SELECT * from uploads where department = 'all' and semester LIKE '%$_SESSION[se]%' order by uptime ";
						$dbresult=mysql_query($Query);


			if(mysql_num_rows($dbresult) >0)
				{		
	while($row=mysql_fetch_row($dbresult))
					{  echo "<div class='menu'>File Name  :  "."$row[0]"."	&nbsp&nbsp UPLOADED ON :'$row[6]'<br>UPLOADED '$row[5]':-'$row[4]' "."</div>";
          echo "<div class='menu'>"."&nbsp&nbsp<a href ='$row[3]'>CLICK HERE TO DOWNLOAD  $row[0]</a>"."</div>";}
                 
			}	
			
			else
			{
				
			}	
			
			
		
		
?>

<?php			
			include("student.php");
			$Query="SELECT * from uploads where department LIKE '%$_SESSION[departmen]%' and semester ='all' order by uptime ";
						$dbresult=mysql_query($Query);


			if(mysql_num_rows($dbresult) >0)
				{
			
	while($row=mysql_fetch_row($dbresult))
					{  echo "<div class='menu'>File Name  :  "."$row[0]"."	&nbsp&nbsp UPLOADED ON :'$row[6]'<br>UPLOADED '$row[5]':-'$row[4]' "."</div>";
          echo "<div class='menu'>"."&nbsp&nbsp<a href ='$row[3]'>CLICK HERE TO DOWNLOAD  $row[0]</a>"."</div>";}
          
			}	
			
			else
			{
				
			}	
			
			
		
		
?>
<?php			
			include("student.php");
			$Query="SELECT * from uploads where department = 'all' and semester ='all' order by uptime ";
						$dbresult=mysql_query($Query);

			if(mysql_num_rows($dbresult) >0)
				{
			
		while($row=mysql_fetch_row($dbresult))
					{  echo "<div class='menu'>File Name  :  "."$row[0]"."	&nbsp&nbsp UPLOADED ON :'$row[6]'<br>UPLOADED '$row[5]':-'$row[4]' "."</div>";
          echo "<div class='menu'>"."&nbsp&nbsp<a href ='$row[3]'>CLICK HERE TO DOWNLOAD  $row[0]</a>"."</div>";}
                
			}	
			
			else
			{
				
			}	
			
			
		
		
?>
		