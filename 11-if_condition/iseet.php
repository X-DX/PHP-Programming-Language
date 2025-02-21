<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset</title>
</head>
<body>
    <pre>
        <?php
            $pageTitle = "PHP is amazing!";
            var_dump(isset($pageTitle)); // iseet check value exists or not
            var_dump(empty($pageTitle)); // wheather the variable is empty
            // unset($pageTitle); // its completly remove the varibale

            if(isset($pageTitle) && $pageTitle != ''){
                echo "<h1> {$pageTitle} </h1>";
            }

            if(!empty($pageTitle)){
                echo "<h1> {$pageTitle} </h1>";
            }
        ?>
    </pre>

    <!-- Alternative syntax in php : enhance clearity in html integration -->
    <!-- here addition white space added -->
    <pre>
        <?php if(!empty($pageTitle)) : ?>
            <h1>
                <span>
                    <?php echo $pageTitle ?>
                </span>
            </h1>
        <?php endif; ?>
    </pre>
</body>
</html>