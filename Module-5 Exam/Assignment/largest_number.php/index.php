<?php

$num1 = 4;
$num2 = 5;
$num3 = 6;

// Check if num1 is the largest
if ($num1 > $num2 && $num1 > $num3) {
  $largest = $num1;
} else if ($num2 > $num1 && $num2 > $num3) {
  $largest = $num2;
} else {
  $largest = $num3;
}

echo "The largest number is: $largest";

