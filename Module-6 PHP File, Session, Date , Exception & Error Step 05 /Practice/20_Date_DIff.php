<?php

/**
 * Human readable difference between two dates:
 * 
 * strtotime()      : In PHP, strtotime() is a function that converts a date string into a Unix timestamp.
 * 
 * 
 */

echo "20 (Date) Creating Unix timestamps from strings (date parsing) and extracting human readable differences between two dates: \n";

//set bangladesh time:
date_default_timezone_set("Asia/Dhaka");
//converts a date string into a Unix timestamp:
//unix time:
echo mktime(0,0,0,12,12,2023)."\n";
//string date:
echo strtotime("now")."\n";
echo strtotime("12 December, 2023")."\n";

//difference between two dates:
echo (strtotime("3days")-strtotime("now"))/(86400)."\n";

//converted from the original date string into a Unix timestamp and then back into a formatted string.
echo date('H:i:s A',strtotime("02 June 2001 15:30:00"))."\n";
 
//Finding out difference between two dates using OOP:
$d1 = new DateTime("02 June 2001");
$d2 = new DateTime("30 April 2023");
$difference = date_diff($d1, $d2);
echo "My Age: ".$difference->format('%yYear %mMonth %dDays');

?>