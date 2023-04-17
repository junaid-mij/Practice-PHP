<?php

/**
 * Files: Different way the READ the FILE
 * 
 * >Finding the directory to do that first select the file & open the terminal then type "pwd" after that you will see the directory.
 *  Or Else you can type "echo getcwd();" it will show you the directory.
 *  Example: $filename = "/Applications/XAMPP/xamppfiles/htdocs/Practice PhP/PhP Ostad/Module-6 PHP File, Session, Date , Exception & Error Step 05 /text.txt";
 *  
 * >Open File: fopen()-> It is a built-in PHP function that is used to open a file or URL. It takes two arguments: the path to the file or URL you want to open, and the mode in which you want to open the file. 
 *  Example: $fp = fopen($filename, 'r');
 * 
 * >Read one line: fgets()-> It is a built-in PHP function that is used to read a line from a file. It takes two arguments: the file pointer, which is a reference to the file that you want to read from, and the maximum length of the line to be read.
 *  Example: $lines = fgets($fp);
 * 
 * >Read whole File: We need to use a loop
 *  Example: while($line = fgets($fp)){
 *              echo $line;
 *           }
 * 
 * >Reset the file pointer: rewind()-> It is a built-in PHP function that is used to reset the file pointer to the beginning of an open file that was previously opened with fopen().
 *  Example: rewind($fp);
 * 
 * >Custom file pointer: fseek()-> It is a built-in PHP function that is used to move the file pointer to a specific position within an open file that was previously opened with fopen().
 *  Example: fseek($fp,4); OR fseek($fp,-1,SEEK_END);  
 * 
 * >Close file: fclose()-> It is a built-in PHP function that is used to close an open file pointer that was previously opened with fopen(). 
 *  Example: fclose($fp);
 * 
 * >Another way to read file: file()->It is a built-in PHP function that is used to read the contents of a file and store them in an array, with each line of the file being an element of the array.
 *  Example: $data = file($filename);
 *           echo $data[3];           // specific data
 *           print_r($data);          // Read data like an array 
 * 
 * >Another way to read file: file_get_contents()-> It  is a built-in PHP function that is used to read the contents of a file into a string.
 *  Example: $data = file_get_contents($filename);
 *           echo $data;
 * 
 * Make a condition: Like if the txt file does not have any data the file will not run, to do that:
 *                   Example: if(is_readable($filename)){
 *                              //Code
 *                            }else{
 *                              //The file does not have any data.      
 *                            }
 */ 

echo "1 (File) Reading data from files: \n";

$filename = "/Applications/XAMPP/xamppfiles/htdocs/Practice PhP/PhP Ostad/Module-6 PHP File, Session, Date , Exception & Error Step 05 /text.txt";
if(is_readable($filename)){
    $data = file($filename);
    print_r($data);
}else{
    echo "The file does not contain any kind of data. Thank you!";
}

?>