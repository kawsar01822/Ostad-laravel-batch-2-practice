<?php

namespace app\Classes;

use app\Classes\BloodDonor;

class ProfessionalDonor extends BloodDonor
{
    public function donateBlood()
    {
        echo $this->name . " is Donating Blood Professionally\n";
    }
}