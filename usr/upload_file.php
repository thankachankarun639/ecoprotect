<?php
/*
 include("awareness2.php");

if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br>";
  }
else
  {
  echo "Upload: " . $_FILES["file"]["name"] . "<br>";
  echo "Type: " . $_FILES["file"]["type"] . "<br>";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
  echo "Stored in: " . $_FILES["file"]["tmp_name"];
  }
*/
?>

<?php

include("awareness2.php");

$allowedExts = array("zip");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if (($_FILES["file"]["size"] < 2000000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    if (file_exists("../upload/" . $_FILES["file"]["name"]))
      {
	  echo "<span style=\"
				position:absolute;
				top:270px;
				left:1050px;
				color:white;
				font-size:30px;
				font-weight : bold;
				font-family:Agency FB
				\">File Already Exists</span>";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "../upload/" . $_FILES["file"]["name"]);
      echo "<span style=\"
				position:absolute;
				top:270px;
				left:1050px;
				color:white;
				font-size:30px;
				font-weight : bold;
				font-family:Agency FB
				\">Uploaded Successfully!</span>";
      }
    }
  }
else
  {
  echo "<span style=\"
				position:absolute;
				top:270px;
				left:1050px;
				color:white;
				font-size:30px;
				font-weight : bold;
				font-family:Agency FB
				\">Invalid Flie</span>";
  }
?>