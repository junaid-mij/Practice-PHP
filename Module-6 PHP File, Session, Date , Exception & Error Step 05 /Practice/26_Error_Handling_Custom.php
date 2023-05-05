<?php

/**
 * Custom Error Handler:
 * 
 * 
 */

echo "26 (error) Custom Error Handlers: \n\n";

//Example:
function custom_error_handler($severity, $msg, $file, $line){
    switch($severity){
        case E_WARNING:
            echo "Error [{$severity}]: {$msg} in {$file} on line number {$line}\n";
            break;
        case E_NOTICE:
            echo "Error [{$severity}]: {$msg} in {$file} on line number {$line}\n";
            break;
        default:
            echo "Error [{$severity}]: {$msg} in {$file} on line number {$line}\n";
    }
}
set_error_handler('custom_error_handler');

//define custom error handler normal:
//trigger_error("This is an error!");

//define custom error handler with function:
function division($divident, $divisor ){
    if(0==$divisor){
        trigger_error("Cann't divide by 0");
    }else{
        return $divident/$divisor;
    }
}
//error:
echo division(8,0);

?>