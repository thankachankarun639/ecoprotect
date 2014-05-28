<?php
//Login script
 $l_email="";
 $l_pass="";
 $login=@$_POST['login'];
 $root_email="root@root.com";
 $root_pass="root";
 
 $l_email=strip_tags(@$_POST['l_email']);
 $l_pass=strip_tags(@$_POST['l_pass']);
 
if($login)
{
if($l_email && $l_pass)
{
 	if($l_email==$root_email && $l_pass==$root_pass)
	{
	session_start();
	$_SESSION["fname"]="root";
	$_SESSION["email"]=$l_email;
	$_SESSION["password"]=$l_pass;
	header("location:admin/profile.php");
   	}
	else
	{
	$sql = mysql_query("SELECT * FROM deleted WHERE Email='$l_email'");
	$userCount= mysql_num_rows($sql);
		if($userCount == 1) 
		{
			echo "<span style=\"
				position:absolute;
				top:530px;
				left:650px;
				color:white;
				font-size:25px;
				font-weight : bold;
				font-family:Agency FB
				\">Account has been Removed</span>";
		}
		else
		{
			$sql = mysql_query("SELECT FName FROM user WHERE Email='$l_email' AND Password='$l_pass'");
			$userCount= mysql_num_rows($sql);
			if($userCount == 1) 
			{
				while($row=mysql_fetch_array($sql))
				{
					$fname = $row["FName"];
				}
				session_start();
				$_SESSION["fname"]=$fname;
				$_SESSION["email"]=$l_email;
				$_SESSION["password"]=$l_pass;
				header("location:usr/profile.php");
			}
			else
			{
				echo "<span style=\"
					position:absolute;
					top:530px;
					left:650px;
					color:white;
					font-size:25px;
					font-weight : bold;
					font-family:Agency FB
					\">Invalid Email Id or Password</span>";
			}
		}
	}
  }
else
{
  echo "<span style=\"
			 position:absolute;
			 top:530px;
			 left:650px;
			 color:white;
			 font-size:25px;
			 font-weight : bold;
			 font-family:Agency FB
			 \">Fill In Entries</span>";
}
}
?>  