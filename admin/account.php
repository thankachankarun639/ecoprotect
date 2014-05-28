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
<style type="text/css">
body
{
 background-image:url(../img/admin.png)
}
</style>
</head>

<body style="overflow:hidden;">

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
</body>
</html>

<?php
 include("../db/loggedin.php");
 include("../db/settings.php");
 include("../db/upload.php");
 
 ?>