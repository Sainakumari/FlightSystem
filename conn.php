<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '1234';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass) 
		or die('Erron Connecting To mysql');
/*if($conn) 
 { 
  echo 'CONNECTED TO SERVER'; 
 } 
  */

$dbname ='iwt';
$dbconn = mysqli_select_db($conn, $dbname);

/*if($dbconn) 
 { 
  echo 'CONNECTED TO DATABASE'; 
 } */

?>
