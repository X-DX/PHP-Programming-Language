<?php
// Notice the SPACE before <?php
// Error: Warning: Cannot modify header information - headers already sent
// why: Key Rule in HTTP, HTTP headers must be sent BEFORE the response body, Once any output is sent to the browser, headers are locked
// or

for ($x = 0; $x < 4095; $x++) { // 1. Error:  Warning: Cannot modify header information - headers already sent
    echo ' ';
}

// 2. Output Buffering in PHP is a mechanism that allows PHP to store (buffer) output in memory instead of sending it immediately to the browser. You can then modify, control, or discard that output before it is finally sent.

// 🔹 Why Output Buffering Exists
// Normally, PHP sends output to the browser as soon as it is generated.
// This creates problems when you want to:
// - Send headers after output
// - Modify HTML before sending it
// - Capture output into a variable
// - Improve performance by reducing I/O operations
// - Output buffering solves all these problems.

// 🔹 How Output Buffering Works (Concept)
// 1. PHP starts buffering output
// 2. echo, print, HTML → stored in buffer (not sent)
// 3. You decide what to do with the buffer:
// - Send it
// - Modify it
// - Discard it

// 🔹 Core Output Buffering Functions
// | Function            | Purpose                       |
// | ------------------- | ----------------------------- |
// | `ob_start()`        | Starts output buffering       |
// | `ob_get_contents()` | Gets buffer content           |
// | `ob_get_clean()`    | Get + clean buffer            |
// | `ob_end_flush()`    | Send buffer & stop buffering  |
// | `ob_end_clean()`    | Discard buffer & stop         |
// | `ob_clean()`        | Clear buffer (keep buffering) |
// | `ob_flush()`        | Send buffer (keep buffering)  |

include __DIR__ . '/other.php';

header("Content-Type: text/plain");

var_dump(ini_get('output_buffering'));

echo file_get_contents('pg1513.txt');
