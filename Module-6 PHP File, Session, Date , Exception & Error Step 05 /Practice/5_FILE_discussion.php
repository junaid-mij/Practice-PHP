<?php

/**
 * Discussion: File Writing
 * 
 * file_put_contents()      : It is a built-in PHP function used to write data to a file. It takes two required parameters: the first parameter specifies the name of the file to write to, and the second parameter specifies the data to write.
 *                            Example: $filename = "/Applications/XAMPP/xamppfiles/htdocs/Practice PhP/PhP Ostad/Module-6 PHP File, Session, Date , Exception & Error Step 05 /text_3.txt";
 *                                       //Note: It will delete previous data and paste the new data.
 *                                     file_put_contents($filename,"Zoynal");  
 *                                       //Note: It will not delete the previous data & add the new data in the last.
 *                                       //Note: It will write the data in same line to prevent that we need to use '\n'
 *                                     file_put_contents($filename,"Zoynal",FILE_APPEND);
 * LOCK_EX                  : It will help to prevent the race condition.
 *                            Example: file_put_contents($filename,"Junaid", FILE_APPEND | LOCK_EX);
 *              
 */

echo "5 (File) Discussion of file put contents and race conditions and file locks: \n";

$filename = "/Applications/XAMPP/xamppfiles/htdocs/Practice PhP/PhP Ostad/Module-6 PHP File, Session, Date , Exception & Error Step 05 /text_3.txt";
file_put_contents($filename,"\nZoynal",FILE_APPEND );

?> 