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
                // include __DIR__.'/inc/function.inc.php';
                // what id typo error by user
                // require __DIR__.'/inc/function.php';

                // not allowed e() declear multiple time
                // require __DIR__.'/inc/function.php';
                // require __DIR__.'/inc/function.php';

                // load only one time
                require_once __DIR__ .'/inc/all.inc.php';
                require_once __DIR__ .'/inc/function.inc.php';
                require_once __DIR__ .'/inc/function.inc.php';
                require_once __DIR__ .'/inc/function.inc.php';



                $text = 'PHP is amazing';
            ?>
        </pre>
        <h1><?php echo e($text) ?></h1>
    </body>
</html>