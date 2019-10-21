<?php


$servername = "localhost"; //host name
$username = "root"; // user name
$password = "theprime"; // password
$database = 'darshan'; // database name

$conn = new mysqli($servername, $username, $password, $database);

if(mysqli_connect_errno()){ //Returns an error code from the last connection error, if any:

   echo 'failed to connect '.mysqli_connect_error();  // outputs mysqli error

}else{

   echo 'connection success';  // outputs success 

}


?>
