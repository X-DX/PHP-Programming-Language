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
            $categories = [
                'Programming',
                'Business',
                'Art and Drawaing',
                'Self Improvement',
                'History',
            ];

            // search array
            // var_dump(array_search('Business', $categories)); // return the index

            // slice
            // var_dump(array_slice($categories, 1, 2)); // return the key and value of 0 to 2 index

            // min and max (its return the element)
            $number = [1,4,2,6,8];
            // var_dump(min($number));
            // var_dump(max($number));
            // var_dump(array_sum($number));

            // merge 
            $topic1 = ['C', 'C++'];
            $topic2 = ['Java', 'PHP'];
            // var_dump(array_merge($topic1, $topic2));

            // we can we ... operator insted of merge
            // var_dump([...$topic1, ...$topic2, 'JavaScript']);

            // round
            $num = [10.66, 1];
            var_dump(round(...$num));

        ?>
    </pre>
</body>
</html>