<?php

namespace App;

class Age 
{
    private $dateOfBirth;
    private $currentYear;

    public function __construct($dateOfBirth, $currentYear)
    {
        $this->dateOfBirth = $dateOfBirth;
        $this->currentYear = $currentYear;
    }

    public function calculate()
    {
        return $this->currentYear->diff($this->dateOfBirth)->format('%y');
    }
}