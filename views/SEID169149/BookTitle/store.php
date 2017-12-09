
<?php

    require_once ("../../../vendor/autoload.php");

     $objBookTitle=new \App\BookTitle\BookTitle();
     $objBookTitle->setData($_POST);

     $objBookTitle->store();

