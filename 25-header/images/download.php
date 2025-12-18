<?php
header('Content-Type: image/jpeg');
header('Content-Disposition: attachment; filename=image.jpg'); // force the browser to download a file instead of displaying it.
// Content-Disposition: Controls how the browser should handle the response.
// attachment: Tells the browser: 👉 Download this file

header('Content-Length: ' . filesize(__DIR__ . '/IMG_0933.jpg')); // Tells the browser exact size (in bytes) of the response
// Enables:
// Download progress bar
// Proper stream handling
// Resume support (in some cases)

readfile(__DIR__ . '/IMG_0933.jpg');
