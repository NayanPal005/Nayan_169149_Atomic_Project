

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

    <form action="store.php" method="post">

        <strong> Please Enter Book Name:</strong>
        <input type="text" name="bookTitle">
        <br>

        <strong>Please Enter Author Name: </strong>
        <input type="text" name="authorName">
        <br>

        <input type="submit">

    </form>


</div>
</body>
</html>