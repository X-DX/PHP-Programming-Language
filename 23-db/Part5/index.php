<?php

$pdo = new PDO('mysql:host=127.0.0.1;dbname=note_app', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$stmt = $pdo->prepare('SELECT * FROM `notes`');
// A prepared statement is a feature used to execute the same (or similar) SQL statements repeatedly with high efficiency.
//Prepared statements basically work like this:
// 1. Prepare: An SQL statement template is created and sent to the database. Certain values are left unspecified, called parameters (labeled "?"). Example: INSERT INTO MyGuests VALUES(?, ?, ?)
// 2. The database parses, compiles, and performs query optimization on the SQL statement template, and stores the result without executing it
// 3. Execute: At a later time, the application binds the values to the parameters, and the database executes the statement. The application may execute the statement as many times as it wants with different values

// var_dump($stmt);

$stmt->execute();
$results = $stmt->fetchAll();
var_dump($results);