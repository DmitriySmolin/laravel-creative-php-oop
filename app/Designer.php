<?php

namespace App;

use App\Worker;

class Designer extends Worker
{
    use hasRest;

    protected string $position = 'designer';

    public function work()
    {
        print_r('Designing') . '<br>';
    }
}