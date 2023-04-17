<?php

/**
 * Writing & Appending Data to Files:
 * 
 *  >Finding the directory to do that first select the file & open the terminal then type "pwd" after that you will see the directory.
 *  Or Else you can type "echo getcwd();" it will show you the directory.
 *  Example: $filename = "/Applications/XAMPP/xamppfiles/htdocs/Practice PhP/PhP Ostad/Module-6 PHP File, Session, Date , Exception & Error Step 05 /text_2.txt";
 *  
 * >Open File: fopen()-> It is a built-in PHP function that is used to open a file or URL. It takes two arguments: the path to the file or URL you want to open, and the mode in which you want to open the file. 
 *  Example: $fp = fopen($filename, 'w'); //opening in 'w' mode its risky cuz it will wipeout the previous data...
 * 
 * >Write data: fwrite()-> The "fwrite()" function in PHP is used to write data to a file. It takes two arguments:  a file pointer resource returned by the "fopen()" function and the data to be written to the file. 
 *  Example: fwrite($fp, "Marajul\n");
 * 
 * >Write data without wiping the preivious data: 
 *  Example: $existenceData = file_get_contents($filename);
 *           $fp= fopen($filename, 'w');
 *           afwrite($fp, $existenceData);
 *           afwrite($fp, "Islam\n");
 *           afwrite($fp, "Junaid\n");
 * 
 * >There is another way to write data without losing the previous data:
 *  
 * >Close file: fclose()-> It is a built-in PHP function that is used to close an open file pointer that was previously opened with fopen(). 
 *  Example: fclose($fp);
 * 
 */

echo "2 (File) Writing and Appending Data to Files: \n";

$filename = "/Applications/XAMPP/xamppfiles/htdocs/Practice PhP/PhP Ostad/Module-6 PHP File, Session, Date , Exception & Error Step 05 /text_2.txt";
$existenceData = file_get_contents($filename);
$fp= fopen($filename, 'w');
fwrite($fp, $existenceData);
fwrite($fp, "Islam\n");
fwrite($fp, "Junaid\n");
fclose($fp);
?>