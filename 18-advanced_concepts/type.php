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
            $number = 100;
            $str = "PHP";

            var_dump($number);
            var_dump($str);

            var_dump(is_bool($number));
            var_dump(is_numeric($number));
            var_dump(is_string($str));
            var_dump(is_array($str));

            $entries = [
                ['title' => 'The most famous band'],
                'A Classical Concert'
            ];

            foreach($entries as $item){
                if(is_array($item)){
                    var_dump($item['title']);
                }else{
                    var_dump($item);
                }
            }

        ?>
    </pre>
</body>
</html>