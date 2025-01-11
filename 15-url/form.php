<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="GET">
        <input type="text" name="book" value="<?php if(!empty($_GET['book'])) echo $_GET['book']; ?>" />
        <input type="submit" value="Submit">
    </form>
</body>
</html>