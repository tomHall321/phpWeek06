<?php

namespace App\Stuff\Things;


class Potato
{   
    private $numberOfTimesWatered = 0;

    public function water()
    {
        $this->numberOfTimesWatered += 1;
    }

    public function hasGrown()
    {
       return $this->numberOfTimesWatered >= 5; 
    }
}