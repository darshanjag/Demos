<?php
  include_once('dbconnect.php');

  $select="select * from tbl_user";
  $result=mysqli_query($con,$select);
   //$data=mysqli_fetch_array($result);

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
  <h2>User Datails</h2>
     <a href="insert_user.php">Add user</a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
         <th>Mobile</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php while($data=mysqli_fetch_array($result)) { ?>
      <tr>
        <td><?php echo $data['firstname'];?></td>
        <td><?php echo $data['lastname'];?></td>
        <td><?php echo $data['email'];?></td>
         <td><?php echo $data['mobile'];?></td>
          <td> <a href="edit_user.php?id=<?php echo $data['user_id']; ?>">Edit</a> |  <a href="delete.php?id=<?php echo $data['user_id']; ?>">Delete</a></td>
      </tr>
        <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>
