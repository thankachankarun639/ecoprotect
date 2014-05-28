<?php
 include("db/logout1.php");
?>
<?php
 include("db/dblogin.php"); 
 include("db/signin.php");
 include("db/login.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta name="Wildlife" content="supprot, Conservation, Events, Donate">
<meta charset="UTF-8">
<title>Wildlife Protection</title>
<link rel="stylesheet" href="css/header2.css" type="text/css">
<link rel="stylesheet" href="css/footer2.css" type="text/css">
<link rel="stylesheet" href="css/login.css" type="text/css">
<script type="text/javascript">
function validateForm()
{
var x=document.forms["myForm"]["emailid"].value;
var a=document.forms["myForm"]["fname"].value;
var b=document.forms["myForm"]["lname"].value;
var c=document.forms["myForm"]["city"].value;

var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");

if (atpos<1 || dotpos<atpos+3 || dotpos+3>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
  
if(a.indexof("0")!=-1 || a.indexof("1")!=-1 || a.indexof("2")!=-1 || a.indexof("3")!=-1 || a.indexof("4")!=-1 || a.indexof("5")!=-1 || a.indexof("6")!=-1 ||a.indexof("7")!=-1 || a.indexof("8")!=-1 || a.indexof("9")!=-1)
{
  alert("First Name must contain only characters");
  return false;
}

if(b.indexof("0")!=-1 || b.indexof("1")!=-1 || b.indexof("2")!=-1 || b.indexof("3")!=-1 || b.indexof("4")!=-1 || b.indexof("5")!=-1 || b.indexof("6")!=-1 ||b.indexof("7")!=-1 || b.indexof("8")!=-1 || b.indexof("9")!=-1)
{
  alert("Last Name must contain only characters");
  return false;
}

if(c.indexof("0")!=-1 || c.indexof("1")!=-1 || c.indexof("2")!=-1 || c.indexof("3")!=-1 || c.indexof("4")!=-1 || c.indexof("5")!=-1 || c.indexof("6")!=-1 || c.indexof("7")!=-1 || c.indexof("8")!=-1 || c.indexof("9")!=-1)
{
  alert("City Name must contain only characters");
  return false;
}
}
</script>
</head>

<body>
<div id="explanation">
<h1>SIGN UP</h1>
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


<div id="formheader">
NOT A MEMBER? JOIN FOR FREE
</div>

<form onSubmit="return validateForm();" action="#" method="post" id="information" name="myForm">
FIRST NAME: <br/>
<input type="text" name="fname"> <br/><br/>
LAST NAME:<br/>
<input type="text" name="lname"><br/><br/>
AGE(15-50):<br/>
<input type="number" name="age" min="15" max="50"><br/><br/>
CITY:<br/>
<input type="text" name="city"><br/><br/>
EMAIL ID:<br/>
<input type="email" name="emailid"><br/><br/>
PASSWORD:<br/>
<input type="password" name="password"><br/><br/>
<input type="submit" name="reg">
</form>


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