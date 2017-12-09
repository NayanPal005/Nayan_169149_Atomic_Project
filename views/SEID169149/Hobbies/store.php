<?php


require_once ("../../../vendor/autoload.php");
$objHobbies=new \App\Hobbies\Hobbies();

$strHobbies=implode(", ",$_POST['Hobbies']);

$_POST['Hobbies']=$strHobbies;

$objHobbies->setData($_POST);

$objHobbies->store();