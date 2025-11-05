<?php
// phpinfo();


function e($value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

// Add try { ... } catch (PDOException $e) to gracefully handle DB errors.

try {
    // Attempt to create a new PDO connection to the MySQL database
    // If this fails (e.g., wrong credentials, server down, wrong port), 
    // it will throw a PDOException that we can catch below.

    $pdo = new PDO('mysql:host=127.0.0.1;port=3307;dbname=note_app', 'root', '', [
        // Configure PDO to throw exceptions when an error occurs
        // instead of returning false — makes debugging safer and easier
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    // This block only runs if the connection fails (i.e., an exception is thrown)

    // You can use var_dump($e->getMessage()) during development to see the exact error:
    // e.g. "SQLSTATE[HY000] [1049] Unknown database 'note_app'"
    // var_dump($e->getMessage());

    // In production, never show raw database errors (they can expose sensitive info)
    // Instead, show a friendly message:

    // var_dump($e->getMessage());
    echo 'A problem occured with the database connection...'; // best way echo 
    die();
}

/*
$stmt = $pdo->prepare('UPDATE `notes` SET `title` = :title, `content` = :content WHERE `id` = :id');
$stmt->bindValue('id', 14);
$stmt->bindValue('content', 'CONTENT (from PHP)');
$stmt->bindValue('title', 'TITLE (from PHP)');
$stmt->execute();

$id = 11;
$stmt2 = $pdo->prepare('DELETE FROM `notes` WHERE `id` = :id');
$stmt2->bindValue('id', $id);
$stmt2->execute();

$title = 'A title...';
$stmt3 = $pdo->prepare('DELETE FROM `notes` WHERE `title` = :title');
$stmt3->bindValue('title', $title);
$stmt3->execute();
*/