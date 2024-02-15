<?php

namespace App;

class Visitor
{
    // Фиксированные значения
    // Строки
    // Числа/Флоат
    // Булевые значения
    // Null
    public string $name;
    public int $age;

    //Массивы
    public array $hours;

    // Динамические значения
    // Функции

    public function visit()
    {
        print_r('im visiting');
    }
}
