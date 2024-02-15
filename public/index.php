<?php

use App\Developer;
use App\Visitor;
use App\Worker;

require_once('../vendor/autoload.php');

// $worker = new Worker('Boris', 20, [4,5,6]);
// $worker->work();
// var_dump($worker);

// $visitor = new Visitor();
// $visitor->visit();

$developer = new Developer('Boris', 20, [4,5,6]);

// print_r($developer->name);
// $developer->work();
// print_r($developer->position);

$developer->setPosition('developer');
//var_dump($developer->getPosition());
$developer->rest();