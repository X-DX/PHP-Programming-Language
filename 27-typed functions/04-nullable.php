<?php
// In PHP, you use a leading question mark (?) before the type declaration in a function signature to make a parameter nullable. 
// This allows the parameter to accept a value of the specified type or null. 

header('Content-Type: text/plain');

function f(int|float|null $number): ?string
{
    // return 'hello';
    return null;
}

function print_5x(?string $message)
{
    if (!empty($message)) {
        echo "{$message}\n";
        echo "{$message}\n";
        echo "{$message}\n";
        echo "{$message}\n";
        echo "{$message}\n";
    }
}

$news = [
    'title' => 'Typings are amazing!'
];
print_5x($news['title']);

$news2 = [
    'title' => null
];
print_5x($news2['title']);
