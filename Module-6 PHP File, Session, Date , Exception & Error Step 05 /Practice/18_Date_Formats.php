<?php

/**
 * Date Formats:
 * 
 * Show today date      : echo date('d/m/y');
 * 
 * Set default timezone : date_default_timezone_set("Asia/Dhaka");
 * 
 */

echo "18 (Date) Working with Date Formats in PHP: \n";

date_default_timezone_set("Asia/Dhaka");

//show today date: "29/04/23"
echo date('d/m/y');
echo PHP_EOL;

//show today date: "Sat/Apr/2023"
echo date('D/M/Y');
echo PHP_EOL;

//show date like this: "20th Apr, 2023"
echo date('dS M, Y');
echo PHP_EOL;

//show date like this: "20th April, 2023"
echo date('dS F, Y');
echo PHP_EOL;

//show date and time: "29th Apr, 2023 12:12:12"
echo date('dS M, Y h:i:s');
echo PHP_EOL;

//show date and time:
echo date('dS M, Y H:i:s A');
echo PHP_EOL;

//finding out the day of the year:
echo date('z');
echo PHP_EOL;

 

?> 