<?php

include "autoloader.php";

use app\Classes\LuxuryApartment;
use app\Classes\StandardApartment;

$standardApartment = new StandardApartment(501, 100, 2);
$luxuryApartment = new LuxuryApartment(502, 200, 3, ["TV", "AC", "Washing Machine"]);

$standardApartment->calculateRent();
$standardApartment->displayApartmentDetails();
echo "\n\n";

$standardApartment->setBalcony(true);
$standardApartment->calculateRent();
$standardApartment->displayApartmentDetails();