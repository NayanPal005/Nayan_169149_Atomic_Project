<?php
/**
 * Created by PhpStorm.
 * User: Swapnil Nayan
 * Date: 5/30/2017
 * Time: 2:40 AM
 */

namespace App\Model;

use PDO,PDOException;
class Database
{

    public $DBH;
    public function __construct()
    {

        try{
            $this->DBH= new PDO("mysql:host=localhost;dbname=atomic_project_nayan", "root", "");
            echo "Database Connection Successful <br>";
        }
        catch (PDOException $error){
            echo $error->getMessage();
        }

    }
}