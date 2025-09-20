<?php
// host = localhost

$pdo = new PDO('mysql:host=127.0.0.1;dbname=note_app', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    // 3 => 2
]);
// var_dump(PDO::ATTR_ERRMODE); // 3
// var_dump(PDO::ERRMODE_EXCEPTION); // 2

var_dump($pdo);


