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

    <h1 style="color: #442a8d;">My Hobbies</h1>

    <form action="store.php" method="post">

        <strong> Please Enter Your Name:</strong>
        <input type="text" name="name">
        <br>

        <input type="checkbox" name="Hobbies[]" value="Books" />Books<br />
        <input type="checkbox" name="Hobbies[]" value="Movies" />Movies<br />
        <input type="checkbox" name="Hobbies[]" value="Sports" />Sports<br />
        <input type="checkbox" name="Hobbies[]" value="Programming" />Programming<br />
        <input type="checkbox" name="Hobbies[]" value="Travelling" />Travelling<br />

        <input type="submit" name="submit" value="submit" />


    </form>


</div>
</body>
</html>
