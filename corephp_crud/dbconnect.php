<?php


 $con=mysqli_connect('localhost','root','theprime','darshan');

 if($con){
 	echo "Database Connect<br>";
 }else{
 	echo "Connection error";
 }

?>