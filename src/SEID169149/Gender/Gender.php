<?php
/**
 * Created by PhpStorm.
 * User: Swapnil Nayan
 * Date: 5/30/2017
 * Time: 9:06 AM
 */

namespace App\Gender;

use PDO;
use App\Model\Database;

class Gender extends Database
{

    public $id;
    public $name;
    public $gender;

    public function setData($postArray){
        if(array_key_exists("id",$postArray)){
            $this->id=$postArray['id'];
        }

        if(array_key_exists("name",$postArray)){
            $this->name=$postArray['name'];
        }
        if(array_key_exists("gender",$postArray)){
            $this->gender=$postArray['gender'];
        }

}
public function store(){

        $name=$_POST['name'];
        $gender=$_POST['gender'];
        $sqlQuery= "INSERT INTO `gender` ( `name`, `gender`) VALUES ( ?,?);";
        $dataArray=array($name,$gender);
        $STH= $this->DBH->prepare($sqlQuery);
        $STH->execute($dataArray);


}
   public function index(){
        $sqlQuery="Select * from gender";
        $STH= $this->DBH->query($sqlQuery);
        $STH->setFetchMode(PDO::FETCH_OBJ);
        $allData= $STH->fetchAll();

        return$allData;

    }
    public function view(){
        $sqlQuery="Select * from gender where id=".$this->id;
        $STH= $this->DBH->query($sqlQuery);
        $STH->setFetchMode(PDO::FETCH_OBJ);
        $singleData= $STH->fetch();

        return$singleData;

    }



}