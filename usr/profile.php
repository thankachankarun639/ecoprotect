<!DOCTYPE HTML>
<html>

<head>
<meta name="Wildlife" content="supprot, Conservation, Events, Donate">
<meta charset="UTF-8">
<title>Wildlife Protection</title>

<link rel="stylesheet" href="../css/header2.css" type="text/css">
<link rel="stylesheet" href="../css/profile.css" type="text/css">
<link rel="stylesheet" href="../css/footer2.css" type="text/css">

<style type="text/css">
body
{
 background-image:url(../img/user.jpg);
}
</style>
</head>

<body>
<h1 style="position : absolute;
 top : 70px;
 left : 350px;
 width : 900px;
 font-family : Agency FB;
 font-size : 25px;
 border-bottom : 2px solid black;">Volunteer Work</h1>
<h1 style="position : absolute;
 top : 350px;
 left : 350px;
 width : 900px;
 font-family : Agency FB;
 font-size : 25px;
 border-bottom : 2px solid black;">Publicity Work</h1>

<div id="Header">
<ul>
 <li id="support"><a href="#">SUPPORT</a></li>
 <li id="organize"><a href="#">ORGANIZE</a></li>
 <li><a href="../db/logout.php">LOGOUT</a></li>
</ul>
<a href="index2.php"><img src="../img/logo.png" height="50px" width="350px" id="logo"></a>
<div id="supportli">
<a href="volunteer2.php">VOLUNTEER</a><hr>
<a href="publicity2.php">PUBLICITY</a><hr>
</div>

<div id="organizeli">
<a href="awareness2.php">CAMPAIGN</a><hr>
<a href="event2.php">EVENT</a><hr>
</div>
</div>

<div id="footer">
<div id="footer3">
All Rights Reaserved<br/>
</div>
<div id="footer4">
C
</div>
</div>

<script src="../js/jquery.js"></script>
<script src="../js/dropdown.js"></script>
<script src="../js/slider.js"></script>
</body>
</html>
<?php
 include("../db/loggedin.php"); 
 include("../db/dblogin.php");
 $fn = "";
 $email = "";
 $ename = "";
 
 $fn = $_SESSION['fname'];
 $email = $_SESSION['email'];
 
?>
<html>
<body>
<div id="Volunteer">
<?php
$sql = mysql_query("SELECT * FROM volunteer WHERE Email='$email'");
   while($row=mysql_fetch_array($sql))
   {
     $ename = $row["Event"];
	 echo "<span style=\"
	font-family : Agency FB;
	font-size : 20px;
	font-weight:bold\">
	$ename
	</span><br/>";
   }
 ?>
</div> 
<div id="Publicity">
<?php
$sql = mysql_query("SELECT * FROM publicity WHERE Email='$email'");
   while($row=mysql_fetch_array($sql))
   {
    $ename = $row["Event"];
	 echo "<span style=\"
	font-family : Agency FB;
	font-size : 20px;
	font-weight:bold\">
	$ename
	</span><br/>";
   }
?>
</div> 
<?php 
$sql="";
$email = $_SESSION['email'];
$name="";
$sql = mysql_query("SELECT Folder FROM user WHERE Email='$email'");
while($row=mysql_fetch_array($sql))
				{
					$name = $row["Folder"];
				}
$url = "../usr_files/".$name."/profilepic";
 ?>
 
<div id="sidebar" style="position:absolute;top:30px;left:20px">
<img src="<?php
if(file_exists($url)) 
{
 echo $url;
}
else
{
 echo "../img/default.png";
} ?>" 
width="280px" height="300px" style="position:absolute;top:50px;left:10px;border-right:3px solid white;border-bottom:3px solid white;border-radius:25px"/>

<div id="about">
</div>
</div>
</body>
</html>  