<?php

session_start();


if(isset($_SESSION['user_data'])){
	
	//remove session data for logout user
	unset($_SESSION['user_data']);
	//redirect login page
	header('location:login.php');
}

?>