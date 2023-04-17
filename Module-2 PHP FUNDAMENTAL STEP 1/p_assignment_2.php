<?php

function calculateCommission($tuition) {
  return $tuition < 7000 ? "Invalid data" : 
            ($tuition < 10000 ? 0.15 * $tuition : 
                ($tuition < 20000 ? 0.2 * $tuition : 0.25 * $tuition));
}

$tuition = 20000;
$commission = calculateCommission($tuition);

if ($commission != "Invalid data") {
  echo "The commission for tuition fee of $$tuition is $$commission";
} else {
  echo "Invalid tuition fee";
}

?>