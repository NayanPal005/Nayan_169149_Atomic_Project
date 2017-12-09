<?php

require_once ("../../../vendor/autoload.php");
$objCity = new \App\City\City();
$objCity->setData($_POST);
$objCity->store();
