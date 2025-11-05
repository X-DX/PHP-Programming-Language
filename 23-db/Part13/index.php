<?php

function e($value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

// Character encoding defines how characters are stored in the database — i.e., how letters, symbols, and emojis are represented as bytes.



try {
    // The charset=utf8mb4 part is critical for proper text encoding and emoji support.
    $pdo = new PDO('mysql:host=127.0.0.1;port=3307;dbname=note_app;charset=utf8mb4', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    // var_dump($e->getMessage());
    echo 'A problem occured with the database connection...';
    die();
}

$stmt = $pdo->prepare('INSERT INTO `notes` (`title`, `content`) VALUES (:title, :content)');
$stmt->bindValue('title', '🧑🏾');
$stmt->bindValue('content', '🧑🏾');
$stmt->execute();
