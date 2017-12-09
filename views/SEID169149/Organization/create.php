<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Organization Form</title>
    <link rel="stylesheet" href="../../../resource/bootstrap/css/formstyle.css">
    <style>
        body {
            background:antiquewhite;
        }
    </style>
</head>
<body>
<div class="container">

    <h1 style="color: #442a8d;">Organization Information Entry</h1>

    <form action="store.php" method="post">
        <div class="form-group">
            <label for="name">Your Name</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="organizationName">Organization Name</label>
            <input type="text" name="organizationName" id="organizationName" class="form-control">
        </div>
        <div class="form-group">
            <label for="organizationSummary">Organization Summary</label>
            <textarea name="organizationSummary" id="organizationSummary" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Submit">
        </div>

    </form>


</div>
</body>
</html>