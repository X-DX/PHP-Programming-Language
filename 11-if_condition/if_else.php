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
            $serverStatus = 'error';

            if($serverStatus === 'ok'){
                echo '🟢 Welcome to our website Browse and enjoy our content';
            }else if($serverStatus === 'error'){
                echo '❌ We got a serious error right now. please just call us at +91 1234567890';
            }else{
                echo '🔴 We\'re currently undergoing maintaince. Please check back later';
            }
        ?>
    </pre>
</body>
</html>