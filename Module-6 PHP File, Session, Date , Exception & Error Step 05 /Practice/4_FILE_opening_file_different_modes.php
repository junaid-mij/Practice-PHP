<?php

/**
 * Different modes of opeing file:
 * 
 * 'r+'     : When a file is opened with "r+", it means that the file is opened for both reading and writing. This allows you to read the contents of the file and also write new data to it or modify existing data within it.
 *            Example: $file = fopen("example.txt", "r+");
 *                     // Read the contents of the file
 *                     $data = fread($file, filesize("example.txt"));
 *                     // Write new data to the file
 *                     fwrite($file, "This is some new data!");
 *                     // Close the file
 *                     fclose($file);
 * 
 * 'w+'     : When a file is opened with "w+", it means that the file is opened for both reading and writing, just like "r+". However, unlike "r+", when you open a file with "w+", the file pointer is positioned at the beginning of the file and the existing contents of the file are truncated. This means that any existing data in the file is deleted before you start writing new data to it.
 *            Example: $file = fopen("example.txt", "w+");
 * 
 *                     // Write data to the file
 *                     fwrite($file, "This is some new data!");
 *              
 *                     // Move the file pointer to the beginning of the file
 *                     rewind($file);
 * 
 *                     // Read the contents of the file
 *                     $data = fread($file, filesize("example.txt"));
 *          
 *                     // Close the file
 *                     fclose($file);
 * 
 * 'a+'     : The a+ mode stands for "append and read" and it allows you to open a file for both reading and writing at the end of the file. If the file does not exist, it will be created.
 *            Example: $file = fopen("example.txt", "a+");
 */ 

echo "4 (File) Opening files in different modes: \n";

?>