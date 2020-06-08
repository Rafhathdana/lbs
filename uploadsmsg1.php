﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿<script language="javascript">
     function validate()
{
  var fname=document.reg.fn.value;
   var sn=document.reg.sn.value;
     var mn=document.reg.mn.value;
  

if(fname=='')
  {
    window.alert("Please Enter valid Id!");
    document.reg.fn.focus();
    return false;

 }
 if(mn=='')
  {
    window.alert("Please Enter content!");
    document.reg.mn.focus();
    return false;

 }
 if(sn=='')
  {
    window.alert("Please Enter Subject!");
    document.reg.sn.focus();
    return false;

 }

}

</script>
</head>
<body>
 <form method="POST" action="" name="reg" onSubmit="return validate()" enctype="multipart/form-data">
	<div class="fixed"><div class="title" align="center">Send Message</div></div>
 <div class='content'>  <div class='menu'>  TO ID
:- &nbsp&nbsp&nbsp&nbsp <input type="text" id="fn" name="fn" placeholder="ID number.." class="colmh" size="30" maxlength="40" /><br> <br> SUBJECT :- <input type="text" id="fn" name="sn" class="colmh" maxlength="40" placeholder="subject of msg" style="width:70%">
<Br><br>     CONTENT :- &nbsp<textarea id="mn" class="colmh" name="mn" placeholder="Write something.." style="height:250px; width:70%"></textarea>
    </div>
  </div>
  <div class="menu">
    <input type="submit" class="menu" name="submit" value="SEND" />  &nbsp&nbsp <input name="submit2" class="title" type="reset" value="RESET" />
  </div>
  </form>
</body>
</html>



