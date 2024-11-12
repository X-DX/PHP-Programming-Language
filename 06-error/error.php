// 1. Parse Errors (Syntax Errors)
// These occur when there’s a syntax mistake in the code, such as a missing semicolon or misused keywords.

<?php
    echo "Hello, World!" // Missing semicolon
?>

// 2. Fatal Errors
// These errors happen when PHP encounters an issue it can’t recover from, like calling a non-existent function or trying to instantiate a non-existent class.
<?php
    // nonExistentFunction(); // Function doesn't exist
?>

// 3. Warning Errors
// Warnings occur for non-fatal errors, meaning the script can continue to execute, but there might be potential issues.
<?php
    include 'nonexistentfile.php'; // File doesn't exist
?>

// 4. Notice Errors
// Notices are minor errors often related to undefined variables or array indexes. The script continues to run but may not function as expected.
<?php
    echo $undefinedVariable; // Variable not defined
?>
