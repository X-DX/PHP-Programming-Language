<?php

header('Content-Type: text/plain');

function f() {}

var_dump(function_exists('f'));
// In PHP, function_exists() is a built-in function used to check whether a function has already been defined.
// Returns true → if the function exists
// Returns false → if the function does NOT exist

require __DIR__ . '/07/functions.inc.php';
