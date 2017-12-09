
<?php

    require_once ("../../../vendor/autoload.php");

     $objprofilePicture= new \App\profilePicture\profilePicture();

     $fileName=time().$_FILES['profile_picture']['name'];
     $source=$_FILES['profile_picture']['tmp_name'];

     $destination="images/".$fileName;


     move_uploaded_file($source,$destination);

     $_POST['profilePicture']=$fileName;

     $objprofilePicture->setData($_POST);

     $objprofilePicture->store();

