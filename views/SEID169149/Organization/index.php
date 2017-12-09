<?php

require_once ("../../../vendor/autoload.php");


$obj=new \App\Organization\Organization();
$allData=$obj->index();

?>


<!DOCTYPE HTML >
<html lang="en">
<head>
    <link rel="stylesheet" href="../../../resource/bootstrap/css/formstyle.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>

<h1>Multiple Record Information of Organization</h1>
<table class="table table-bordered table-striped">
    <tr>
        <th>Serial</th>
        <th>ID</th>
        <th>Name</th>
        <th>Organization Name</th>
        <th>Organization Summary</th>
        <th>Action Buttons</th>
    </tr>
    <?php
    $serial=1;
    foreach ($allData as $record) {
        echo "
      <tr>
      <td>$serial</td>
      <td>$record->id</td>
      <td>$record->name</td>
      <td>$record->organizationName</td>
      <td>$record->organizationSummary</td>
    
      <td>
      
      <td>
      <a href='view.php?id=$record->id'>
      <button class='btn btn-primary'>view</button>
</a>
</td>
      
      
      
      
</td>
      </tr>
  
    ";//end of echo
        $serial++;
    }//end of foreach loop

    ?>




</table>

</body>
</html>
