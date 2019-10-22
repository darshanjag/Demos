<?php
 include_once('dbconnect.php');
$id=$_GET['id'];
//print_r($id);die;
$select="select * from tbl_user where user_id='$id'";
  $result=mysqli_query($con,$select);
 $data=mysqli_fetch_array($result);

if($_POST){
 $firstname=$_POST['firstname'];
 $lastname=$_POST['lastname'];
 $email=$_POST['email'];
 $mobile=$_POST['mobile'];

  
  $update='Update tbl_user set firstname="'.$firstname.'",lastname="'.$lastname.'",email="'.$email.'",mobile="'.$mobile.'" where user_id='.$id.'';
   $result=mysqli_query($con,$update);
    if($result){
      echo "<br>sucessully";
      header("Location: show.php");
    }else{
      echo "failed";
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Edit User</h2>
  <form action="" method="post">
    <div class="form-group">
      <label for="email">Firstname:</label>
      <input type="text" class="form-control" id="firstname" placeholder="Enter firstname" name="firstname" value="<?php echo $data['firstname'];?>">
    </div>
    <div class="form-group">
      <label for="pwd">Lastname:</label>
      <input type="text" class="form-control" id="lastname" placeholder="Enter lastname" name="lastname" value="<?php echo $data['lastname'];?>">
    </div>
        <div class="form-group">
      <label for="pwd">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $data['email'];?>">
    </div>
        <div class="form-group">
      <label for="pwd">Mobile No:</label>
      <input type="text" class="form-control" id="mobile" placeholder="Enter password" name="mobile" value="<?php echo $data['mobile'];?>">
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>