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
    <main>
        <pre>
            <?php 
                // var_dump(pathinfo('index.php')['extension']);
                // var_dump(PATHINFO_EXTENSION);

                // The pathinfo() function in PHP is used to retrieve information about a file path, such as its directory name, basename, extension, and filename.
                // PATHINFO_DIRNAME – Returns only the directory name.
                // PATHINFO_BASENAME – Returns only the file name with the extension.
                // PATHINFO_EXTENSION – Returns only the file extension.
                // PATHINFO_FILENAME – Returns only the file name (without extension).

                var_dump(pathinfo('index.php', PATHINFO_EXTENSION));

                $handle = opendir(__DIR__ . '/images');

                $images = [];
                $allowedExtensions = [
                    'jpg',
                    'jpeg',
                    'png'
                ];

                while (($currentFile = readdir($handle)) !== false) {
                    if ($currentFile === '.' || $currentFile === '..') {
                        continue;
                    }
                    $extension = pathinfo($currentFile, PATHINFO_EXTENSION);
                    /*
                    if ($extension !== 'jpg' && $extension !== 'jpeg' && $extension !== 'png') {
                        continue;   
                    }
                    */
                    if (!in_array($extension, $allowedExtensions)) {
                        continue;
                    }
                    var_dump($currentFile);
                    var_dump($extension);
                    $images[] = $currentFile;
                }

                closedir($handle);
            ?>
        </pre>

        <?php foreach($images AS $image): ?>
            <img src="images/<?php echo rawurlencode($image); ?>" alt="" />
        <?php endforeach; ?>

    </main>
</body>
</html>