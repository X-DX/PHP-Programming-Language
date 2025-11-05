<?php
function e($value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

$pdo = new PDO('mysql:host=127.0.0.1;port=3307;port=3307;dbname=note_app', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);


//
// 🔹 1️⃣ UPDATE example
//

// Prepare an UPDATE statement with named placeholders
// This will update both title and content for a specific note (id = :id)

$stmt = $pdo->prepare('UPDATE `notes` SET `title` = :title, `content` = :content WHERE `id` = :id');

// Bind actual PHP values to the placeholders
// These are safely escaped by PDO and prevent SQL injection

$stmt->bindValue('id', 9);
$stmt->bindValue('content', 'Hello (from PHP)');
$stmt->bindValue('title', 'Hello (from PHP)');

// Execute the UPDATE query
$stmt->execute();


//
// 🔹 2️⃣ DELETE example by ID
//

$id = 10; // The ID of the note you want to delete
// Prepare a DELETE statement with a placeholder for id
$stmt2 = $pdo->prepare('DELETE FROM `notes` WHERE `id` = :id');
// Bind the id variable safely to the placeholder
$stmt2->bindValue('id', $id);
// Execute the DELETE query
$stmt2->execute();


//
// 🔹 3️⃣ DELETE example by title
//
$title = 'A title...';
$stmt3 = $pdo->prepare('DELETE FROM `notes` WHERE `title` = :title');
$stmt3->bindValue('title', $title);
$stmt3->execute();
