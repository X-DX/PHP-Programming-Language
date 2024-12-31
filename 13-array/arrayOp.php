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
            // var_dump($categories);

            //example code for giveway
            $names = [
                'Arup', 'Sanjay', 'Mark', 'Sam', 'Rahul',
            ];

            $num = count($names);
            $choice = rand(0,$num-1);
            var_dump($names[$choice]);

            // var_dump($names[rand(0, count($names) - 1)]); // in one line of code
        ?>
    </pre>
</body>
</html>