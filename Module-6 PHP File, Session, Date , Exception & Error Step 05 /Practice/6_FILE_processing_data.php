<?php

/**
 * Processing Data:
 * 
 * Writing array data       : $fp = fopen($filename,'w');
 *                            foreach($students as $student){
 *                                $data = sprintf("%s,%s,%s,%s\n",$student['fname'],$student['lname'],$student['age'],$student['roll']);
 *                                fwrite($fp,$data);
 *                            }
 *                            fclose($fp);
 * 
 * Reading array data       : $fp = fopen($filename,'r');
 *                            while($data = fgets($fp)){
 *                                $student= explode(",",$data);
 *                                printf("Name: %s %s\nAge: %s\nRoll: %s\n\n", $student[0], $student[1], $student[2], $student[3]);
 *                            }
 *                            fclose($fp);
 *  
 *  Easy Way of Writing     : $fp = fopen($filename,'w');
 *                            foreach($students as $student){
 *                                fputcsv($fp,$student);
 *                            }
 *                            fclose($fp);
 * 
 * Easy Way of Reading      : $fp = fopen($filename,'r');
 *                            while($student = fgetcsv($fp)){
 *                                printf("Name: %s %s\nAge: %s\nRoll: %s\n\n", $student[0], $student[1], $student[2], $student[3]);
 *                            }
 *                            fclose($fp);
 * 
 * Add new data in array    : $student = array(
 *                                "fname"=>"Arif",
 *                                "lname"=>"Hossain",
 *                                "age"=>23,
 *                                "roll"=>977264
 *                            );
 *                            $fp = fopen($filename, 'a');
 *                            fputcsv($fp, $student);
 *                            fclose($fp);  
 * 
 * Delete Existing Data     : Its little complicated,
 *                           1st:
 *                            $fp = fopen($filename,'w');
 *                            foreach($students as $student){
 *                                $data = sprintf("%s,%s,%s,%s\n",$student['fname'],$student['lname'],$student['age'],$student['roll']);
 *                                fwrite($fp,$data);
 *                            }
 *                            fclose($fp);
 *                           2nd:
 *                              
 * 
 */

echo "6 (File) Processing data in files in different ways: \n";

$filename = "/Applications/XAMPP/xamppfiles/htdocs/Practice PhP/PhP Ostad/Module-6 PHP File, Session, Date , Exception & Error Step 05 /Practice/Text/6.txt";
$students = array(
    array(
        "fname"=>"Marajul",
        "lname"=>"Islam",
        "age"=>22,
        "roll"=>977277
    ),
    array(
        "fname"=>"Tushar",
        "lname"=>"Karmakar",
        "age"=>23,
        "roll"=>977271
    ),
    array(
        "fname"=>"Fakhrul",
        "lname"=>"Islam",
        "age"=>23,
        "roll"=>977259
    )
);

//Normal Way of Writing:
$fp = fopen($filename,'w');
foreach($students as $student){
    $data = sprintf("%s,%s,%s,%s\n",$student['fname'],$student['lname'],$student['age'],$student['roll']);
    fwrite($fp,$data);
}
fclose($fp);

//Normal Way of Reading: 
// $fp = fopen($filename,'r');
// while($data = fgets($fp)){
//     $student= explode(",",$data);
//     printf("Name: %s %s\nAge: %s\nRoll: %s\n\n", $student[0], $student[1], $student[2], $student[3]);
// }
// fclose($fp);

//Easiest Way of Writing:
// $fp = fopen($filename,'w');
// foreach($students as $student){
//     fputcsv($fp,$student); 
// }
// fclose($fp);

//Easiest Way of Writing:
// $fp = fopen($filename,'r');
// while($student  = fgetcsv($fp)){
//     printf("Name: %s %s\nAge: %s\nRoll: %s\n\n", $student[0], $student[1], $student[2], $student[3]);
// }
// fclose($fp);

//Add new data:
// $student = array(
//     "fname"=>"Arif",
//     "lname"=>"Hossain",
//     "age"=>23,
//     "roll"=>977264
// );
// $fp = fopen($filename, 'a');
// fputcsv($fp, $student);
// fclose($fp);

//Delete existing data:
$data = file($filename);
unset($data[3]);
print_r($data);
$fp = fopen($filename, 'w');
foreach($data as $line){
    fwrite($fp, $line);
}
fclose($fp);

?>