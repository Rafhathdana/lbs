﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿<?php
session_start();
extract($_POST);

if (isset($_SESSION[admin]))
{
require("main1.php");
}
else{
require("main.php");
}
?>
</body><head>
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

﻿<form id="form1" name="form1" method="post" action="adminstudent.php">
           <div class='content'>  <div class='menu'> University Register Number:  :- <input name="rn" type="text" class="menu" id="rn" size="25" maxlength="255" /></div>
<div class='menu'>                           <input name="Search" type="submit" class="menu" id="Search" value="Search" />
                </div></div>
                      </form>   <div class='content'>  <div class='menu'><a href="editadmin.php" class="style2">Go Back</a></div>
 </div></div>

  ﻿<?php
require("footer.php");
?>

