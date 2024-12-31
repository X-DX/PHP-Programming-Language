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
            // over write
            $categories = ['Programming', 'Books', 'Desktop', 'Pendrive'];
            $categories[2] = 'Backend';
            
            // delete
            // unset($categories[3]);

            // add element
            $categories[] = 'Nature books'; 
            var_dump($categories);
        ?>
    </pre>
</body>
</html>