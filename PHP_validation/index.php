<?php

$firstname = $lastname = $password = $cpassword = $gender = $course = $address = $city='';// strings for form data
      $firstnameErr = $lastnameErr = $passwordErr = $cpasswordErr = $genderErr = $courseErr = $addressErr = $cityErr='';


if(!empty($_POST)){


// strings for errors
   if($_POST['firstname']!=''){

      $firstname = $_POST['firstname'];

   } else {

      $firstnameErr = 'please enter the firstname';
   }


      if($_POST['lastname']!=''){

      $lastname = $_POST['lastname'];

   } else {

      $lastnameErr = 'please enter the lastname';
   }


      if($_POST['password']!=''){

      $password = $_POST['password'];

   } else {

      $passwordErr = 'please enter the password';
   }


      if($_POST['cpassword']!=''){

      $cpassword = $_POST['cpassword'];

   } else {

      $cpasswordErr = 'pelase fill confirm password';
   }


      if($_POST['gender']!=''){

      $gender = $_POST['gender'];

   } else {

      $genderErr = 'please enter the gender';
   }


      if($_POST['course']!=''){

      $name = $_POST['course'];
      foreach($name as $cor){ //loop to get values from the course array.
         $course[] = $cor;
      }

   } else {
      $course[] ='';
      $courseErr = 'please enter the course';
   }


      if($_POST['address']!=''){

      $address = $_POST['address'];

   } else {

      $addressErr = 'please enter the address';
   }
      if($_POST['city']!=''){

      $city = $_POST['city'];

   } else {

      $cityErr = 'please enter the city';
   }
   



  
}






?>








<!doctype html>
<html lang="en">
   <head>
      <link rel="stylesheet" type="text/css" href="style.css"> <!--stylesheet link-->
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
      <title>javscript validation</title>
   </head>
   <body>
      <div class="container">
         <form action="" method="post" name="validation" id="validation">
            <div class="col-md-12 Absolute-Center is-Responsive">
               <h2>PHP validation</h2>
               <div class="form-group">
                  <input type="text" class="form-control" id="firstname" placeholder="Enter firstname" name="firstname" value="<?= $firstname;?>">
                  <span id="error" ><?=$firstnameErr?></span>
               </div>
               <div class="form-group">
                  <input type="text" class="form-control" id="lastname" placeholder="Enter lastname" name="lastname" value="<?= $lastname?>">
                  <span id="error" ><?=$lastnameErr?></span>
               </div>
               <div class="form-group">
                  <input type="password" class="form-control" id="password" placeholder="password" name="password" value="<?= $password?>">
                  <span id="error" ><?=$passwordErr?></span>
               </div>
               <div class="form-group">
                  <input type="password" class="form-control" id="cpassword" placeholder="confirm password" name="cpassword"
                  value="<?= $cpassword;?>">
                  <span id="error" ><?=$cpasswordErr?></span>
               </div>
               <div class="form-group ">
                  <label for="pwd">Gender:</label>
                  <input type="radio" name="gender" value="male" checked="<?php if($gender=='male'){echo 'checked';}?>"> Male
                  <input type="radio" name="gender" value="female" checked="<?php  if($gender=='female'){echo 'checked';}?>" > Female<br>
                  <span id="error" ><?=$genderErr?></span>
               </div>
               <div class="form-group">
                  <table>
                     <label for="pwd">Courses:</label>
    
                     <tr>
                        <td>  <input type="checkbox" name="course[]" value="php" <?php if(!empty($_POST)){ if(in_array("php", $course)){echo 'checked';}}?>>php</td> <!-- checks if the string is present in the array or not. -->
                        <td> <input type="checkbox" name="course[]" value="python"  <?php if(!empty($_POST)){ if(in_array("python", $course)){echo 'checked';}}?>> python</td>
                        <td> <input type="checkbox" name="course[]" value="java"  <?php if(!empty($_POST)){ if(in_array("java", $course)){echo 'checked';}}?>> java</td>
                     </tr>
                     <tr>
                        <td> <input type="checkbox" name="course[]" value="c++"  <?php if(!empty($_POST)){ if(in_array("c++", $course)){echo 'checked';}}?>> c++</td>
                        <td> <input type="checkbox" name="course[]" value="ruby"  <?php if(!empty($_POST)){ if(in_array("ruby", $course)){echo 'checked';}}?>> ruby</td>
                        <td> <input type="checkbox" name="course[]" value="node" <?php if(!empty($_POST)){ if(in_array("node", $course)){echo 'checked';}}?>> node</td>
                     </tr>
                  </table>
                  <span id="error" ><?=$courseErr?></span>
               </div>
               <div class="form-group">
                  <label for="pwd">Address:</label>
                  <textarea class="form-control" id="address" name="address" value="<?= $address?>"><?= $address?></textarea>
                  <span id="error" ><?=$addressErr?></span>
               </div>
               <div class="form-group">
                  <select  class="form-control" name="city" id="city">
                     <option value="<?= $city?>" > <?= $city?></option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                  </select>
                  <span id="error" ><?=$cityErr?></span>
               </div>
               <button type="submit" class="btn btn-success">Submit</button>
            </div>
         </form>
      </div>
   </body>

</html>