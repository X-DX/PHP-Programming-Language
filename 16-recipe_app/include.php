<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function e($value){
            return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
        }
    ?>
    <form action="include.php" method="GET">
        <select name="page" id="">
            <option value="">Select....</option>
            <option value="citrus_salmon" <?php if(!empty($_GET['page']) && $_GET['page'] == 'citrus_salmon') echo 'selected'; ?>>Citrus Symphony Salmon</option>
            <option value="mediterranian_pasta"<?php if(!empty($_GET['page']) && $_GET['page'] == 'mediterranian_pasta') echo 'selected'; ?>>Mediterranian Pasta</option>
            <!-- <option value="sunset_risotto" </?php if(!empty($_GET['page']) && $_GET['page'] == 'sunset_risotto') echo 'selected'; ?>>Sunset Risotto</option>
            <option value="tropical_tacos" </?php if(!empty($_GET['page']) && $_GET['page'] == 'tropical_tacos') echo 'selected'; ?>>Tropical Tacos</option> -->
        </select>
        <input type="submit" value="Submit">
    </form>

    <?php
        if(!empty($_GET['page'])){
            echo file_get_contents("pages/{$_GET['page']}.html");
        }
    ?>
</body>
</html>