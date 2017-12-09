<?php
/**
 * Created by PhpStorm.
 * User: Swapnil Nayan
 * Date: 6/2/2017
 * Time: 2:18 AM
 */

namespace App\Organization;

use PDO;
use App\Model\Database;

class Organization extends Database
{

  public $id;
  public $name;
  public $organizationName;
  public $organizationSummary;
    public function setData($postArray)
    {
        if (array_key_exists("id", $postArray)) {
            $this->id = $postArray['id'];
        }

        if (array_key_exists("name", $postArray)) {
            $this->name = $postArray['name'];
        }
        if (array_key_exists("organizationName", $postArray)) {
            $this->organizationName = $postArray['organizationName'];
        }
        if (array_key_exists("organizationSummary", $postArray)) {
            $this->organizationSummary = $postArray['organizationSummary'];
        }

    }

    public function store(){
        $name=$_POST['name'];
        $organizationName=$_POST['organizationName'];
        $organizationSummary=$_POST['organizationSummary'];

        $sqlQuery= "INSERT INTO `organization` ( `name`, `organizationName`, `organizationSummary`) VALUES (?,?,?);";

        $dataArray=array($name,$organizationName,$organizationSummary);
        $STH= $this->DBH->prepare($sqlQuery);
        $STH->execute($dataArray);
    }

    public function index(){
        $sqlQuery="Select * from organization";
        $STH= $this->DBH->query($sqlQuery);
        $STH->setFetchMode(PDO::FETCH_OBJ);
        $allData= $STH->fetchAll();

        return$allData;

    }
    public function view(){
        $sqlQuery="Select * from organization where id=".$this->id;
        $STH= $this->DBH->query($sqlQuery);
        $STH->setFetchMode(PDO::FETCH_OBJ);
        $singleData= $STH->fetch();

        return$singleData;

    }



}