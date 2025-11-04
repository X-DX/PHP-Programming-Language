<?php
function e($value) // a helper function e() — commonly used to escape HTML special characters.
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

$pdo = new PDO('mysql:host=127.0.0.1;port=3307;dbname=note_app', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$stmt = $pdo->prepare('SELECT * FROM `notes` WHERE `id` = 6'); // prepare() helps prevent SQL injection
$stmt->execute(); // execute() runs the prepared query

// When you execute a SQL query using PDO, it returns a result set — that is, all the rows that match your query.

// However, PDO doesn’t give you everything at once (unless you ask for it).
// Instead, you use fetch() to retrieve one row at a time from that result set.

$note = $stmt->fetch(PDO::FETCH_ASSOC); // PDO::FETCH_ASSOC tells PDO to return the result as an associative array
var_dump($note);

/*
$stmt = $pdo->prepare('SELECT * FROM `notes` WHERE `id` = 5 OR `id` = 6 ORDER BY `id` ASC');
$stmt->execute();
while (($result = $stmt->fetch(PDO::FETCH_ASSOC)) !== false) {
    var_dump($result);
}
*/
/*
var_dump($stmt->fetch(PDO::FETCH_ASSOC));
var_dump($stmt->fetch(PDO::FETCH_ASSOC));
var_dump($stmt->fetch(PDO::FETCH_ASSOC));
*/