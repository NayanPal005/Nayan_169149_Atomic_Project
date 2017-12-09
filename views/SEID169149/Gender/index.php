<?php

require_once ("../../../vendor/autoload.php");


$obj=new \App\Gender\Gender();
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

<h1>Multiple Record Information BookTitle</h1>
<table class="table table-bordered table-striped">
    <tr>
        <th>Serial</th>
        <th>ID</th>
        <th>Name</th>
        <th>Gender</th>
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
      <td>$record->gender</td>
    
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
