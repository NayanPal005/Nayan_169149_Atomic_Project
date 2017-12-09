<?php
/**
 * Created by PhpStorm.
 * User: Swapnil Nayan
 * Date: 6/1/2017
 * Time: 7:16 AM
 */

namespace App\Hobbies;

use PDO;
use App\Model\Database;

class Hobbies extends Database
{

    public $id;
    public $name;
    public $Hobbies;

    public function setData($postArray)
    {
        if (array_key_exists("id", $postArray)) {
            $this->id = $postArray['id'];
        }

        if (array_key_exists("name", $postArray)) {
            $this->name = $postArray['name'];
        }
        if (array_key_exists("Hobbies", $postArray)) {
            $this->Hobbies = $postArray['Hobbies'];
        }


    }

    public function store(){

        $name=$_POST['name'];
        $Hobbies=$_POST['Hobbies'];

        $sqlQuery = "INSERT INTO `Hobbies` ( `name`, `Hobbies`) VALUES ( ?,?);";

       $dataArray=(array($name,$Hobbies));
       // $dataArray=explode(" ",$sqlQuery);
        $STH= $this->DBH->prepare($sqlQuery);
        $STH->execute($dataArray);


    }
    public function index()
    {
        $sqlQuery = "Select * from Hobbies";
        $STH = $this->DBH->query($sqlQuery);
        $STH->setFetchMode(PDO::FETCH_OBJ);
        $allData = $STH->fetchAll();

        return $allData;

    }
    public function view(){
        $sqlQuery="Select * from Hobbies where id=".$this->id;
        $STH= $this->DBH->query($sqlQuery);
        $STH->setFetchMode(PDO::FETCH_OBJ);
        $singleData= $STH->fetch();

        return$singleData;

    }


    }