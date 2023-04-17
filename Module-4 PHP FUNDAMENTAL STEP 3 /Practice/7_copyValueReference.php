<?php

echo "7. Copy by Value and Copy by Reference:(Means array clone):\n\n ";
$info = [
    'fName' => 'Marajul',
    'lName' => 'Islam',
];
$newInfo = &$info; // if we use '&' in front of the array it will become *copy by reference or shallow copy:
$newInfo['lName'] = 'Junaid';
print_r($info);
print_r($newInfo);

?>
