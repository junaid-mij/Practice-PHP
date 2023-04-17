<?php

/**
 * Serialized Arrays:
 *
 * Save array data by serialize     : $data = serialize($students);
 *                                    file_put_contents($filename, $data, LOCK_EX);
 *
 * To read the serialize data       : $dataFromFile = file_get_contents($filename);
 *                                    $allStudents = unserialize($dataFromFile);
 *                                    print_r($allStudents);
 *
 * Delete individual data           : $dataFromFile = file_get_contents($filename);
 *                                    $allStudents = unserialize($dataFromFile);
 *                                    print_r($allStudents);
 *                                    unset($allStudents[1]);
 *                                    $data = serialize($allStudents);
 *                                    file_put_contents($filename, $data, LOCK_EX);
 *
 * Add individual data              : $student = [
 *                                        'fname' => 'Arif',
 *                                        'lname' => 'Hossain',
 *                                        'age' => 23,  
 *                                        'roll' => 977264,
 *                                    ];
 *                                    $dataFromFile = file_get_contents($filename);
 *                                    $allStudents = unserialize($dataFromFile);
 *                                    print_r($allStudents);
 *                                    array_push($allStudents, $student);
 *                                    $data = serialize($allStudents);
 *                                    file_put_contents($filename, $data, LOCK_EX);
 *
 */

echo "7 (File) Processing data using serialized arrays in files: \n";

$filename = '/Applications/XAMPP/xamppfiles/htdocs/Practice PhP/PhP Ostad/Module-6 PHP File, Session, Date , Exception & Error Step 05 /Practice/Text/7.txt';
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
$student = [
    'fname' => 'Arif',
    'lname' => 'Hossain',
    'age' => 23,
    'roll' => 977264,
];

$dataFromFile = file_get_contents($filename);
$allStudents = unserialize($dataFromFile);
print_r($allStudents);

// array_push($allStudents, $student);
// $data = serialize($allStudents);
// file_put_contents($filename, $data, LOCK_EX);

?>
