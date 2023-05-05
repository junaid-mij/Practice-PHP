<?php

/**
 * Generating Unix timestamps:
 * 
 * 
 */

echo "19 (Date) Generating Unix timestamps of any date, month, year, and GMT timestamp: \n";

//default time:
echo time (). "\n";
echo mktime(0,0,0,12,1,2018). "\n";
//bangladesh time:
date_default_timezone_set ('Asia/Dhaka');
echo mktime(0,0,0,12,1,2018)."\n";
echo gmmktime(0,0,0,12,1,2018)."\n";
//gmt time:
echo (22400-800)/(60*60)."\n";
//Get a specific time:
echo (mktime(0,0,0,12,12,1980) - mktime(0,0,0,11,30,2018) ) / (24*60*60) ."\n ";

?>