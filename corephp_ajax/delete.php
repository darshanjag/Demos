<?php
  include_once('dbconnect.php');
$id=$_GET['id'];
// print_r($id);die;
  $delete="delete from tbl_user where user_id='$id'";
  $result=mysqli_query($con,$delete);
   if($result){
   	echo "success";
   // header("Location: show.php");
   }else{
   	echo "failed";
   }

?>