<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'http://ec2-34-218-225-11.us-west-2.compute.amazonaws.com:8080/');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'Nibu45nAQtDte7');
define('DB_NAME', 'WoWClassicGuildManagement');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
