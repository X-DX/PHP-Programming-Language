<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/simple.css" />
    <title>Document</title>
</head>
<body>
    <header><h1>Automatic Image List</h1></header>
    <main><pre><?php 
        $handle = opendir(__DIR__ . '/images');
        /*
        $currentFile = readdir($handle);
        while ($currentFile !== false) {
            var_dump($currentFile);
            $currentFile = readdir($handle);
        }
        */
        $images = [];
        while (($currentFile = readdir($handle)) !== false) {
            if ($currentFile === '.' || $currentFile === '..') {
                continue;
            }
            var_dump($currentFile);
            $images[] = $currentFile;
        }

        // var_dump($str2 = $str = 'hello');

        closedir($handle);
    ?></pre>

        <?php foreach($images AS $image): ?>
            <img src="images/<?php echo rawurlencode($image); ?>" alt="" />
        <?php endforeach; ?>

        // The function rawurlencode($image) is used to safely encode the file name (in this case, the image file name) for use in a URL.
        // rawurlencode() is a PHP function that encodes a string according to RFC 3986, which is the standard for URL formatting.
        // It ensures that special characters in the file name (like spaces, #, ?, &, etc.) are converted into their encoded equivalents, so that they don’t break the URL.

    </main>
</body>
</html>