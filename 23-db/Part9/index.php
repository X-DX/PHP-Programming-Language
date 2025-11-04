<?php
// SQL Injection is a security vulnerability where an attacker can manipulate your SQL query by 
// inserting malicious input through form fields, URLs, or other user inputs.

// When you use PDO prepared statements with parameter binding, the SQL query and the user input are handled 
// separately, so the input can’t modify the structure of your SQL query.

///////////////////
// $id = $_GET['id'];

// $stmt = $pdo->prepare('SELECT * FROM notes WHERE id = :id');
// $stmt->bindParam(':id', $id, PDO::PARAM_INT);
// $stmt->execute();

// $note = $stmt->fetch(PDO::FETCH_ASSOC);

///////////////////

// Here’s what happens internally:
// The SQL query is sent first to the database for compilation:
// SELECT * FROM notes WHERE id = ?
// The database locks in this structure.
// Then, the user input ($id) is sent separately and treated only as data, not as SQL code.
// So even if $id = "6 OR 1=1",
// it will be treated as a string, not executable SQL.

// ⚙️ Two Ways to Bind in PDO

// 1️⃣ Named Placeholders
// $stmt = $pdo->prepare('SELECT * FROM notes WHERE title = :title');
// $stmt->bindValue(':title', $title, PDO::PARAM_STR); // When value is fixed, Binds immediately, uses the value at the time of binding
// $stmt->execute();

// 2️⃣ Positional Placeholders
// $stmt = $pdo->prepare('SELECT * FROM notes WHERE id = ? AND title = ?');
// $stmt->bindParam(1, $id, PDO::PARAM_INT); // When variable may change before execution, Binds by reference, so it uses the variable’s value at execution time
// $stmt->bindParam(2, $title, PDO::PARAM_STR);
// $stmt->execute();


function e($value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

$pdo = new PDO('mysql:host=127.0.0.1;port=3307;dbname=note_app', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);
/*
$id = (int) $_GET['id']; // we can do type-casting, to aviod injection, but dont use it
$query = "SELECT * FROM `notes` WHERE `id` = {$id}";
$stmt = $pdo->prepare($query);
$stmt->execute();
$note = $stmt->fetch(PDO::FETCH_ASSOC);
var_dump($note);
*/

$stmt = $pdo->prepare('SELECT * FROM `notes` WHERE `id` = :id'); // :id -> called placeholder
$stmt->bindValue('id', (int) $_GET['id']);
$stmt->execute();
$note = $stmt->fetch(PDO::FETCH_ASSOC);
var_dump($note);
