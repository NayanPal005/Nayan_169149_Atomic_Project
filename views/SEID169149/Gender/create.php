<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gender Information</title>
    <link rel="stylesheet" href="../../../resource/bootstrap/css/formstyle.css">
    <style>
        body {
            background:antiquewhite;
        }
    </style>
</head>
<body>
<div class="container">

    <h1 style="color: #442a8d;">Gender Information Entry</h1>

    <form action="store.php" method="post">

        <strong> Please Enter Your Name:</strong>
        <input type="text" name="name">
        <br>


        <input type="radio" name="gender" value="male" checked> Male
        <input type="radio" name="gender" value="female"> Female
        <input type="radio" name="gender" value="other"> Other <br>
        <input type="submit">


    </form>


</div>
</body>
</html>
