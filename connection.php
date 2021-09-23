<?php
  $dbhost= "sql6.freesqldatabase.com";
  $dbuser= "sql6438989";
  $dbpass= "vStTl43c4g";
  $dbname="sql6438989";
  $port=3306;

  if(!$con= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
      die("failed to connect");
  }
 ?>
