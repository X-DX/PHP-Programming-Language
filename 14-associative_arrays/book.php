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
            $books = [
                'J.K Rowling' => 'Harry Potter',
                'J.R.R Tolkien' => 'Lord of the Rings',
                'Antoine de Saint-Exupery' => 'The Little prince',
            ];
            var_dump($books);
            var_dump(isset($books['J.K Rowling']));
            var_dump(!empty($books['J.K Rowling']));
            var_dump($books['J.K Rowling']);

            $key = 'J.K Rowling';
            var_dump($books[$key]);

        ?>
    </pre>
</body>
</html>