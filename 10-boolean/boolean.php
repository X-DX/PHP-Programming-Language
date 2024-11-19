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

            echo "\n";

            var_dump(true);
            var_dump(false);

            $value = true;
            var_dump($value);

            echo "-----\n";

            $meaning = 42;
            var_dump($meaning > 13);
            var_dump($meaning <= 13);

            echo "-----\n";

            $name = 'Arup';
            var_dump($name === 'Arup');
            var_dump($name !== 'Arup');

            echo "-----\n";

            $age = 30;
            var_dump($age === 30);
            var_dump($age === '30'); // type check

            var_dump($age == '30'); // type not check
            var_dump($age != '30');

        ?>
    </pre>
</body>
</html>