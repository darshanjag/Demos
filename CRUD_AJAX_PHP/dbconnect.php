<?php


 $con=mysqli_connect('localhost','root','','Demos');

 if($con){
 	echo "Database Connect<br>";
 }else{
 	echo "Connection error";
 }

?>