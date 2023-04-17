<?php


$array = [5, 7, 1, 2, 8, 4, 3];
$sum = 8;

function hasPairWithSum($array, $sum) {
    $n = count($array);
    for ($i = 0; $i < $n; $i++) {
      for ($j = $i + 1; $j < $n; $j++) {
        if ($array[$i] + $array[$j] == $sum) {
          return true;
        }
      }
    }
    return false;
}

if (hasPairWithSum($array, $sum)) {
    echo "true (because 5 + 3 = 8)";
} else {
    echo "false";
}




?>
