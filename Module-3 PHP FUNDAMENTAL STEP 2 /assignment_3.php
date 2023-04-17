<?php

//Name: Marajul Islam

//Question-1: Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision:
function checkEvenOdd($num)
{
    if ($num % 2 == 0) {
        return 'Even';
    } else {
        return 'Odd';
    }
}
echo checkEvenOdd(100);

//break
echo "\n";

//Question-2:  1+2+3...…….100  Write a loop to calculate the summation of the series:
$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
}

echo "The summation of the series 1 + 2 + 3 + ... + 100 is: $sum";

?>
