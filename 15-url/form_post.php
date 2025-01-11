<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form_post.php" method="POST">
        <input type="text" name="username" placeholder="username" value="<?php if(!empty($_POST['username'])) echo $_POST['username']; ?>">
        <input type="password" name="password" placeholder="password">
        <input type="submit" value="Login">
    </form>
</body>
</html>