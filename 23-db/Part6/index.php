<?php
function e($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

$pdo = new PDO('mysql:host=127.0.0.1;dbname=note_app', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$stmt = $pdo->prepare('SELECT * FROM `notes`');
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($results);

// PDOStatement::fetch — Fetches the next row from a result set
// PDO::FETCH_ASSOC: returns an array indexed by column name as returned in your result set

?>
<ul>
    <?php foreach($results AS $result): ?>
        <li><?php echo e($result['title']); ?></li>
    <?php endforeach; ?>
</ul>