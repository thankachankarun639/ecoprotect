<?php
 include("../db/dblogin.php"); 
 ?>
<!DOCTYPE HTML>
<html>
<head>
<meta name="Wildlife" content="supprot, Conservation, Events, Donate">
<meta charset="UTF-8">
<title>Wildlife Protection</title>
<link rel="stylesheet" href="../css/header2.css" type="text/css">
<link rel="stylesheet" href="../css/footer2.css" type="text/css">
<link rel="stylesheet" href="../css/login.css" type="text/css">
</head>

<body style="overflow:hidden;">

<div id="formheader" style="left:1000px;">
CHANGE NAME
</div>
<form action="#" method="post" id="information" style="left:1000px">
FIRST NAME: <br/>
<input type="text" name="fname"> <br/><br/>
LAST NAME:<br/>
<input type="text" name="lname"><br/><br/>
<input type="submit" name="sname">
</form>


<div id="formheader" style="left:10px;">
UPDATE AGE
</div>
<form action="#" method="post" id="information" style="left:10px">
AGE: <br/>
<input type="text" name="age"> <br/><br/>
<input type="submit" name="sage">
</form>


<div id="formheader" style="left :320px;">
UPDATE CITY
</div>
<form action="#" method="post" id="information" style="left:320px">
CITY: <br/>
<input type="text" name="city"> <br/><br/>
<input type="submit" name="scity">
</form>

<div id="formheader" style="left:630px;">
CHANGE PASSWORD
</div>
<form action="#" method="post" id="information" style="left:630px;">
OLD PASSWORD: <br/>
<input type="text" name="opass"> <br/><br/>
NEW PASSWORD:<br/>
<input type="text" name="npass"><br/><br/>
REPEAT PASSWORD:<br/>
<input type="text" name="rpass"><br/><br/>
<input type="submit" name="spass">
</form>

<form action="upload_pic.php" method="post"
enctype="multipart/form-data"
style="position : absolute;left:20px;top:400px;
 color : black;
 font-family : Agency FB;
 font-size : 20px;
 font-weight : bold;
 padding: 50px;
 border-left : 2px solid white;">
<label for="file">CHANGE PROFILE PICTURE</label><br/>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" value="Submit">
</form>


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
</body>
</html>

<?php
 include("../db/loggedin.php");
 include("../db/settings.php");
 include("../db/upload.php");
 ?>