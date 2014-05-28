<?php
 $email="";
 $rm=@$_POST['rm'];
 
 $email=strip_tags(@$_POST['email']);
 
 if($rm)
{
 if($email)
   {
   $sql = mysql_query("SELECT * FROM user WHERE Email='$email'");
   $userCount= mysql_num_rows($sql);
   if($userCount == 1) 
   {
   $sql = mysql_query("DELETE FROM user WHERE Email='$email'");
   $sql = mysql_query("DELETE FROM volunteer WHERE Email='$email'");
   $sql = mysql_query("DELETE FROM publicity WHERE Email='$email'");
   $query = mysql_query("INSERT INTO deleted VALUES ('$email')");
   echo "<span style=\"
			 position:absolute;
			 top:530px;
			 left:650px;
			 color:black;
			 font-size:25px;
			 font-weight : bold;
			 font-family:Agency FB
			 \">User removed</span>";
			 header("location:profile.php");
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
			 \">Invalid Email Id</span>";
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