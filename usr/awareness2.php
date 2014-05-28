<!DOCTYPE HTML>
<html>

<head>
<meta name="Wildlife" content="supprot, Conservation, Events, Donate">
<meta charset="UTF-8">
<title>Wildlife Protection</title>

<link rel="stylesheet" href="../css/header2.css" type="text/css">
<link rel="stylesheet" href="../css/awareness.css" type="text/css">
<link rel="stylesheet" href="../css/footer2.css" type="text/css">

</head>

<body>

<div id="explanation">
<h1>ORGANIZE AWARENESS PROGRAMMES</h1>
<p>We encourage any organization or community to create their events and get support and donations for their events through this site.</p>
<p>The files uploaded should be in <b>zip</b> or <b>tar.gz</b> format. They should not exceed 10MB in the size and the compressed file nust consist of a poster for the event, guidlelnes for the events, aim/vision/mission of the awareness programmes, detailed timeline of the programme and in what light the publicity should go for the programme (donations reqired or not). Only after careful consideration will the event be assigned in the site.
</p>
</div>

<form action="upload_file.php" method="post"
enctype="multipart/form-data"
style="position : absolute;left:950px;top:100px;
 color : black;
 font-family : Agency FB;
 font-size : 20px;
 font-weight : bold;
 padding: 50px;
 border-left : 2px solid white;
  border-radius : 30px;
 opacity : 0.65;">
<label for="file">Filename:</label>
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
 ?>