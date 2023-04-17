<?php

//Name: Marajul Islam

/* There are two ways to make the calculator using ternary operator:  */

//First and the simple way:
$tuition = 15000;
$c1 = 0.15 * $tuition;
$c2 = 0.2 * $tuition;
$c3 = 0.25 * $tuition;
$commission = ($tuition < 7000) ? "Invalid tuition fee" : 
                ($tuition < 10000 ? "The commission for tuition fee of $$tuition is $$c1" : 
                  ($tuition < 20000 ? "The commission for tuition fee of $$tuition is $$c2" : "The commission for tuition fee of $$tuition is $$c3"));

echo $commission;

echo "\n\n";

//Second: Using Function:
  function calculateCommission($f_tuition) {
    return $f_tuition < 7000 ? "Invalid data" : 
              ($f_tuition < 10000 ? 0.15 * $f_tuition : 
                  ($f_tuition < 20000 ? 0.2 * $f_tuition : 0.25 * $f_tuition));
  }
  
  $f_tuition = 15000;
  $commission = calculateCommission($f_tuition);
  
  if ($commission != "Invalid data") {
    echo "The commission for tuition fee of $$f_tuition is $$commission";
  } else {
    echo "Invalid tuition fee";
  }
  


?>