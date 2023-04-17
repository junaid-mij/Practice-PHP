<?php

namespace Project;
include "b1.php";
include "b2.php";

use \Project\Motorcycles\Bike as Suzuki;
// $bike = new Motorcycles\Bike();
$bike = new Suzuki();
echo $bike->getName(); 

use \Project\Bike as Yamaha;
// $bike_1 = new Bike();
$bike_1 = new Yamaha();
echo $bike_1->getName(); 

?>