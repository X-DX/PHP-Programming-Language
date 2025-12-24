<?php
// Enforce accurate type handling in a PHP file by adding declare(strict_types=1); 
// as the very first line of the script. This directive disables PHP's default automatic type conversion (type juggling) 
// for scalar type declarations and instead throws a TypeError if types do not match exactly. 

// The declare() construct in PHP is used to set execution directives for a block of code or an entire file. 
// It is a language construct, not a function, and is typically placed at the very top of a PHP script. 
// declare(strict_types=1);

header('Content-Type: text/plain');

function add_five(int $number): int
{
    return $number + 5;
}

$id = (int) ($_GET['id'] ?? 0);

var_dump(add_five($id));

function print_5x(string $message): void
{
    echo "{$message}\n";
    echo "{$message}\n";
    echo "{$message}\n";
    echo "{$message}\n";
    echo "{$message}\n";
}

print_5x((string) $id);
print_5x("{$id}");

print_5x((string) 123);
