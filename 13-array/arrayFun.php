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
            // var_dump($names);

            // foreach loop : go each element 
            foreach($names as $item){
                var_dump($item);
                if($item === 'Rahul'){
                    echo "It is array";
                }
            }
        ?>
    </pre>

    <pre>
        <ul>
            <?php foreach($names as $name): ?>
                <li>
                    <?=$name?>
                </li>
            <?php endforeach; ?>
        </ul>
    </pre>
</body>
</html>