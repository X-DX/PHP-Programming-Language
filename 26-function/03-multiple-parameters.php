<?php

header('Content-Type: text/plain');
// a default parameter; if no second argument is passed, the loop will run 2 times
function f($str, $count = 2)
{
    for ($x = 0; $x < $count; $x++) {
        echo "{$str}\n";
    }
}

f('Hello from PHP!', 3);

echo "------\n";
f('Hello from Mars!', 5);

echo "------\n";
f('Hello from PHP again');

f('hi');
