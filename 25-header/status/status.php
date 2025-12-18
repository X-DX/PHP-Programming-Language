<?php
// HTTP status codes are 3-digit numbers sent by a server to tell the client (browser/app) what happened with the reques
//1.  1xx – Informational
// Request received, still processing.
// 100 Continue
// 101 Switching Protocols

//2. 2xx – Success
// Request was successful.
// 200 OK ✅ (request successful)
// 201 Created (new resource created)
// 202 Accepted (processing, not completed yet)
// 204 No Content (success, but no response body)

//3.  3xx – Redirection
// Further action required.
// 301 Moved Permanently (SEO-important)
// 302 Found (temporary redirect)
// 304 Not Modified (cached version used)

//4.  4xx – Client Error
// Problem from the client side.
// 400 Bad Request
// 401 Unauthorized (login required)
// 403 Forbidden (no permission)
// 404 Not Found ❌
// 405 Method Not Allowed
// 409 Conflict
// 422 Unprocessable Entity (validation errors)

//5.  5xx – Server Error
// Problem from the server side.
// 500 Internal Server Error 🔥
// 502 Bad Gateway
// 503 Service Unavailable
// 504 Gateway Timeout

function e($value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

$id = (!empty($_GET['id']) ? (int) $_GET['id'] : 9);

if ($id >= 5) {
    require __DIR__ . '/notfound.php';
    die();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
</head>

<body>
    <header>
        <h1>News website</h1>
    </header>
    <main>
        You were accessing the article with the ID: <?php echo e($id); ?>.
    </main>
</body>

</html>