<?php

require_once ("../../../vendor/autoload.php");


$obj=new \App\BookTitle\BookTitle();
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
       <th>Book Title</th>
       <th>Author Name</th>
       <th>Action Buttons</th>
   </tr>
    <?php
    $serial=1;
    foreach ($allData as $record) {
        echo "
      <tr>
      <td>$serial</td>
      <td>$record->id</td>
      <td>$record->book_title</td>
      <td>$record->author_name</td>
    
      <td>
      
      <td>
      <a href='view.php?id=$record->id'>
      <button class='btn btn-primary'>view</button>
</a>
<a href='edit.php?id=$record->id'>
      <button class='btn btn-warning'>edit</button>
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
