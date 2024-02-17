<?php

namespace App;

use App\Worker;

class Developer extends Worker
{
    use hasRest;

    public $publicProp;

    protected string $position = 'developer';

    private array $attributes;

    public function work()
    {
        print_r('Developing') . '<br>';
    }

    public function __toString(): string
    {
        return $this->getName();
    }

    public function __destruct()
    {
//        print_r(111111111);
    }

    public function __call($name, $arguments)
    {
        print_r($name);
        print_r($arguments);
    }

    public static function __callStatic($name, $arguments)
    {
        print_r($name);
        print_r($arguments);
    }

    public function __get($name)
    {
//        return $name;

        if (isset($this->attributes[$name])) {
            return $this->attributes[$name];
        }

        return null;
    }

    public function __set($name, $value)
    {
//        print_r($value);
        $this->attributes[$name] = $value;
    }

    /**
     * @return array
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    public function __isset($name)
    {
        return true;
    }

    public function __unset($name)
    {
        print_r(111111);
    }

//    public function __sleep()
//    {
////        print_r(11111);
////        return [];
//    }

//    public function __wakeup()
//    {
//        print_r(22222);
//        return [];
//    }

//    public function __serialize(): array
//    {
//        return ['fsdfsf' => 'fgdfgdfg'];
//    }

    public function __unserialize(array $data)
    {
        var_dump($data);
    }

    public function __invoke($arg)
    {
        print_r($arg);
    }

    public function __clone()
    {
        print_r('Clone!');
    }

    public function __debugInfo()
    {
        return ['position' => $this->position];
    }
}