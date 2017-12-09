
<?php

if (!isset($_SESSION)) session_start();
require_once("../../../vendor/autoload.php");

$obj=new \App\BookTitle\BookTitle();
$obj->setData($_GET);
$singleData=$obj->view();

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Title Add Form</title>
    <link rel="stylesheet" href="../../../resource/bootstrap/css/formstyle.css">
    <style>
        body {
            background:antiquewhite;
        }
    </style>
</head>
<body>
<div class="container">

    <h1 style="color: #442a8d;">Book Information Entry</h1>

    <form action="update.php" method="post">

        <strong> Please Enter Book Name:</strong>
        <input type="text" name="bookTitle" value="<?php echo $singleData->book_title?>">
        <br>

        <strong>Please Enter Author Name: </strong>
        <input type="text" name="authorName" value="<?php echo $singleData->author_name?>">
        <br>
        <input type="hidden" name="id" value="$singleData->id">

        <input type="submit" value="update">

    </form>


</div>
</body>
</html>