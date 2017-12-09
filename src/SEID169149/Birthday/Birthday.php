<?php
namespace App\Birthday;

use App\Model\Database;
use PDO;


class Birthday extends Database
{
public $id;
public $name;
public $birthday;

public function setData($postArray)
{
if (array_key_exists("name",$postArray))
$this->name = $postArray["name"];
if (array_key_exists("birthday",$postArray))
$this->birthday = $postArray["birthday"];
}

public function store()
{
$dataArray = array($this->name,$this->birthday);
$sqlQuery = "INSERT INTO birthday_table (name,birthday) VALUES (?,?)";
$result = $this->DBH->prepare($sqlQuery)->execute($dataArray);

}
    public function index(){
        $sqlQuery="Select * from birthday_table";
        $STH= $this->DBH->query($sqlQuery);
        $STH->setFetchMode(PDO::FETCH_OBJ);
        $allData= $STH->fetchAll();

        return$allData;

    }
    public function view(){
        $sqlQuery="Select * from birthday where id=".$this->id;
        $STH= $this->DBH->query($sqlQuery);
        $STH->setFetchMode(PDO::FETCH_OBJ);
        $singleData= $STH->fetch();

        return$singleData;

    }




}