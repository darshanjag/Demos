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
  <h2>User Data</h2>

  <table class="table table-striped" id="tbl_user">


    <input placeholder="search" type="text" name="search" id="search">
    <thead>

      <tr>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Action</th>



      </tr>

    </thead>
    <tbody>
      <?php foreach($user as $value){?>
      <tr>
        <td><?php echo $value->firstname?></td>
        <td><?php echo $value->lastname?></td>
        <td><?php echo $value->email?></td>
        <td><?php echo $value->mobile?></td>
        <td><a href="<?php echo base_url('crud/edit_data/');?><?php echo $value->user_id;?>">edit</a> | <a   href="javascript:void()" onclick="delete_data('<?php echo $value->user_id; ?>')">delete</a></td>

      </tr>
    <?php }?>
    </tbody>
  </table>
</div>
<script>
function delete_data(id){

      
  $.ajax({
    url: '<?php echo base_url('crud/delete_data/');?>'+id,
    type:"post",
    success: function(res){
      $('#tbl_user').load(' #tbl_user');
    }

  })
}
</script>
</body>
</html>
