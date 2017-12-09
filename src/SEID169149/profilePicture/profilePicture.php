<?php
/**
 * Created by PhpStorm.
 * User: Swapnil Nayan
 * Date: 5/31/2017
 * Time: 8:57 PM
 */

namespace App\profilePicture;

use PDO;
use App\Model\Database;

class profilePicture extends Database
{

    public $id;
    public $name;
    public $profilePicture;

    public function setData($postArray){
        if(array_key_exists("id",$postArray)) {
            $this->id = $postArray['id'];
        }

        if(array_key_exists("name",$postArray)) {
            $this->name= $postArray['name'];
        }


        if(array_key_exists("profilePicture",$postArray)) {
            $this->profilePicture= $postArray['profilePicture'];
        }
    }

    public function store(){

        $name= $_POST['name'];
        $profilePicture= $_POST['profilePicture'];

        $sqlQuery="INSERT INTO `profile_pictures` (`name`, `profile_picture`) VALUES ( ?,?);";
        $dataArray=array($name,$profilePicture);
        $STH=$this->DBH->prepare($sqlQuery);
        $STH->execute($dataArray);
    }

    public function index(){
        $sqlQuery="Select * from profile_pictures";
        $STH= $this->DBH->query($sqlQuery);
        $STH->setFetchMode(PDO::FETCH_OBJ);
        $allData= $STH->fetchAll();

        return$allData;

    }
    public function view(){
        $sqlQuery="Select * from profile_pictures where id=".$this->id;
        $STH= $this->DBH->query($sqlQuery);
        $STH->setFetchMode(PDO::FETCH_OBJ);
        $singleData= $STH->fetch();

        return$singleData;

    }




}