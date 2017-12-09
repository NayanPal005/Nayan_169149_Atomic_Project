<?php


namespace App\BookTitle;

use App\Utility\Utility;
use PDO;
use App\Model\Database;

class BookTitle extends Database
{
  public $id;
  public $bookTitle;
  public $authorName;

  public function setData($postArray){
      if(array_key_exists("id",$postArray)) {
          $this->id = $postArray['id'];
      }

      if(array_key_exists("bookTitle",$postArray)) {
          $this->bookTitle = $postArray['bookTitle'];
      }


      if(array_key_exists("authorName",$postArray)) {
          $this->authorName= $postArray['authorName'];
      }
  }


  public function store(){



      $sqlQuery="INSERT INTO `book_title` (`book_title`, `author_name`) VALUES ( ?,?);";
      $dataArray=array($this->bookTitle,$this->authorName);
      $STH=$this->DBH->prepare($sqlQuery);
      $STH->execute($dataArray);
  }
  public function index(){
      $sqlQuery="Select * from book_title";
      $STH= $this->DBH->query($sqlQuery);
      $STH->setFetchMode(PDO::FETCH_OBJ);
      $allData= $STH->fetchAll();

      return$allData;

  }
    public function view(){
        $sqlQuery="Select * from book_title where id=".$this->id;
        $STH= $this->DBH->query($sqlQuery);
        $STH->setFetchMode(PDO::FETCH_OBJ);
        $singleData= $STH->fetch();

        return $singleData;

    }

    public function update(){



        $sqlQuery="UPDATE book_title SET book_title = ?, `author_name` = ? WHERE id = $this->id;";
        $dataArray=array($this->bookTitle,$this->authorName);
        $STH=$this->DBH->prepare($sqlQuery);
        $STH->execute($dataArray);
    }


}