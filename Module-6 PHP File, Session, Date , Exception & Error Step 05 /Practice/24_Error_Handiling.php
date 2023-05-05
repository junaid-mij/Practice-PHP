<?php

/**
 * Error Handiling: Error handling in PHP refers to the process of identifying, reporting, and responding to errors that occur during the 
 *                  execution of a PHP script. Errors in PHP can occur for various reasons, such as syntax errors, runtime errors, or logical 
 *                  errors.
 * 
 * Show Report    : error_reporting(E_ALL);
 * CFG Path       : echo get_cfg_var("cfg_file_path");
 * 
 */

echo "24 (error) Discussion of PHP error settings and error reporting: \n";

error_reporting(E_ALL);
echo get_cfg_var("cfg_file_path");

?> 