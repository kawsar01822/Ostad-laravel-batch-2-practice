<?php

namespace app\Classes;

use app\Classes\Apartment;
use app\Traits\HasBalcony;

class StandardApartment extends Apartment
{
    use HasBalcony;
    public function calculateRent()
    {
        $this->rent = $this->area * 0.2 + $this->numberOfBedrooms * 100;

        if ($this->hasBalcony()) {
            $this->rent += 100;
        }
    }
}