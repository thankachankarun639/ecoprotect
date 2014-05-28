<?php
 $email="";
 $ename="";
 $rm=@$_POST['rm'];
 
 $email=strip_tags(@$_POST['email']);
 $ename=strip_tags(@$_POST['ename']);
 
 if($rm)
{
 if($email)
   {
   $sql = mysql_query("SELECT * FROM publicity WHERE Email='$email' AND Event='$ename'");
   $userCount= mysql_num_rows($sql);
   if($userCount == 1) 
   {
   $sql = mysql_query("DELETE FROM publicity WHERE Email='$email' AND Event='$ename'");
   echo "<span style=\"
			 position:absolute;
			 top:530px;
			 left:650px;
			 color:black;
			 font-size:25px;
			 font-weight : bold;
			 font-family:Agency FB
			 \">User removed</span>";
			 header("location:publicity.php");
   }
   else
   {
    echo "<span style=\"
			 position:absolute;
			 top:530px;
			 left:650px;
			 color:black;
			 font-size:25px;
			 font-weight : bold;
			 font-family:Agency FB
			 \">Invalid Email Id/Event</span>";
   }
 }
 else
 {
  echo "<span style=\"
			 position:absolute;
			 top:530px;
			 left:650px;
			 color:black;
			 font-size:25px;
			 font-weight : bold;
			 font-family:Agency FB
			 \">Fill In Entry</span>";
 }
}
?>  