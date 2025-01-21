<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <!-- <a href="querystring.php?book=Harry Potter">Harry Potter</a>
        <a href="querystring.php?book=Beauty & the Beast">Beauty & the Beast</a> -->

        <!-- http_build_query(): used to generate URL-encoded query string from the associative (or indexed) array. -->
        
        <a href="querystring.php ? <?php echo http_build_query(['book' => 'Harry Potter']); ?>">Harry Potter</a>
        <a href="querystring.php ? <?php echo http_build_query(['book' => 'Beauty & the Beast', 'firstname' => 'Arup']); ?>">Beauty & the Beast</a>

    </pre>
</body>
</html>