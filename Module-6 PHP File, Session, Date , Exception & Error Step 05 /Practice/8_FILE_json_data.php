<?php

/**
 * json Data:
 *
 * Write json data            : $encodeData = json_encode($students);
 *                              file_put_contents($filename, $encodeData, LOCK_EX);
 * 
 * Read json data             : Normal way-> It will show the data as object.
 *                              $data = file_get_contents($filename);
 *                              $allStudents = json_decode($data);
 *                              print_r($allStudents);
 *                              //Echo single data:
 *                              echo $allStudents[0]->fname;
 * 
 *                              Another way-> It will show the data as assoiative array.
 *                              $data = file_get_contents($filename);
 *                              $allStudents = json_decode($data, true);
 *                              print_r($allStudents);
 *                              //Echo single data:
 *                              echo $allStudents[0]['fname'];
 * 
 * Show the data in index file: 1st. add "var data =" in front of the data.
 *                              2nd. create a index file and write this code:
 *                                   <html>
 *                                       <head></head>
 *                                       <body>
 *                                          <h1>Data Display</h1>
 *                                       </body>
 *                                       <script src="Text/8.txt" type="application/javascript"></script>
 *                                       <script>
 *                                           console.log(data);
 *                                           //Show some action:Not Medatory
 *                                           console.log(data[0]);
 *                                           alert(data[0].fname+ " " +data[0].lname);
 *                                       </script>
 *                                   </html>
 * 
 */

echo "8 (File) Processing data in json format to file: \n";

$filename = '/Applications/XAMPP/xamppfiles/htdocs/Practice PhP/PhP Ostad/Module-6 PHP File, Session, Date , Exception & Error Step 05 /Practice/Text/8.txt';
$students = [
    [
        'fname' => 'Marajul',
        'lname' => 'Islam',
        'age' => 22,
        'roll' => 977277,
    ],
    [
        'fname' => 'Tushar',
        'lname' => 'Karmakar',
        'age' => 23,
        'roll' => 977271,
    ],
    [
        'fname' => 'Fakhrul',
        'lname' => 'Islam',
        'age' => 23,
        'roll' => 977259,
    ],
];

$data = file_get_contents($filename);
$allStudents = json_decode($data);
print_r($allStudents);
//Echo single data:
echo $allStudents[0]->fname;

?>
