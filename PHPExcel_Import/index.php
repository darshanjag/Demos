<?php

   require_once 'PHPExcel/Classes/PHPExcel.php'; //importing phpExcel
   require_once './dbconnect.php';  //importing the Connection File
   
   
   
   
   if(!empty($_POST['submit'])){  //on export button click
   
      $excel = PHPExcel_IOFactory::load('./test.xlsx');
      
      
      
   
      //first row
      $i = 4;
      //loop until the end of the table. (until a cell contains an empty string)
      while($excel->getActiveSheet()->getCell('A'.$i)->getValue()!=''){
         //getCellValue
         $firstname = $excel->getActiveSheet()->getCell('A'.$i)->getValue();
         $lastname = $excel->getActiveSheet()->getCell('B'.$i)->getValue();
         $email = $excel->getActiveSheet()->getCell('C'.$i)->getValue();
         
         $query= "INSERT INTO excel_import(firstname,lastname,email) values('".$firstname."','".$lastname."','".$email."')";
         $result = mysqli_query($con,$query);
         
         
         $i++;
         
         
         
      }

      $query= "SELECT * FROM excel_import";

      $result = mysqli_query($con,$query);
      
   
   
   
   
   
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
         <form method="post" action="">
            <button class="btn btn-success pull-right" t name='submit' value='submit'>Import</button>
         </form>
         <h2>Table Import Demo</h2>
         <table class="table table-hover">
            <thead>
               <tr>
                  <th>sr.no</th>
                  <th>Firstname</th>
                  <th>Lastname</th>
                  <th>Email</th>
               </tr>
            </thead>
            <tbody>
               <?php 
                  $i=1;
                  while($data=mysqli_fetch_object($result)) {?> <!-- loop to output table content in html -->
               <tr>
                  <td><?=$i;?></td>
                  <td><?= $data->firstname?></td>
                  <td><?= $data->lastname?></td>
                  <td><?= $data->email?></td>
               </tr>
               <?php 
                  $i++;
                  }?>
            </tbody>
         </table>
      </div>
   </body>
</html>