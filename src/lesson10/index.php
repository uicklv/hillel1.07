<?php


require_once  'Person.php';
require_once  'File.php';
require_once  'Document.php';
require_once  'Test.php';
require_once  'ArrayHelper.php';
require_once  'Controller.php';
require_once  'UserController.php';

//$person = new Person('John', 25);


//echo Person::$oldAge . PHP_EOL;
//echo Person::showOldAge();
//
//echo $person->calculateOldAge() . PHP_EOL;
//
//Person::$oldAge;

//Person::storageWrite();

//print_r(File::getExtensions());
//print_r(Document::getExtensions());

//class A
//{
//    protected static $name = 'Class A';
//
//    public function showName(): void
//    {
//        echo static::$name . PHP_EOL;
//    }
//}
//
//
//class B extends A
//{
//    protected static $name = 'Class B';
//}
//
//$a = new A();
//$b = new B();
//
//$a->showName();
//$b->showName();


$controller = new UserController();
//var_dump($controller->userExists(2));

//echo UserController::$test . PHP_EOL;

$controller->test();
$controller->test2();




