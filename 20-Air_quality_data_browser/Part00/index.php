<?php

// import json data and access the element
// The file_get_contents() reads a file into a string.
$content = file_get_contents(__DIR__.'/../data/index.json');
// var_dump($content);
// The json_decode() function is used to decode or convert a JSON object to a PHP object.
// var_dump(json_decode($content));

$data = json_decode($content);
// var_dump($data[0]);
// var_dump($data[0]->city);

// phpinfo();

// measurements
// check file size
$data2 =json_decode( file_get_contents('compress.bzip2://'. __DIR__ .'/../data/singapore.json.bz2'),true );
var_dump($data2);