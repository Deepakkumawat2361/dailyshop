<?php
 define('SITENAME',"Daily Shop");
 define('SITEURL',"http://localhost/dailyshop/");
 define('SITEADMINURL',SITEURL."admin_panel/");
 define('HOST_NAME',"localhost");
 define('USERNAME',"root");
 define('PASSWORD',"");
 define('DBNAME',"dailyshop");
 
 // make connection
 $conn = new mysqli(HOST_NAME, USERNAME, PASSWORD,DBNAME);
 // check connection
 if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>