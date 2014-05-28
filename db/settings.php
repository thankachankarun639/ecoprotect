<?php
 $sname = @$_POST['sname'];
 $sage = @$_POST['sage'];
 $scity = @$_POST['scity'];
 $spass = @$_POST['spass'];
 $spic = @$_POST['spic'];
 
 $fn = "" ;
 $ln = "" ;
 $age = "";
 $city = "";
 $opass="";
 $npass="";
 $rpass="";
 
 $fn = strip_tags(@$_POST['fname']);
 $ln = strip_tags(@$_POST['lname']);
 $age = strip_tags(@$_POST['age']);
 $city = strip_tags(@$_POST['city']);
 $opass = strip_tags(@$_POST['opass']);
 $npass = strip_tags(@$_POST['npass']);
 $rpass = strip_tags(@$_POST['rpass']);
 
 $fname = @$_SESSION["fname"];
 $email = @$_SESSION["email"];
 
 $password_query = mysql_query("SELECT * FROM user WHERE Email = '$email'");
			while($row = mysql_fetch_array($password_query))
			{
			 $folder= $row['Folder'];
			}
 
 if ($sname) 
 {
  if($fn && $ln)
   {
    if(strlen($fn)>20 ||strlen($ln)>20)
	{
	   echo "<span style=\"
			 position:absolute;
			 top:530px;
			 left:1150px;
			 color:black;
			 font-size:30px;
			 font-weight : bold;
			 font-family:Agency FB
			 \">Max lenght of FName/Lname is 30</span>";
	}	
		else
	   { 
			mysql_query("UPDATE user SET FName='$fn' WHERE Email='$email'");
			mysql_query("UPDATE user SET LName='$ln' WHERE Email='$email'");
			echo "<span style=\"
			 position:absolute;
			 top:530px;
			 left:1150px;
			 color:black;
			 font-size:30px;
			 font-weight : bold;
			 font-family:Agency FB
			 \">Name Updated</span>";
			
		}		
   }
  else
  {  
  echo "<span style=\"
  position:absolute;
  top:530px;
  left:1150px;
  color:black;
  font-size:30px;
  font-weight : bold;
  font-family:Agency FB
  \">Fill In all Fields</span>";
  }
 }
 
 
 
 if ($spass) 
 {
  if($opass && $npass && $rpass)
   {
    if(strlen($opass)>20 ||strlen($rpass)>20 || strlen($npass)>20)
	{
	   echo "<span style=\"
			 position:absolute;
			 top:530px;
			 left:1150px;
			 color:black;
			 font-size:30px;
			 font-weight : bold;
			 font-family:Agency FB
			 \">Max lenght of password is 30</span>";
	}	
		else
	   { 
			$password_query = mysql_query("SELECT * FROM user WHERE Email = '$email'");
			while($row = mysql_fetch_array($password_query))
			{
			 $db_password= $row['Password'];
			}
			if($opass==$db_password)
			{
			 if($npass==$rpass)
			 {
			  mysql_query("UPDATE user SET Password='$npass' WHERE Email='$email'");
			echo "<span style=\"
			 position:absolute;
			 top:530px;
			 left:1150px;
			 color:black;
			 font-size:30px;
			 font-weight : bold;
			 font-family:Agency FB
			 \">Password Updated</span>";
			 }
			 else
			 {
			  echo "<span style=\"
			 position:absolute;
			 top:530px;
			 left:1150px;
			 color:black;
			 font-size:30px;
			 font-weight : bold;
			 font-family:Agency FB
			 \">Passwords do not match</span>";
			 }
			}
			else
			{
			 echo "<span style=\"
			 position:absolute;
			 top:530px;
			 left:1150px;
			 color:black;
			 font-size:30px;
			 font-weight : bold;
			 font-family:Agency FB
			 \">Password is Incorrect!</span>";
			}
			
		}		
   }
  else
  {  
  echo "<span style=\"
  position:absolute;
  top:530px;
  left:1150px;
  color:black;
  font-size:30px;
  font-weight : bold;
  font-family:Agency FB
  \">Fill In all Fields</span>";
  }
 }
 
 
 
 if ($sage) 
 {
  if($age)
       {
			mysql_query("UPDATE user SET Age='$age' WHERE Email='$email'");
			echo "<span style=\"
			 position:absolute;
			 top:530px;
			 left:1150px;
			 color:black;
			 font-size:30px;
			 font-weight : bold;
			 font-family:Agency FB
			 \">Age Updated</span>";
			
		}	
  else
  {  
  echo "<span style=\"
  position:absolute;
  top:530px;
  left:1150px;
  color:black;
  font-size:30px;
  font-weight : bold;
  font-family:Agency FB
  \">Fill In all Fields</span>";
  }
 }
 
 
 
 if ($scity) 
 {
  if($city)
   {
    if(strlen($city)>20)
	{
	   echo "<span style=\"
			 position:absolute;
			 top:530px;
			 left:1150px;
			 color:black;
			 font-size:30px;
			 font-weight : bold;
			 font-family:Agency FB
			 \">Max lenght of City is 30</span>";
	}	
		else
	   { 
			mysql_query("UPDATE user SET CITY='$city' WHERE Email='$email'");
			echo "<span style=\"
			 position:absolute;
			 top:530px;
			 left:1150px;
			 color:black;
			 font-size:30px;
			 font-weight : bold;
			 font-family:Agency FB
			 \">City Updated</span>";
			
		}		
   }
  else
  {  
  echo "<span style=\"
  position:absolute;
  top:530px;
  left:1150px;
  color:black;
  font-size:30px;
  font-weight : bold;
  font-family:Agency FB
  \">Fill In all Fields</span>";
  }
 }
?>