<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Displaying Errors</title>
</head>
<body>
    <h2>Error Handling</h2>
<?php 

# Script 8.3 handle_errors.php
# Created 24 Aug 2023
# Created by Hannah Holmes
# This script is for practicing writing an error handler



// flag variable for site status:
    define('LIVE', TRUE);

// create error handler:
function my_error_handler ($e_number, $e_message, $e_file, $e_line) {
    // build the error message:
    $message = "An error occurred in script '$e_file' on line $e_line: $e_message\n";

    // append $e_vars to $message:

    if (!LIVE) {
        echo '<pre>' . $message . "\n";
        debug_print_backtrace();
        echo '</pre><br>';
    } else {
        echo '<div class="error">A system error occurred. We apologize for the inconvenience.</div><br>';
    }
}
// use error handler
set_error_handler ('my_error_handler');

// create errors:
foreach ($var as $v) {}
// $result = 1/0;

?>
</body>
</html>