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
    - String Function: strlen, strtolower, trim, strpos, nl2br, str_replace

## 14. Nested Arrays (Simplify Complex Data Handling)

    - Define a Nested Array and Access Multi level data
    - Extract Data from Nested Arrays by `foreach` Loops
    - Navigate Multi-Level Data with Nested `foreach` Loops
    - Deal with irregular Data in nested Array

## 15. Project : build an Air Quality Data Browser

    - Decode JSON & Handle .bzip2 Compression
    - Transforming JSON Data into Web Content: Create Dynamic City Links
    - Crafting City Statistics Pages: Retrieve Data & Handle Errors
    - Analyzing PM2.5 Data: Calculate Air Quality Index
    - Manage Data Integrity & Integrate Additional Measurement Parameters (PM10)
    - Polishing the Output: Add Numeric Formatting and Measurement Units
    - Integrating Chart.js with PHP
    - Show your data in the chart JS
    - Ensuring Data integrity: Deal with Missing Data

## 16. PHP Loop

    - The 'for' loop: Repeat Action and Manage Iterations
    - The `while` loop: Execute Code with Conditional Repeats and Avoid Infinite Loops

## 17. File

    - Utilize `opendir`, `readdir`, and `closedir` for Directory Management
    - Using `readdir` in a while Loop: Read File Directories Efficiently
    - The `pathinfo` function: Extract File Path Components for Filtering File Types
    - File Functions: `file_exists`, `is_file`, `is_dir`, `filemtime`, `filesize`,...

## 18. Database

    - Basic of DBMS
    - myphpadmin overview
    - DB connections with PDO
    - Data Retrieval with PDO: Fetch Data from a Database
    - Rendering Fetched Data as HTML: Enhance Readability and Security
    - SQL Query Basics: Utilize the ORDER BY Clause and SELECT Specific Columns
    - Filter Data with the WHERE Clause and Fetch Individual Entries with PDO
    - Secure Parameter Handling in PDO: Prevent SQL Injection with Bind Methods
    - Insert Data Securely with INSERT INTO, Placeholders, and the `bindValue` Method
    - Database Manipulation: Using UPDATE and DELETE FROM Securely
    - Prevent Leakage of Database Connection Information in older (<=8.1) PHP Versions
    - Choosing the Charset: Ensure Compatibility with with utf8mb4 encoding

## 19. Project: PHP Diary

    - Design (front-end)
    - Create DB
    - Fetch Data from the DataBase
    - The form Page
    - Submit Data into the DataBase
    - Add Pagination
    - Format the Dates
    - Upload Files
    - Resize an Image and Upload

## 20. Header in PHP: Control Server Communication

    - $_SERVER array
    - HTTP Headers: Examine Browser to Server Communication
    - HTTP Headers: Examine Server to Browser Communication
    - Content-Type Header Example: Dynamically Serve CSS with PHP
    - Output Buffering: Avoid Header Issues and Ensure Seamless File Transmissions
    - Content-Disposition and Content-Length Header: Implement File Downloads
    - Location Header: Redirect Users to Files
    - Example: Build a Newsletter Sign-Up Page using Location Headers
    - Decipher HTTP Status Codes: Success and Errors
    - Project: Craft a Custom 404 Error Page and custom url not found by htaccess

## 21. Functions - Customize Operations For Reuseable Code

    - Declare and Invocate Custom Functions
    - Function Contexts and Parameter Passing: Transfer Data into Functions
    - Multiple Parameters & Default Values: Configure Functions
    - The `return` Statement: Extract Function Output
    - Multiple `return` Statements: Control Function Output
    - The `null` Type: Represent Missing Values
    - Function Redefinition: Best Practices (function_exists())
    - Handling File Sizes with a Divide & Conquer Strategy
