<?php

if(isset($_FILES["pic"]))
  {
   if(((@$_FILES["pic"]["type"]=="image/jpeg")
   || (@$_FILES["pic"]["type"]=="image/png")
   || (@$_FILES["pic"]["type"]=="image/gif")) && 
   (@$_FILES["pic"]["size"]<1048576))
   {
    
	echo "<span style=\"
  position:absolute;
  top:530px;
  left:1150px;
  color:white;
  font-size:30px;
  font-weight : bold;
  font-family:Agency FB
  \">File Uploaded</span>";
	
   }
   else
   {
    echo "<span style=\"
  position:absolute;
  top:530px;
  left:1150px;
  color:white;
  font-size:30px;
  font-weight : bold;
  font-family:Agency FB
  \">CONSTRAINT : IMAGE/<2 MB</span>";
   }
  }
  
 ?>