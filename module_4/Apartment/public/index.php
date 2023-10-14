<?php

use app\Classes\Owner;
use app\Classes\LuxuryApartment;
use app\Classes\StandardApartment;


include "autoloader.php";

$standardApartment = new StandardApartment(501, 1200, 2);
$luxuryApartment = new LuxuryApartment(502, 2000, 3, ["TV", "AC", "Balcony", "Wifi", "Swimming Pool"]);

$standardApartment->setBalcony(true);
$standardApartment->calculateRent();

$owner1 = new Owner("Kawsar",$standardApartment);
$owner2 = new Owner("Lamia",$luxuryApartment);

echo "Standard Apartment Details" . PHP_EOL;
$standardApartment->displayApartmentDetails();
echo PHP_EOL;

echo "Luxury Apartment Details" . PHP_EOL;
$luxuryApartment->displayApartmentDetails();
echo "Amenities: " . $luxuryApartment->getAmenities() . PHP_EOL;
echo PHP_EOL;

echo "Owner Details" . PHP_EOL;
$owner1->displayOwnerDetails();
echo PHP_EOL;
echo PHP_EOL;
$owner2->displayOwnerDetails();
