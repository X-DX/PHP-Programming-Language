<?php

// $_SERVER is a superglobal array in PHP.
// 'HTTP_USER_AGENT' contains information about the browser and device of the user.
$ua = $_SERVER['HTTP_USER_AGENT'] ?? '';

if (strpos($ua, 'Firefox') !== false) { // strpos() = Searches for a substring inside a string, position (number) if found, false if not
    echo 'You are using Firefox!';
} else {
    echo 'You are using Chrome!';
}

var_dump($ua);

echo '<pre>';
var_dump($_SERVER);
echo '</pre>';

// echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];


// 🌐 HTTP Headers
// Examine Browser ↔ Server Communication

// HTTP headers are extra information sent along with a request or response.


// 🔹 1️⃣ HTTP Headers: Browser → Server Communication
// These are called Request Headers
// They tell the server:
// Who is making the request
// What kind of data is accepted
// Browser details
// Authentication info

// 🧾 Common Request Headers (Browser → Server)
// | Header            | Purpose                                  |
// | ----------------- | ---------------------------------------- |
// | `Host`            | Domain name of the server                |
// | `User-Agent`      | Browser & OS info                        |
// | `Accept`          | Types of response the browser can handle |
// | `Accept-Language` | Preferred language                       |
// | `Accept-Encoding` | Compression formats                      |
// | `Cookie`          | Stored session data                      |
// | `Authorization`   | Login token / credentials                |
// | `Referer`         | Page where request came from             |
