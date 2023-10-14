<?php

namespace app\Classes;

class Owner
{
    private $name;
    private $apartment;
    public function __construct($name, Apartment $apartment)
    {
        $this->name = $name;
        $this->apartment = $apartment;
    }

    public function displayOwnerDetails{
        echo "Owner Name: " . $this->name . "<br>";
        echo "Apartment Number: " . $this->apartment->getApartmentNumber() . "<br>";
    }
}