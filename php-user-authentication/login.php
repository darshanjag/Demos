<?php

session_start();

include 'dbconnction.php';

//login code paste here
if(isset($_POST['login']))
{
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	if($email && $password !='' ){
		
		$loginCheck = 'SELECT * FROM tbl_user WHERE email="'.$email.'" AND password="'.$password.'" ';
		
		$result = $conn->query($loginCheck);
		
		if(mysqli_num_rows($result) > 0 )
		{
			//to store login user data
			$_SESSION['user_data'] = mysqli_fetch_array($result);
			
			header('location:welcome.php');
		}else{
			echo 'Invalid email and password';
		}
		
	}else{
		echo 'Enter Email and Password.';
	}
	
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Login form</h2>
  
  <form action="" method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>

    <button type="submit" name="login" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
