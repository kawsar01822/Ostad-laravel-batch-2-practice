<?php

namespace app\Classes;

use app\Interfaces\BloodBankInterface;
use app\Traits\BloodTestingTrait;

class BloodBank implements BloodBankInterface
{
    use BloodTestingTrait;

    private $donors = [];
    public function receiveBlood(BloodDonor $donor)
    {
        $this->donors[] = $donor;
        echo "Received Blood from: " . $donor->getName() . "\n";
    }

    public function getDonorsByBloodGroup($bloodGroup){
        $matchingDonors = [];

        foreach($this->donors as $donor){
            if($donor->getBloodGroup() == $bloodGroup){
                $matchingDonors[] = $donor;
            }
        }
        return $matchingDonors;
    }

    public function displayDonors(){
        echo "List of Donors:\n";
        foreach($this->donors as $donor){
            $donor->displayDonorInfo();
            $this->testBloodGroup($donor);
            echo "\n";
        }
    }
}