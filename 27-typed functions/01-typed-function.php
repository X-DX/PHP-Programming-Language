<?php
// Understand the Problem 

header('Content-Type: text/plain');
function add_five(int $number) // Best Pratice 
{
    // $number = (int) $number; // Type Cast This, you can use this like that
    var_dump($number);
    return $number + 5;
}

$id = $_GET['id'] ?? 0;
// http://localhost:8000/27-typed%20functions/01-typed-function.php?id=10.  // in this it is OK, in this case this work but "10" is string
// But Problem is occure when we pass string or array: http://localhost:8000/27-typed%20functions/01-typed-function.php?id=hello
var_dump(add_five($id));
