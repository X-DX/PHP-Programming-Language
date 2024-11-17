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
            $greeting =  "I'm learning PHP";
            echo "{$greeting}";

            echo "\t";
            
            $name = "Arup";
            $subject = "PHP";
            echo "I'm {$name} and i'm learning {$subject}"

        ?>
        <p>A first line of text <?php echo '<br />;' ?> A second of text</p>
        <p>A first line of text <?php echo "\n"; ?> A second of text</p>
    </pre>
    
</body>
</html>