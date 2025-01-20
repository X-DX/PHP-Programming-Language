<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php

            if(isset($_GET['price'])){
                $price = (int) $_GET['price'];
                if($price === 0){
                    
                }
                var_dump($price);
                var_dump($price * 1.19);
            }

            var_dump($_GET);

            if(isset($_GET['name'])){
                $name = @(string) $_GET['name'];
                var_dump($name . '!!!');
            }
        ?>
        <a href="types.php?<?php echo http_build_query(['name' => ['jannis','olivia']]); ?>">Link</a>
    </pre>
</body>
</html>