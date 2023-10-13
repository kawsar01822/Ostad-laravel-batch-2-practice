<?php

abstract class Vehicle
{
    abstract public function getBaseFare(): int;
    abstract public function getPerKiloFare(): int;

    public function getTotalFare(int $distance): int
    {
        return $distance * $this->getPerKiloFare() + $this->getBaseFare();
    }
}

class bike extends Vehicle
{
    public function getBaseFare(): int
    {
        return 30;
    }

    public function getPerKiloFare(): int
    {
        return 20;
    }
}

interface hourlyRentable{
    public function hourlyRentFare(): int;
}

class car extends Vehicle
{
    use feedback;
    public function getBaseFare(): int
    {
        return 50;
    }

    public function getPerKiloFare(): int
    {
        return 30;
    }

    public function hourlyRentFare($distance): int
    {
        return 50*$distance;
    }
}

trait feedback{
    public function getFeedback(): string
    {
        return "Thank you for your feedback";
    }
}

$bikeFare = new bike();
$carFare = new car();

echo $bikeFare->getTotalFare(10);
echo PHP_EOL;
echo $carFare->getTotalFare(10);
echo PHP_EOL;
echo $carFare->hourlyRentFare(10);
echo PHP_EOL;
echo $carFare->getFeedback();