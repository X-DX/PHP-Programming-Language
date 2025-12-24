<?php
// PHP 8.0 introduced union types, allowing a variable, parameter, 
// or return type to accept values of multiple different types, 
// providing more robust code and flexibility. Types are separated by a vertical bar (|). 

header('Content-Type: text/plain');

function add_five(float|int $number)
{
    return $number + 5;
}

var_dump(add_five(3.141));
var_dump(add_five(5));

function f(array|bool|string $a)
{
    var_dump($a);
}

f([]);
f(true);
f(123);
