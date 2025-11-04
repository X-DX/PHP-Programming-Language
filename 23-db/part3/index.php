<?php
// host = localhost
// PDO (PHP Data Objects) is a database access abstraction layer in PHP that provides a consistent and 
//secure way to interact with different types of databases (like MySQL, PostgreSQL, SQLite, Oracle, etc.).

// PDO is a built-in PHP extension that allows developers to connect to and interact with databases using 
// the same set of functions, regardless of the database type.

// Main Purpose
// PDO provides a uniform interface for database operations — meaning you can switch from MySQL to another 
// database (like PostgreSQL or SQLite) without changing much code.

// Key Features of PDO
// Database Abstraction -> Same code works with multiple databases.
// Prepared Statements -> Protects against SQL Injection.
// Error Handling -> Supports exceptions for better debugging.
// Transaction Support -> Allows use of beginTransaction(), commit(), rollback().
// Fetching Modes -> Can fetch data as associative array, object, or numeric array.

// 🔹 Key Features of PDO
// Database Abstraction => Same code works with multiple databases.
// Prepared Statements => Protects against SQL Injection.
// Error Handling => Supports exceptions for better debugging.
// Transaction Support => Allows use of beginTransaction(), commit(), rollback().
// Fetching Modes => Can fetch data as associative array, object, or numeric array.

$pdo = new PDO('mysql:host=127.0.0.1;port=3307;dbname=note_app', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    // 3 => 2
]);
// var_dump(PDO::ATTR_ERRMODE); // 3
// var_dump(PDO::ERRMODE_EXCEPTION); // 2

var_dump($pdo);
