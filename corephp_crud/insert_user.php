<?php
 include_once('dbconnect.php');


if($_POST){
 $firstname=$_POST['firstname'];
 $lastname=$_POST['lastname'];
 $email=$_POST['email'];
 $mobile=$_POST['mobile'];


  $insert="INSERT INTO tbl_user (firstname,lastname,email,mobile) values('$firstname', '$lastname', '$email', '$mobile')";
   $result=mysqli_query($con,$insert);
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
  <h2>User form</h2>
 <a href="show.php">Home</a>
  <form action="" method="post">
    <div class="form-group">
      <label for="email">Firstname:</label>
      <input type="text" class="form-control" id="firstname" placeholder="Enter firstname" name="firstname">
    </div>
    <div class="form-group">
      <label for="pwd">Lastname:</label>
      <input type="text" class="form-control" id="lastname" placeholder="Enter lastname" name="lastname">
    </div>
        <div class="form-group">
      <label for="pwd">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
        <div class="form-group">
      <label for="pwd">Mobile No:</label>
      <input type="text" class="form-control" id="mobile" placeholder="Enter password" name="mobile">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
