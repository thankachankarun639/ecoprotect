<?php
 session_start();
 $fname = $_SESSION["fname"];
 $email = $_SESSION["email"];
 if(!isset($_SESSION["fname"]))
 {
  header("location:../index.php");
  exit();
 }
 else
 {

  echo "<a href=\"profile.php\" style=\"
			 position:fixed;
			 top:18px;
			 left:920px;
			 font-size:22px;
			 font-weight : bold;
			 font-family:Agency FB;
			 opacity : 0.5;
			 \">Hello,$fname</a>";
			 
  echo "<a href=\"account.php\" style=\"
			 position:fixed;
			 top:26px;
			 left:1020px;
			 font-size:12px;
			 font-weight : bold;
			 font-family:Arial;
			 opacity : 0.45;
			 \">SETTINGS</a>";
 }
?>
