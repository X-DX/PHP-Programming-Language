<?php
// in this i used host = 127.0.0.1, network connections, now we are sending packets
$pdo = new PDO('mysql:host=127.0.0.1;dbname=note_app', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);
// var_dump(PDO::ATTR_ERRMODE);
// var_dump(PDO::ERRMODE_EXCEPTION);

var_dump($pdo);
