<?php

namespace App;

use App\Worker;

class Developer extends Worker
{
    use hasRest;

    protected string $position = 'developer';

    public function work()
    {
        // TODO: Implement work() method.
    }
}