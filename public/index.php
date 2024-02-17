<?php

use App\Designer;
use App\Developer;
use App\Visitor;
use App\Worker;
use App\Salary;

require_once('../vendor/autoload.php');

// $worker = new Worker('Boris', 20, [4,5,6]);
// $worker->work();
// var_dump($worker);

// $visitor = new Visitor();
// $visitor->visit();

$developer = new Developer('Boris', 20, [5, 6, 10]);
$designer = new Designer('Elena', 18, [4, 5, 6]);

// print_r($developer->name);
// $developer->work();
// print_r($developer->position);

// $developer->setPosition('developer');
//var_dump($developer->getPosition());
// $developer->rest();

$salary = Salary::count($developer->getHours());
// var_dump($salary);
//var_dump(Salary::$totalHours);
//Salary::$totalHours = Salary::$totalHours + 100;
//var_dump(Salary::$totalHours);

$salaryObj = new Salary();
//var_dump($salaryObj::$totalHours);

//Абстракция
//Инкапсуляция
//Наследование

// Не приветствуется динамическое добавление свойств в объект. Нарушение принципа инкапсуляции
// $worker = Worker::find(1);
// $worker->some_atr = 'some';

$workers = [$developer, $designer];

//foreach ($workers as $worker) {
//    $worker->work();
//}

/* ---------------- МАГИЧЕСКИЕ МЕТОДЫ ---------------- */

/*
 * __string
 */

//var_dump((string)$developer);

/*
 * __call, __calStatic
 */

//$developer->asad('fdgdfg'); // Вызовется метод __call, который отработает для этого несущ. метода

//Developer::asdadasd('ararar'); // Вызовется метод __callStatic, который отработает для этого несущ. метода

/*
 * __get, __set
 */

//print_r($developer->dadad); // Вызовется метод __get, который отработает для получения  несущ. св-ва

//$developer->ararar = 'trtrt';

// __set добавляем динамически св-ва и значения
$developer->ararar1 = 'trtrt1';
$developer->ararar2 = 'trtrt2';
$developer->ararar3 = 'trtrt3';

//  пытаем обратиться через __get и получаем null
$value = $developer->dgdg213sdfdsf;
//var_dump($developer->getAttributes());
//var_dump($value);

/*
 * __isset позволяет изменить логику isset на свою реализацию
 */

//var_dump(isset($developer->tytyty));

/*
 * __unset позволяет изменить логику удаления св-во которое было добавлено динамически
 */

//unset($developer->tytyty);

/*
 * __sleep запускается перед serialize (превращение объекта в строку);
 */

//var_dump(serialize($developer));

/*
 * __wakeup запускается перед unserialize (превращениес строки в объект);
 */
//$str = serialize($developer);
//$obj = unserialize($str);
//var_dump($obj);

/*
 * __serialize запускается в момент serialize(превращение объекта в строку), прописываем какие атрибуты должны будут сохраниться в строке
 */
//$str = serialize($developer);
//var_dump($str);

/*
 * __unserialize запускается в момент unserialize
 */

//$str = serialize($developer);
//$obj = unserialize($str);

/*
 * __invoke позволяет обращаться к объекту как к методу
 */

//$developer('Invoke!');

/*
 * __clone
 */

//$developer2 = clone $developer;

/*
 * __debugInfo переопредялет вывод var_dump или print_r
 */

//print_r($developer);


/* ---------------- Функции для работы с классами и объектами ---------------- */
//var_dump(class_exists('App\Developer'));
//var_dump(get_class_methods('App\Developer'));
//var_dump(get_class_vars('App\Developer')); //позволявет получить все публичные св-ва по классу и его родительскому классу
//var_dump(get_class($developer)); // позволяет по объекту найти имя класса от которго был создан
//var_dump(get_parent_class($developer)); // позволяет по объекту найти имя родительского класса
//var_dump(get_object_vars($developer)); //позволявет получить все публичные св-ва по объекту текущего класса и родительского класса;
//var_dump(method_exists($developer, 'work')); // позволяет проверить существует ли данный метод по объекту или классу
var_dump(property_exists($developer, 'name')); // позволяет проверить существует ли данное публичное св-во по объекту или классу