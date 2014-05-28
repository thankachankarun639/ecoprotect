<!DOCTYPE HTML>
<html>

<head>
<meta name="Wildlife" content="supprot, Conservation, Events, Donate">
<meta charset="UTF-8">
<title>Wildlife Protection</title>

<link rel="stylesheet" href="../css/header2.css" type="text/css">
<link rel="stylesheet" href="../css/admin.css" type="text/css">
<link rel="stylesheet" href="../css/footer2.css" type="text/css">

</head>

<h1 style="position : absolute;
 top : 70px;
 left : 50px;
 width : 900px;
 font-family : Agency FB;
 font-size : 25px;
 border-bottom : 2px solid black;">Users</h1>

<form action="" method="POST" id="information" name="myForm">
ENTER EMAIL-ID
<input type="text" name="email"><br/><br/>
<input type="submit" name="rm" value="Delete User">
</form>

<div id="Header">
<ul>
 <li id="support"><a href="volunteer.php">VOLUNTEER</a></li>
 <li id="organize"><a href="publicity.php">PUBLICITY</a></li>
 <li><a href="../db/logout.php">LOGOUT</a></li>
</ul>
<a href="profile.php"><img src="../img/logo.png" height="50px" width="350px" id="logo"></a>
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
 $ln = "";
 
 $fn = $_SESSION['fname'];
 $email = $_SESSION['email'];
 
?>

<html>
<body>
<div id="Info">
<?php
$sql = mysql_query("SELECT * FROM user");
echo "<table cellspacing=\"20\">";
   while($row=mysql_fetch_array($sql))
   {
	 $fn = $row['FName'];
     $email = $row['Email'];
	 $ln = $row["LName"];
	 echo "<tr style=\"
	font-family : Agency FB;
	font-size : 22px;\">
	<td>$fn</td> 
	<td>$ln</td> 
	<td>$email</td>
	</tr>";
   }
echo "</table>";
 ?>
</div> 
</div> 
</body>
</html>  

<?php
 include("../db/delete_user.php");
?>