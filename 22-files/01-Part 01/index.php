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
                // The opendir() function in PHP is used to open a directory handle, which allows you to read the contents of a directory. It returns a directory handle that can be used with other directory-related functions like readdir() and closedir().

                // opendir($dir) opens the directory.
                // readdir($handle) reads files inside the directory one by one.
                // closedir($handle) closes the directory handle when done.
                
                $handle = opendir(__DIR__ . '/images');
                var_dump($handle);
                var_dump(readdir($handle));
                var_dump(readdir($handle));
                var_dump(readdir($handle));
                var_dump(readdir($handle));
                var_dump(readdir($handle));
                var_dump(readdir($handle));
                var_dump(readdir($handle));
                closedir($handle);
            ?>
        </pre>
    </main>
</body>
</html>