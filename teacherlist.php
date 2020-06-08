﻿﻿﻿﻿﻿﻿﻿﻿﻿<?php			
			include("student.php");
			$Query="SELECT * from chats where too = '$_SESSION[teacher]' and status = 'offline' order by timemsg DESC";
						$dbresult=mysql_query($Query);
$s=0;
			if(mysql_num_rows($dbresult) >0)
				{   echo "<div class='fixed'><div class='title' align='center'>LATEST NOTICE OR MESSAGE TO YOU</div><div class='content'>";
while($row=mysql_fetch_row($dbresult))
{
if($s!==5)
               					{  echo "<div class='menu'><a href= '/notice.php?n=$row[2]&ti=$row[6]'>$row[2] &nbsp&nbsp FROM $row[1]</a>"."</div>";
                 $s++;
  				}	
  				}	echo "</div></div>";
			}	
			
			else
			{
				
			}	
			
			
		
		
?>

﻿﻿﻿﻿﻿<?php			
			include("student.php");
			$Query="SELECT * from uploads where department LIKE '%$_SESSION[depart]%' and semester LIKE '%teacher%' order by uptime DESC";
		echo "<div class='fixed'><div class='title' align='center'>Uploaded Files</div><div class='content'>";
				$dbresult=mysql_query($Query);
$s=0;

			if(mysql_num_rows($dbresult) >0)
				{
					
while($row=mysql_fetch_row($dbresult))
{
if($s!==4)
               					{   echo "<div class='menu'>File Name  :  "."$row[0]"."	&nbsp&nbsp UPLOADED ON :'$row[6]'<br>UPLOADED '$row[5]':-'$row[4]' "."</div>";
          echo "<div class='menu'>"."&nbsp&nbsp<a href ='$row[3]'>CLICK HERE TO DOWNLOAD  $row[0]</a>"."</div>";}
                 $s++;
  				}	
			}	
			
			else
			{
				
			}	
			
			
		
		
?>
<?php			
			include("student.php");
			$Query="SELECT * from uploads where department = 'all' and semester LIKE '%teacher%' order by uptime DESC";
						$dbresult=mysql_query($Query);
$s=0;

			if(mysql_num_rows($dbresult) >0)
				{		
	
while($row=mysql_fetch_row($dbresult))
{
if($s!==3)
               					{   echo "<div class='menu'>File Name  :  "."$row[0]"."	&nbsp&nbsp UPLOADED ON :'$row[6]'<br>UPLOADED '$row[5]':-'$row[4]' "."</div>";
          echo "<div class='menu'>"."&nbsp&nbsp<a href ='$row[3]'>CLICK HERE TO DOWNLOAD  $row[0]</a>"."</div>";}
                 $s++;
  				}	
			}	
			
			else
			{
				
			}	
			
			
		
		
?>

<?php			
			include("student.php");
			$Query="SELECT * from uploads where department LIKE '%$_SESSION[depart]%' and semester ='all' order by uptime DESC";
						$dbresult=mysql_query($Query);
$s=0;

			if(mysql_num_rows($dbresult) >0)
				{
			
while($row=mysql_fetch_row($dbresult))
{
if($s!==2)
               					{  echo "<div class='menu'>File Name  :  "."$row[0]"."	&nbsp&nbsp UPLOADED ON :'$row[6]'<br>UPLOADED '$row[5]':-'$row[4]' "."</div>";
          echo "<div class='menu'>"."&nbsp&nbsp<a href ='$row[3]'>CLICK HERE TO DOWNLOAD  $row[0]</a>"."</div>";}
                 $s++;
  				}	
			}	
			
			else
			{
				
			}	
			
			
		
		
?>
<?php			
			include("student.php");
			$Query="SELECT * from uploads where department = 'all' and semester ='all' order by uptime DESC";
						$dbresult=mysql_query($Query);
$s=0;

			if(mysql_num_rows($dbresult) >0)
				{
			
	
while($row=mysql_fetch_row($dbresult))
{
if($s!==2)
               					{  echo "<div class='menu'>File Name  :  "."$row[0]"."	&nbsp&nbsp UPLOADED ON :'$row[6]'<br>UPLOADED '$row[5]':-'$row[4]' "."</div>";
          echo "<div class='menu'>"."&nbsp&nbsp<a href ='$row[3]'>CLICK HERE TO DOWNLOAD  $row[0]</a>"."</div>";}
                 $s++;
  				}	
			}	
			
			else
			{
				
			}	
			
			
		
		
?>
﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿<div class="fixed"><div class="title" align="center">Select Categories</div><div class="content"><div class='menu'>∆<a href='/editteacherdata.php'>  Edit My Profile</a></div></div></div>
﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿<div class="fixed"><div class="title" align="center">Uploads</div><div class="content"><div class='menu'>∆<a href='/tuploadfile.php'>  New Upload</a></div><div class='menu'>∆<a href='/tdeletefile.php'>  Delete Uploaded file </a></div><div class='menu'>∆<a href='/tviewfile.php'>  View All Uploaded file </a></div><div class='menu'>∆<a href='/tuploadmsg.php'> Send Individual Notice,File or message </a></div></div></div>
<?php			
			include("msglist.php");
?>
﻿﻿<div class="fixed"><div class="title" align="center">Student Area</div><div class="content"><div class='menu'>∆<a href='insertstudent.php'>  Add new student</a></div><div class='menu'>∆<a href='updateteacher.php'>  Update Student</a></div><div class='menu'>∆<a href='deleteteacher.php'>  Delete Student</a></div><div class='menu'>∆<a href='searchnamet.php'>  Search</a></div><div class='menu'>∆<a href='classwiset.php'>  Class Wise Student List</a></div></div></div>

