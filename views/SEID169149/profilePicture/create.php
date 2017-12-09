
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile_Picture</title>
    <link rel="stylesheet" href="../../../resource/bootstrap/css/formstyle.css">
    <style>
        body {
            background:antiquewhite;
        }
    </style>
</head>
<body>
<div class="container">

    <h1 style="color: #442a8d;">Process Profile Picture</h1>

    <form class="form-group" action="store.php" method="post" enctype="multipart/form-data">

        <strong> Please Enter Person's Name:</strong>
        <input class="form-control" type="text" name="name">
        <br>

        <strong>Please Enter Profile Picture: </strong>
        <input type="file" name="profile_picture" accept=".png, .jpg, .jpeg">
        <br>

        <input type="submit">

    </form>


</div>
</body>
</html>