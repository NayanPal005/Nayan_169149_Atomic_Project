<?php
/**
 * Created by PhpStorm.
 * User: Rakib
 * Date: 5/29/2017
 * Time: 3:22 PM
 */

namespace App\City;

use PDO;
use App\Model\Database;

class City extends Database
{
    public $id;
    public $name;
    public $cityName;

    public function setData($postArray)
    {
        if (array_key_exists("name",$postArray))
            $this->name = $postArray["name"];
        if (array_key_exists("cityName",$postArray))
            $this->cityName = $postArray["cityName"];
    }

    public function store()
    {
        $dataArray = array($this->name,$this->cityName);
        $sqlQuery = "INSERT INTO city (name,city_name) VALUES (?,?)";
        $result = $this->DBH->prepare($sqlQuery)->execute($dataArray);

    }

    public function index(){
        $sqlQuery="Select * from city";
        $STH= $this->DBH->query($sqlQuery);
        $STH->setFetchMode(PDO::FETCH_OBJ);
        $allData= $STH->fetchAll();

        return$allData;

    }

    public function view(){
        $sqlQuery="Select * from city where id=".$this->id;
        $STH= $this->DBH->query($sqlQuery);
        $STH->setFetchMode(PDO::FETCH_OBJ);
        $singleData= $STH->fetch();

        return$singleData;

    }


}