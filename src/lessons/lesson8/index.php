<?php


//require_once __DIR__  . '/Dynamic.php';

//$dynamicObject = new Dynamic();
//
//$dynamicObject->fullName = 'John Doe';
//$dynamicObject->age = 25;

//echo $dynamicObject->fullName . PHP_EOL;
//echo $dynamicObject->age . PHP_EOL;

//$dynamicObject->sayHello('John Doe');
//
//
//var_dump($dynamicObject);
//var_dump(isset($dynamicObject->fullName));

//$test = ['fullName' => 'John Doe', 'age' => 25];


//var_dump(isset($test['fullName']));

/*
 * ['fullname' => 'test', 'age' => 25, 'workplace1', '
 */

//$array = (object)['name' => 'John Doe', 'age' => 20];

//$defaultObject = new stdClass();
//$defaultObject->name = 'Kate';
//$defaultObject->lastname = 'Adison';
//
//var_dump($defaultObject);

//$object = new Dynamic();
//
//$json = serialize($object);
//
//
//$decoded = unserialize($json);
//
//var_dump($decoded);


use lesson8\File;

require_once __DIR__  . '/File.php';
require_once __DIR__  . '/FileType.php';

try {

$file = new File('test.txt');

$tasks = [];

//$task = [uniqid(), 'Go to the gym', 10, 'undone'];
$task2 = [uniqid(), 'sleep', 2, 'undone'];
//$file->write(json_encode($task2) . PHP_EOL);

$tasks = $file->getLines();
array_walk($tasks, function (&$item) {
    $item = json_decode($item, true);
});

print_r($tasks);

//$file->write('OOP line !' . PHP_EOL);

//    $lines = $file->getLines();
//    print_r($lines);

//    echo $file->getLastLine();

} catch (Exception $exception) {
    echo $exception->getMessage() . PHP_EOL;
//    echo $exception->getLine() . PHP_EOL;
//    echo $exception->getCode() . PHP_EOL;
//    echo $exception->getFile() . PHP_EOL;
//    exit;
}

//var_dump(pathinfo('var/www/test.txt', PATHINFO_EXTENSION));

