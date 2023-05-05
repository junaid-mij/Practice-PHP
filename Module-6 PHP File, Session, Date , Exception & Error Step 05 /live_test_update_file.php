<?php

$file_name = "ostad.txt";

// Check if file exists, create it if not
if (!file_exists($file_name)) {
  file_put_contents($file_name, "");
}

$file = fopen($file_name, "r+");

if (!$file) {
  die("Error: Could not open file.");
}

// Read current contents of file
$contents = fread($file, filesize($file_name));

// Add current date and time to contents
$contents .= "\n" . date("Y-m-d H:i:s");

// Move file pointer to beginning of file
fseek($file, 0);

// Write modified contents back to file
fwrite($file, $contents);

// Close file
fclose($file);

echo "File updated successfully.";

?>
