

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

<div class="container" >
<h2>Users</h2>
  <form method="post" action=''>
  <input placeholder="search" type="text" name="searchvalue" id="search" onkeyup="searchh(this.value);">

  </form>
  

  <table class="table table-hover"  >


    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody  id="mytable">
    <?php foreach($users as $value ){?>
      <tr>
        <td><?=$value->first_name?></td>
        <td><?=$value->last_name?></td>
        <td><?=$value->email?></td>
      </tr>
    <?php }?>
    </tbody>
  </table>
</div>

</body>

<script>


function searchh(s){
  
 $.ajax({
    
    url: '<?php echo base_url('search/search_user/');?>',
    data: {'searchvalue':s},
    type:'post',
    success: function(res){
        console.log(res);
        $('#mytable').html(res);
     
    }

 })

}


</script>
</html>
