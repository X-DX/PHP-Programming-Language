<?php

header("Location: file.html");
// header('Location: redirect.php'); // at some point browser terminate this. because its too many redirect happning.
// but it doesn't means that php script will run, it will run
die();

echo 'test';
