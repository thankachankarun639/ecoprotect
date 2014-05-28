<?php
$reg = @$_POST['reg'];
 $fn = "" ;
 $ln = "" ;
 $age = "";
 $city = "";
 $email = "";
 $pass = "";
 
 $fn = strip_tags(@$_POST['fname']);
 $ln = strip_tags(@$_POST['lname']);
 $age = strip_tags(@$_POST['age']);
 $city = strip_tags(@$_POST['city']);
 $email = strip_tags(@$_POST['emailid']);
 $pass = strip_tags(@$_POST['password']);
 
 if ($reg) 
 {
	if($fn && $ln && $age && $email && $city && $pass)
	{
	if(preg_match('/^\w{3,}$/',$fn) && preg_match('/^\w{3,}$/',$ln) && preg_match('/^\w{3,}$/',$city) && (filter_var($email, FILTER_VALIDATE_EMAIL)))
	{
		if(strlen($fn)>20 ||strlen($ln)>20 ||strlen($pass)>20 || strlen($city)>20)
		{
			echo "<span style=\"
			 position:absolute;
			 top:530px;
			 left:1150px;
			 color:white;
			 font-size:20px;
			 font-weight : bold;
			 font-family:Agency FB
			 \">Max lenght of Name/password/city is 30</span>";
		}
		else
		{
			if(strlen($email)>30)
			{
				echo "<span style=\"
			 position:absolute;
			 top:530px;
			 left:1150px;
			 color:white;
			 font-size:20px;
			 font-weight : bold;
			 font-family:Agency FB
			 \">Max Length of Email is 30</span>";
			}
			else
			{ 
				$email_check = mysql_query("SELECT Email FROM user WHERE Email = '$email'");
				$check = mysql_num_rows($email_check);
				$source="../img/default.png";
				$dest="../usr_files/$rand_dir_name/profilepic";
				if($check == 0)
				{
				$chars = "abcdefghijklmnopqrstuvxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
				$rand_dir_name = substr(str_shuffle($chars),0,15);
				mkdir("usr_files/$rand_dir_name");
				$query = mysql_query("INSERT INTO user VALUES ('$fn','$ln','$age','$city','$email','$pass','$rand_dir_name','Thoughts')");
				copy($source,$dest);
				header("location:welcome.php");
				}
				else
				{
				echo "<span style=\"
				position:absolute;
				top:530px;
				left:1150px;
				color:white;
				font-size:20px;
				font-weight : bold;
				font-family:Agency FB
				\">Email Id is already in use</span>";
				}
			}		
		}
	}
	else
	{
	 echo "<span style=\"
				position:absolute;
				top:530px;
				left:1150px;
				color:white;
				font-size:20px;
				font-weight : bold;
				font-family:Agency FB
				\">Invalid FirstName/LastName/City/Email</span>";
	
	}
  }
  else
  {  
  echo "<span style=\"
  position:absolute;
  top:530px;
  left:1150px;
  color:white;
  font-size:20px;
  font-weight : bold;
  font-family:Agency FB
  \">Fill In all Fields</span>";
  }
 }
?>