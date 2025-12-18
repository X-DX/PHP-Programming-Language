<?php
// A helper function named 'e' to safely output HTML.
// htmlspecialchars() converts special chars (<, >, ", ') into HTML entities
// ENT_QUOTES means convert both single & double quotes
// 'UTF-8' defines encoding
function e($value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}


echo '<pre>'; // <pre> tag keeps formatting (line breaks, spacing) when printing arrays/objects

// Get the user's IP address from the server superglobal
$ip = $_SERVER['REMOTE_ADDR'];
var_dump($ip);

// Dumps the full $_SERVER array, which contains request info:
// headers, paths, script name, browser info, method, etc.
var_dump($_SERVER);

echo '</pre>';

?>

<!-- HTML FORM -->
<!-- method="POST" sends form data as POST request -->
<!-- action attribute decides where the form will submit -->
<!-- e($_SERVER['PHP_SELF']) ensures the form posts to the same page -->
<!-- htmlspecialchars() prevents XSS if PHP_SELF contains malicious characters -->
<form method="POST" action="<?php echo e($_SERVER['PHP_SELF']); ?>">
    <input type="text" name="username" />
    <input type="submit" value="Submit!" />
</form>