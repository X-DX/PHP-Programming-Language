<?php
// To enforce reliable function outputs in PHP, 
// use return type declarations in the function signature and enable strict typing at the file level. 
// This ensures that the function strictly returns a value of the declared type, throwing a TypeError otherwise. 

header('Content-Type: text/plain');

function add_five(int $number): int // we can use union type also
{
    return $number + 5;
    //return "Hello"; // returning string, it will show error because we use int return type declarations in the function, but we put "123" it convert to int
}

$var = add_five(5);
var_dump($var + 5);
