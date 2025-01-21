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
            // file_get_content: This function reads the entire contents of a file into a string.
            // $text = file_get_contents(__DIR__ .'/inc/function.inc.php');

            // Reads the entire contents of a file and outputs them directly to the output buffer (usually sent to the browser).
            readfile(__DIR__ .'/inc/function.inc.php');
            echo $text;
        ?>
    </pre>
</body>
</html>