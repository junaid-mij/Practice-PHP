<?php

/**
 * Backtracing:
 * 
 * 
 */

echo "29 (error) Using Backtracing for Debugging: \n";

//Example:
function w($a){
    x($a);
}
function x($b){
    y($b*2);
}
function y($c){
    //echo $c;
    if($c<20){
        trigger_error("Too Small {$c}\n");
    }else{
        echo "{$c} is okay!";
    }
    debug_print_backtrace();
    //print_r(debug_backtrace());
}

function z($d, $e){
    w(($d+$e)*2);
}
z(1,1);

?>