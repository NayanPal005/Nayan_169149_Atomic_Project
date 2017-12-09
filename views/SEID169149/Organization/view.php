<?php

require_once ("../../../vendor/autoload.php");


$obj=new \App\Organization\Organization();
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

<h1>Single Record Information Gender</h1>
<table class="table table-bordered table-striped">
    <tr>
        <!--  <th>Serial</th>-->
        <th>ID</th>
        <th>Name</th>
        <th>Organization Name</th>
        <th>Organization Summary</th>
        <!--  <th>Action Buttons</th>-->
    </tr>
    <?php
    //  $serial=1;
    // foreach ($allData as $record) {
    echo "
      <tr>
    
      <td>$singleData->id</td>
      <td>$singleData->name</td>
      <td>$singleData->organizationName</td>
      <td>$singleData->organizationSummary</td>
    
     
      
    
      
      
      
      

      </tr>
  
    ";//end of echo
    //  $serial++;
    // }//end of foreach loop

    ?>




</table>

</body>
</html>
