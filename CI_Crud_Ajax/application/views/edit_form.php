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
  <h2>Stacked form</h2>
 <form action="" method="post" id="edit_form">
    <div class="form-group">
      <label for="email">Firstname:</label>
      <input type="text" class="form-control" id="firstname" placeholder="Enter firstname" name="firstname" value="<?php echo $user[0]->firstname ?>">
    </div>
    <div class="form-group">
      <label for="pwd">Lastname:</label>
      <input type="text" class="form-control" id="lastname" placeholder="Enter lastname" name="lastname" value="<?php echo $user[0]->lastname ?>">
    </div>
        <div class="form-group">
      <label for="pwd">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $user[0]->email ?>">
    </div>
        <div class="form-group">
      <label for="pwd">Mobile No:</label>
      <input type="text" class="form-control" id="mobile" placeholder="Enter password" name="mobile" value="<?php echo $user[0]->mobile ?>">
    </div>

    <button type="button" class="btn btn-success" onclick="edit_data('<?php echo $user[0]->user_id; ?>')">Submit</button>
  </form>
</div>
<script>
  function edit_data(id){

  	var formdata = $('#edit_form').serialize();
    $.ajax({
      url: '<?php echo base_url('crud/edit_data/');?>'+id,
      type:"post",
      data: formdata,
      success: function(res){
        window.location.href='<?php echo base_url('crud/show');?>'
      }
    })
  }
</script>
</body>
</html>
