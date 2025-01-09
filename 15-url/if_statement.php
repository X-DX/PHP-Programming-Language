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
            // shorthand if statement
            $name = "PHP";

            // 1 way
            // if($name === 'PHP') echo 'This is php Code';
            // else echo 'This is not a php code';

            echo ($name === 'PHP') ? 'This is php Code' : 'This is not a php code';

            $arr = [
                'ABC',
                ($name === 'PHP') ? 'This is php Code' : 'This is not a php code'
            ];

            print_r($arr);
        ?>
    </pre>
</body>
</html>