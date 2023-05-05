<?php

/**
 * Working with time in php:
 * 
 * Unix Epoch       : In PHP, the Unix Epoch refers to the starting point from which time is measured in Unix-based systems. The Unix Epoch is 
 *                    set at January 1, 1970, 00:00:00 Coordinated Universal Time (UTC). Unix timestamps are represented as the number of 
 *                    seconds that have elapsed since this point in time.
 * Unix Timestamp   : In PHP, a Unix timestamp is a numeric representation of a specific point in time, counting the number of seconds that 
 *                    have elapsed since the Unix Epoch, which started at January 1, 1970, 00:00:00 GMT (not including leap seconds).
 * 
 * Micro Time       : In PHP, microtime() is a built-in function that returns the current Unix timestamp with microseconds. This function is 
 *                    particularly useful when you need to measure the execution time of a script or a specific block of code with higher 
 *                    precision than seconds.
 * 
 */

echo "17 (Date) Working with Time in PHP, Microtime and Benchmarking: \n\n";

echo "->Unix Epoch\n";
//Get the current Unix timestamp:
$timestamp = time();
echo $timestamp; // e.g., 1672450672

echo PHP_EOL;

//Convert a date string to a Unix timestamp:
$date_string = "2023-04-28 14:00:00";
$timestamp = strtotime($date_string);
echo $timestamp; // e.g., 1672468800

echo PHP_EOL;

//Format a Unix timestamp as a human-readable date:
$timestamp = 1682675075;
$formatted_date = date("Y-m-d H:i:s", $timestamp);
echo $formatted_date; // Output: 2023-04-28 09:44:35
echo PHP_EOL;
echo PHP_EOL;



echo "->Unix Timestamp\n";
//time()
$current_timestamp = time();
echo "Current Unix timestamp: " . $current_timestamp;
echo PHP_EOL;
//mktime()
$timestamp = mktime(15, 30, 45, 4, 29, 2023); // 15:30:45 on April 29, 2023
echo "Generated Unix timestamp: " . $timestamp;
echo PHP_EOL;
//strtotime()
$timestamp = strtotime("2023-04-29 15:30:45");
echo "Converted Unix timestamp: " . $timestamp;

$next_week_timestamp = strtotime("+1 week");
echo "Unix timestamp for one week from now: " . $next_week_timestamp;
echo PHP_EOL;
//date()
$current_timestamp = time();
$formatted_date = date("Y-m-d H:i:s", $current_timestamp);
echo "Current date and time: " . $formatted_date;
echo "\n\n";




echo "->Micro Time\n";
/* Micro Second: Checking how much time does this program take to execute */
// Get the start time
$start_time = microtime(true);

// Execute your code or script here
function factorial($number) {
    $result = 1;
    
    for ($i = 1; $i <= $number; $i++) {
        $result *= $i;
    }
    
    return $result;
}
factorial(1000);

// Get the end time
$end_time = microtime(true);

// Calculate the execution time
$execution_time = $end_time - $start_time;

printf("Execution Time: %10.8f" , $execution_time);
/* End Micro Second */
echo "\n\n";

echo "->Print custom number after (.)\n";
$mt = microtime(true);
printf("%10.8f",$mt);
echo "\n\n";



?>