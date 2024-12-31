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
            $names = [
                'Arup',
                'Sam',
                'Raj',
                'Rahul',
                'Sam',
                'Rohit',
                'Arup',
            ];

            // remove duplicate element 
            $newArr = array_unique($names); // Its create a new array

            // sort
            sort($names); // its change the original array
            var_dump($names);
        ?>
    </pre>
</body>
</html>