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
            // Motivation & Define an Associative Array
            var_dump($books);
            var_dump(isset($books['J.K Rowling']));
            var_dump(!empty($books['J.K Rowling']));
            var_dump($books['J.K Rowling']);

            $key = 'J.K Rowling';
            var_dump($books[$key]);


            //  Manipulate and Output Keys and Values form Associative Arrays

            // add new element
            $books['William Shakespeare'] = 'Remeo and Julia';
            // delete
            unset($books['Antoine de Saint-Exupery']);
            var_dump(count($books));
            var_dump($books);

            // foreach for show values
            foreach ($books as $book) {
                var_dump($book);
            }

            // foreach for key and value
            foreach($books as $key => $value){
                var_dump($key);
                var_dump($value);
            }

            // create new array using keys only
            var_dump(array_keys($books));
            // or using foreach
            foreach(array_keys($books) as $key){
                var_dump($key);
            }

        ?>
    </pre>
</body>
</html>