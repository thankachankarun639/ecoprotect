<?php

include('account.php');
$submit=@$_POST['submit'];

if($submit)
{
$sql="";
$email = $_SESSION['email'];
$name="";
$sql = mysql_query("SELECT Folder FROM user WHERE Email='$email'");
while($row=mysql_fetch_array($sql))
				{
					$name = $row["Folder"];
				}

$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 200000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "../usr_files/$name/profilepic");
      echo "<span style=\"
				position:absolute;
				top:550px;
				left:1050px;
				color:white;
				font-size:30px;
				font-weight : bold;
				font-family:Agency FB
				\">Uploaded Successfully!</span>";
    
    }
  }
else
  {
  echo "<span style=\"
				position:absolute;
				top:550px;
				left:1050px;
				color:white;
				font-size:30px;
				font-weight : bold;
				font-family:Agency FB
				\">Invalid Flie</span>";
  }
}
?>