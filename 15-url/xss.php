<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="xss.php" method="POST">
        <input type="text" name="username" placeholder="username" value="<?php if(!empty($_POST['username'])) echo e($_POST['username']); ?>">
        <input type="submit" value="Login">
    </form>

    <pre>
        <?php
            // var_dump($_POST);
            function e($value){
                return htmlentities($value, ENT_QUOTES, 'UTF-8');
            }
        ?>
    </pre>
</body>
</html>