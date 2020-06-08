﻿﻿﻿﻿﻿﻿﻿﻿﻿<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$serverna = "sql308.epizy.com";
$userna = "epiz_24378761";
$passwo = "Rafhath1236438";
$dbna = "epiz_24378761_college";


// Create connection
   $conn = mysql_connect($serverna, $userna, $passwo, $dbna);

 
if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   mysql_select_db('epiz_24378761_college');

?>	

