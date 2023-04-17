<?php

$tuition = 20000;
$c1 = 0.15 * $tuition;
$c2 = 0.2 * $tuition;
$c3 = 0.25 * $tuition;
$commission = ($tuition < 7000) ? "Invalid data" : 
                ($tuition < 10000 ? "The commission for tuition fee of $$tuition is $$c1" : 
                  ($tuition < 20000 ? "The commission for tuition fee of $$tuition is $$c2" : "The commission for tuition fee of $$tuition is $$c3"));

echo $commission;


?>