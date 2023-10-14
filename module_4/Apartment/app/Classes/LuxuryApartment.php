<?php

namespace app\Classes;

use app\Classes\Apartment;
use app\Interfaces\HasAmenities;

class LuxuryApartment extends Apartment implements HasAmenities
{
    private $amenities;
    
    public function __construct($apartmentNumber, $area, $numberOfBedrooms,$amenities)
    {
        parent::__construct($apartmentNumber, $area, $numberOfBedrooms);
        $this->amenities = $amenities;
    }
    public function calculateRent()
    {
        $this->rent = $this->area * 0.5 + $this->numberOfBedrooms * 150;
    }

    PUBLIC FUNCTION getAmenities(){
        return implode(", ",$this->amenities);
    }
}