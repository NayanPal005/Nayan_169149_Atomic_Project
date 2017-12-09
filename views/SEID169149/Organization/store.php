<?php

require_once ("../../../vendor/autoload.php");


 $objOrganization=new \App\Organization\Organization();

 $objOrganization->setData($_POST);
 $objOrganization->store();