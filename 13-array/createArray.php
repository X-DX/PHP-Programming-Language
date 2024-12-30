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
            // 1st way 
            $categories1 = array('Programming', 'Business', 'Arts', 'History');
            var_dump($categories1);

            $firstIndex = $categories1[0];
            var_dump($firstIndex);
            var_dump($categories1[3]);

            // 2nd way
            $categories2 = ['Apple', 'Pen', 'Book', 'Table'];

            // var_dump($categories2[99]); // output: null  // dont use it
            var_dump(isset($categories2[99]));
            var_dump(empty($categories2[99]));


            var_dump(in_array('Apple',$categories2)); // true
            var_dump(count($categories2));
        ?>
    </pre>
</body>
</html>