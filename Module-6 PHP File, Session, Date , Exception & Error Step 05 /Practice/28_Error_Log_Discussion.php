<?php

/**
 * Discussion on Error Logs:
 * 
 * Creating a error log that send the error report to an email or other file.
 * 
 */

echo "28 (error) Discussion of error logs: \n";

// * Creating a error log that send the error report to an email or other file:
echo ini_get("error_log");
$headers = "From: system@server.com \r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
//Date if you want:
$date = date("Y:m:d H:j:s");
//Sending to email:
error_log("This is an error message",1,"admin@server.com",$headers);
//Sending to custom file:
error_log("{$date} Log in a new file\n",3,"/file/path.text");

?>