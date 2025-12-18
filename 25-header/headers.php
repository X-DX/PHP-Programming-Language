<?php
// 🔹 2️⃣ HTTP Headers: Server → Browser Communication
// These are called Response Headers
// They tell the browser:
// Status of the request
// How to handle the response
// Security rules
// Cookies to store

// 🧾 Common Response Headers (Server → Browser)
// | Header                        | Purpose                 |
// | ----------------------------- | ----------------------- |
// | `Status`                      | Success or error code   |
// | `Content-Type`                | Type of content         |
// | `Content-Length`              | Size of response        |
// | `Set-Cookie`                  | Store cookies           |
// | `Cache-Control`               | Caching rules           |
// | `Location`                    | Redirect URL            |
// | `Access-Control-Allow-Origin` | CORS rules              |
// | `X-Frame-Options`             | Clickjacking protection |


// header('Content-Type: application/json');
// header('Cache-Control: no-store');

header('Content-Type: image/jpeg');
readfile(__DIR__ . '/img.jpg');
