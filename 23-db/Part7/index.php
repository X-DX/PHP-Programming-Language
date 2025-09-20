<?php
function e($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
// The htmlspecialchars() function converts some predefined characters to HTML entities.
// ENT_QUOTES = Converts double and single quotes
// ENT_COMPAT = Will only convert double quotes
// ENT_NOQUOTES = Does not convert any quotes   

$pdo = new PDO('mysql:host=127.0.0.1;dbname=note_app', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$stmt = $pdo->prepare('SELECT `id`, `title` FROM `notes` ORDER BY `title` ASC'); // we use backtik here `` because sql will known which is coloum name
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);   
var_dump($results);

?>
<ul>
    <?php foreach($results AS $result): ?>
        <li><?php echo e($result['title']); ?></li>
    <?php endforeach; ?>
</ul>