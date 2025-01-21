# PHP-Programming-Language

## 1. Installation on MAC
    - install php using brew 
    - install aphche server
    - install sql

## 2. Basics
    - How to echo
    - Basic programming, change dynamic bg colour
    - use 'include' command, combine multiple php file.
    - comment using //
    - Varibales

 ## 3. Restaurant Website
    - Connect multi pages using include
    - dynamically show title, hero section heading, Images, etc
    - Error in php

 ## 4. Data Types and Conditions
    - Data Types (Number, String, Booleans)
    - Basic functions (var_damp(), empty(), etc)
    - Conditions (if else)
    - string:
        - string (single quotes, dot(.))
        - double quotes
    - Numbers

## 5. var_dump()
    - debug code
    - what inside varibale, also tell type of

## 6. Boolean & Comparison Operators
    - true and false
    - check boolean value using comparision operator

## 7. If statement
    - how to use if condition
    - else if and else clause
    - The `isset`, `empty` and `unset` functions: Validate and Delete Variables
    - Alternative syntax in php : enhance clearity in html integration

## 8. Boolean Operators
    - !, &&, ||, xor

## 9. Array and for loop
    - create and access the array
    - Test the existence of specfic key and value
    - change,delete and append in array
    - Array function: Find duplicate elements and sort arrays
    - The 'Foreach' loop: iterate over element in an array
    - control loop with break and continue
    - Additional Array Function
    
## 10. Associative Arrays
    -  Motivation & Define an Associative Array
    -  Manipulate and Output Keys and Values form Associative Arrays

## 11. URL Parameters
    - The short `if` Statement
    - The `$_GET` Array: Retrieve User Input from the URL
    - Dynamic URL Creation: Craft Links with Parameters and `http_build_query`
    - Submit a form through GET
    - Submit a form through POST
    - Securing Websites: Prevent Cross-Site Scripting (XSS) with `htmlspecialchars`

## 12. Build a multi page Image Gallery
    - urlencode() : 
        Encoding: This function encodes all special characters except for the following: - (hyphen), . (period), _ (underscore), ~ (tilde)
        Use Cases: Generally used for encoding data within query strings of URLs.

    - rawurlencode() : 
        Encoding: This function encodes all special characters except for the following: - (hyphen), . (period), . (period), _ (underscore), ~ (tilde), / (forward slash)
        Use Cases: Often used for encoding URLs themselves (e.g., in path components).

    - Eg:
        $string = "Hello, world! This is a test string with spaces.";
        echo "urlencode(): " . urlencode($string) . "<br>";
        echo "rawurlencode(): " . rawurlencode($string) . "<br>";

        urlencode(): Hello%2C+world%21+This+is+a+test+string+with+spaces.
        rawurlencode(): Hello%2C%20world%21%20This%20is%20a%20test%20string%20with%20spaces.

    - CSS Attributes for Image Control: `object-fit` and `aspect-ratio` (Hint)

## 13. Advanced Concepts
    - Identify Types with `is_` Functions & Manage Mixed-Type Arrays
    - Type Casting: Solve Type Mismatches and Debug Code Errors Efficiently
    - The @ Symbol: Silence PHP Warnings
    - The Null Coalescing Operator: Simplify Default Value Assignments
    - Optimizing `include`: Use __DIR__ for Reliable File Path Resolution
    - File Inclusion: `include`, `require`, and their *_once` Variants
    - The functions 'file_get_contents' and 'readfile'
    - The `implode` and `explode` functions: Split Strings and Merge Arrays
    - String Function: strlen, strtolower, trim, strpos