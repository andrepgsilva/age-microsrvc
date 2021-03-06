<?php

namespace Tests\App;

use \PHPUnit\Framework\TestCase;

class AgeTest extends TestCase 
{
    public function testCalculateAge()
    {
        $today = new \DateTime();
        $dateOfBirth = new \DateTime();
        $dateOfBirth->setDate(1984, 9, 8);

        $age = new \App\Age($dateOfBirth, $today);

        $this->assertEquals($age->calculate(), 37);
    }
}
