<?php
/**
 * Created by PhpStorm.
 * User: Rakib
 * Date: 5/29/2017
 * Time: 11:14 AM
 */
if (!isset($_SESSION)) session_start();
require_once("../../../vendor/autoload.php");



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Birthday</title>
    <link rel="stylesheet" href="../../../resources/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../resource/bootstrap/css/formstyle.css">
    <script src="../../../resources/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <style>
        body {
            background:antiquewhite;
        }
    </style>
    <script>
        $(function () {
            $("#birthday").datepicker({dateFormat: 'yy-mm-dd'});
        });
    </script>
</head>
<body>
<div class="container">
    <h1 style="color: #442a8d;">Birthday Information Entry</h1>


            <form action="store.php" method="post">

                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="birthday">Your Birthday</label>
                    <input type="text" name="birthday" id="birthday" class="form-control" placeholder="yyyy-mm-dd">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Submit">
                </div>
            </form>
        </div>
    </div>

</div>


</body>
</html>
