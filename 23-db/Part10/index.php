<?php
// Simple helper to escape output for safe HTML rendering (prevents XSS)
function e($value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

// Create a PDO connection to MySQL
// - host: 127.0.0.1 (localhost)
// - port: 3307 (non-default MySQL port in your setup)
// - dbname: note_app
// - username: root, password: '' (empty string)
$pdo = new PDO('mysql:host=127.0.0.1;port=3307;dbname=note_app', 'root', '', [
    // Throw exceptions on DB errors (helps debugging and prevents silent failures)
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

// Data to insert (could come from $_POST in a real app)
$title = 'A title (from PHP)';
$content = 'The content \'"(from PHP)';

// Prepare an INSERT statement with named placeholders.
// Using prepare() + placeholders prevents SQL injection because the SQL structure
// is sent to the DB separately from the data.
$stmt = $pdo->prepare("INSERT INTO `notes` (`title`, `content`) VALUES (:title, :content)");

// Bind the PHP variables to the named placeholders.
// bindValue() binds the current value (by value) immediately.
// You can optionally provide the parameter type, e.g. PDO::PARAM_STR for strings.
$stmt->bindValue('title', $title); // binds :title => 'A title (from PHP)'
$stmt->bindValue('content', $content); // binds :content => 'The content \'"(from PHP)'

// Execute the prepared statement. This sends the bound data to the DB and runs the query.
$stmt->execute();

$note = $stmt->fetch(PDO::FETCH_ASSOC);
var_dump($note);
