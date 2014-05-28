<?php
  $mysql_host = 'localhost';
  $mysql_user = 'root';
  $mysql_password = '';
  $mysql_error = 'Could not connect to Database';
 
  mysql_connect($mysql_host,$mysql_user,$mysql_password) or die($mysql_error);
  mysql_select_db('ecoprotect');
?>