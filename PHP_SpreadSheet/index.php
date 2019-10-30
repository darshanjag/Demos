<?php
   require_once 'PHPExcel/Classes/PHPExcel.php'; //importing phpExcel
   require_once './dbconnect.php';  //importing the Connection File
   
   $query = "SELECT * FROM excel_export"; //query to fetch the table content from database
   $result =  mysqli_query($con,$query);
   
   
   
   if(!empty($_POST['submit'])){  //on export button click
   
   
   	//create PHPExcel object
   $excel = new PHPExcel();
   
   
   $excel->getActiveSheet() //putting headers in row 3
    ->setCellValue("A3",'Firstname')
    ->setCellValue("B3", 'Lastname')
    ->setCellValue("C3", 'Email');
   
   $excel->setActiveSheetIndex(0);

   $excel->getActiveSheet()->getStyle('3:3')->getFont()->setBold(true); //setting the header row tobold

   $excel->getActiveSheet()->getColumnDimension('A')->setWidth(30); //setting the width of the cell
   $excel->getActiveSheet()->getColumnDimension('B')->setWidth(30);
   $excel->getActiveSheet()->getColumnDimension('C')->setWidth(30);

   	$row =4;
   	while($data=mysqli_fetch_object($result)) {  //loop to insert data
   		$excel->getActiveSheet()
   
   
   		->setCellValue("A".$row, $data->firstname)
   		->setCellValue('B'.$row,$data->lastname)
   		->setCellValue('C'.$row,$data->email);
   
   
   		$row++;
   }
   // redirect to browser (download) instead of saving the result as a file
   
   // this is for MS Office Excel 2007 xlsx format
   header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

   header('Content-Disposition: attachment; filename="test.xlsx"');
   
   //this is for MS Office Excel 2003 xls format
   //header('Content-Type: application/vnd.ms-excel');
   //header('Content-Disposition: attachment; filename="test.xlsx"');
   
   
   header('Cache-Control: max-age=0');
   ob_end_clean();
   //write the result to a file
   //for excel 2007 format
   $file = PHPExcel_IOFactory::createWriter($excel,'Excel2007');
   
   //for excel 2003 format
   //$file = PHPExcel_IOFactory::createWriter($excel,'Excel5');
   
   //output to php output instead of filename
   $file->save('php://output');
   $excel->disconnectWorksheets();
   unset($excel);
   exit();
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

         <h2>Table Export Demo</h2>

         <table class="table table-hover">

            <form method="post" action="">

               <button class="btn btn-success pull-right" t name='submit' value='submit'>export</button>

            </form>

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