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
            var_dump(!true);
            var_dump(!false);

            $number = 5;
            var_dump($number !== 5);
            var_dump(!($number === 5));

            var_dump(true && true);
            var_dump(false && true);
            var_dump(true && false);
            var_dump(false && false);


            $views = 1000;
            if($views >= 400 && $views <= 5000){
                echo "This is a medium performing value";
            }

            var_dump(true || true);
            var_dump(false || true);
            var_dump(true || false);
            var_dump(false || false);

            print("--------- xor \n");
            var_dump(true xor true);
            var_dump(false xor true);
            var_dump(true xor false);
            var_dump(false xor false);


        ?>
    </pre>
</body>
</html>