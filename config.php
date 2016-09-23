<?php
$servername = "localhost";
$username = "root";
$password = "aftab";
$database = "aftabjamdatabase";
// Create connection
mysql_connect($servername,$username,$password);
mysql_select_db($database) or die( "Unable to select database");


?>
