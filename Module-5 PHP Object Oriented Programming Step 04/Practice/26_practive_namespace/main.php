<?php

namespace Astronomy;
include "planet.php";
include "earth.php";

$planet = new Planets\Planet();  //Unqualified
$planet = new \Astronomy\Planets\Planet();  //Qualified
$planet->getName();

$earth = new Planets\Earth();   //Unqualified
$earth = new \Astronomy\Planets\Earth();    //Qualified
$earth->getName();

?>