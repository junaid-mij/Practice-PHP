<?php

/**
 * Custom Exception:
 * 
 * 
 * 
 */

echo "22 (Exceptions) Custom Exceptions: \n";

//Custom Exception Example:
class MyException extends Exception{};
class NetworkException extends Exception{};

function testException(){
    throw new NetworkException();
}

try{
    testException();
}catch(MyException $e){
    echo "MyException Caught";
}catch(NetworkException $e){
    echo "NetworkException Caught";
}catch(Exception $e){
    echo "Exception Caught";
}finally{
    echo "\nCleaned Up";
}

?>