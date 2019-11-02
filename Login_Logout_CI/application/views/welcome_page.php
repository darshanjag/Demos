<?php 
echo 'welcome : ';
foreach($this->session->userdata('userdata') as $name){
    echo $name->username.'<br>';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="<?=base_url('logout/log_out')?>">logout</a>
</body>
</html>