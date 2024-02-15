<?php

namespace App;

trait hasRest
{
    public function rest()
    {
        print_r($this->getName() . ' has rest');
    }
}