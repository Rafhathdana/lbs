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
<div class="fixed"><div class="title" align="center">Search Teachers Name</div>
<form action = "/searchname1t.php" method="post" name="form1" class="menu" id="form1">
                   
<div class="content"><div class='menu'>
                      <input name="searchname" type="text" class="searchall" id="searchname" size="25" maxlength="200" /></div><div class='menu'>                      <input name="Search" type="submit" class="menu" id="Search" value="Search" onclick="verify();">
                     </div></div>   </form></div><br>
 <div class="fixed"><div class="title" align="center">Search Blood</div>
<form action = "/searchblood1.php" method="post" name="form2" class="menu" id="form2">
                   
<div class="content"><div class='menu'>Blood Group :	&nbsp&nbsp<select name="blood">
<option >select Blood Group</option>
<option value="ab+">AB +ve</option>
<option value="ab-">AB -ve</option>
<option value="a+">A +ve</option>
<option value="a-">A -ve</option>
<option value="b+">B +ve</option>
<option value="b-">B -ve</option>
<option value="o+">O +ve</option>
<option value="o-">O -ve</option>
</select>
</div><div class='menu'>                      <input name="Search" type="submit" class="menu" id="Search" value="Search">
                     </div></div>   </form></div><br>
<div class="fixed"><div class="title" align="center">Search Based On Position</div>
<form action = "/searchposition1t.php" method="post" name="form1" class="menu" id="form1">
                   
<div class="content"><div class='menu'>
                      <input name="searchname" type="text" class="searchall" id="searchname" size="25" maxlength="200" /></div><div class='menu'>                      <input name="Search" type="submit" class="menu" id="Search" value="Search" onclick="verify();">
</div></div>
﻿<?php
require("footer.php");
?>

