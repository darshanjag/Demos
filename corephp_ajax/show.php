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
     <a href="insert_user.php">Add user </a>
 <p id="msg"></p>
  <table class="table table-striped" id="tbl_user">
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
          <td> <a href="edit_user.php?id=<?php echo $data['user_id']; ?>">Edit</a> |  <a href="javascript:void()" onclick="delete_user('<?php echo $data['user_id']; ?>')">Delete</a></td>
                </tr>
                  <?php } ?>"
    </tbody>
  </table>
</div>

</body>
<script>
  function delete_user(id){
     $.ajax({
       url:'delete.php?id='+id,
       type:"post",
       success:function(res) {
         $('#tbl_user').load(' #tbl_user')
         $('#msg').html('<div class="alert alert-success"><strong>Success!</strong> User deleted successfully .</div>');
        $('.alert-success').fadeOut(4000);
       }

     }); 
  }
</script>

</html>
