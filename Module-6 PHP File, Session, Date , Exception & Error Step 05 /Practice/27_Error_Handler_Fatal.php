<?php

/**
 * Fatal Error Handler:
 * 
 * register_shutdown_function() :
 * 
 */

echo "27 (error) Fatal Error Handlers: \n";

//default fatal error off:
ini_set('display_errors',0);

register_shutdown_function('fatal_error_handler');
function fatal_error_handler(){
    $error = error_get_last();
    if($error){
        //do something
        echo "\nFatal Error!\n\n";
    }
}

no_function();

?>