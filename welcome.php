<?php
 include("db/logout1.php");
?>
<?php
 include("db/dblogin.php"); 
 include("db/login.php");
?>
<html>
<head>
<meta name="Wildlife" content="supprot, Conservation, Events, Donate">
<meta charset="UTF-8">
<title>Wildlife Protection</title>
<link rel="stylesheet" href="css/header2.css" type="text/css">
<link rel="stylesheet" href="css/footer2.css" type="text/css">
<link rel="stylesheet" href="css/welcome.css" type="text/css">
</head>

<body>

<div id="explanation">
<h1>WELCOME</h1>
<p>
The site is desgned to encourage and support all those motivated towards saving mother earth and all the encompasses it. Wildlife protection being the major focus of this endeavour there are a number of events publicized supporting the conservation of the same. The site also provides a great way to meet sponsors, get publicity for your events and so on
</p>

<p>
The site was established in hopes of rallying mass support for the conservation of wildlife mainly through the ECO-SUMMIT which is being held in bangalore, annually on 24th September (which marks the summer solistice). We hope to aid you in all your ventures and hope to see the same suppprot extended to make our venture a great success.
</p>
</div>

<form action="#" method="post" id="login">
EMAIL: <br/>
<input type="text" name="l_email"> <br/><br/>
PASSWORD:<br/>
<input type="password" name="l_pass"><br/><br/>
<input type="submit" name="login" value="LOGIN">
</form>

<div id="continue" style="color:white;position:absolute;top:200px;left:550px;font-size:25px;
font-weight:bold;font-family:Agency FB;border-left:2px solid white;padding-left:50px;">
<span style="color:black">ACCOUNT CREATED</span>  LOGIN TO VIEW
</div>

<div id="Header">
<ul>
 <li id="support"><a href="#">SUPPORT</a></li>
 <li id="organize"><a href="#">ORGANIZE</a></li>
 <li><a href="login.php">LOGIN</a></li>
</ul>
<a href="index.php"><img src="img/logo.png" height="50px" width="350px" id="logo"></a>
<div id="supportli">
<a href="volunteer.php">VOLUNTEER</a><hr>
<a href="publicity.php">PUBLICITY</a><hr>
</div>

<div id="organizeli">
<a href="awareness.php">CAMPAIGN</a><hr>
<a href="event.php">EVENT</a><hr>
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

<script src="js/jquery.js"></script>
<script src="js/dropdown.js"></script>
</body>
</html>