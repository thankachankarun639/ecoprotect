<?php
$fn = "";
$ln = "";
$email = "";
$ename = "";

$fn = $_SESSION['fname'];
$email = $_SESSION['email'];
$ename = $_SESSION['ename'];

			$email_check = mysql_query("SELECT Email FROM volunteer WHERE Email = '$email' AND Event='$ename'");
			$check = mysql_num_rows($email_check);
			if($check == 0)
			{
			 $query = mysql_query("INSERT INTO volunteer VALUES ('$fn','$email','$ename')");
			 echo "<span style=\"
			 position:absolute;
			 top:250px;
			 left:1150px;
			 color:white;
			 font-size:30px;
			 font-weight : bold;
			 font-family:Agency FB
			 \">Registered!</span>";
			}
			else
			{
			  echo "<span style=\"
			 position:absolute;
			 top:250px;
			 left:1150px;
			 color:white;
			 font-size:30px;
			 font-weight : bold;
			 font-family:Agency FB
			 \">Already registred</span>";
			}
?>