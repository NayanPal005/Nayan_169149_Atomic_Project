<?php

require_once ("../../../vendor/autoload.php");


$obj=new \App\BookTitle\BookTitle();
$obj->setData($_GET);
$singleData=$obj->view();

?>


<!DOCTYPE HTML >
<html lang="en">
<head>
    <link rel="stylesheet" href="../../../resource/bootstrap/css/formstyle.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>

<h1>Single Record Information BookTitle</h1>
<table class="table table-bordered table-striped">
   <tr>
     <!--  <th>Serial</th>-->
       <th>ID</th>
       <th>Book Title</th>
       <th>Author Name</th>
     <!--  <th>Action Buttons</th>-->
   </tr>
    <?php
  //  $serial=1;
   // foreach ($allData as $record) {
        echo "
      <tr>
    
      <td>$singleData->id</td>
      <td>$singleData->book_title</td>
      <td>$singleData->author_name</td>
    
     
      
    
      
      
      
      

      </tr>
  
    ";//end of echo
      //  $serial++;
   // }//end of foreach loop

    ?>




</table>

</body>
</html>
