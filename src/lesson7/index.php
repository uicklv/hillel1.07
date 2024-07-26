<?php


//$array = range(1,10, -1);
//
//
///**
// * @param positive-int $number
// * @param positive-int $number2
// * @return positive-int
// */
//function my(int $number, int $number2): int
//{
//    if ($number < 0 || $number2 < 0) {
//        throw new Exception('Fatal Error');
//    }
//    return $number + $number2;
//}
//
//print_r(my(-1,-5));


//$append = false;
//if ($append) {
//    echo $append;
//} else {
//    echo 'false';
//}
//
//echo $append ? $append : 'false';
//echo $append ?: 'false';

//
//require_once 'functions/fileFunctions.php';
//require_once 'functions/userFunctions.php';
//
////write('test.txt', 'Hello World! 3' . PHP_EOL, true);
//
//$user = ['id' => 1, 'name' => 'John Doe', 'email' => 'john@doe.com'];
//$user2 = ['id' => 2, 'name' => 'Kate', 'email' => 'kate@doe.com'];

//userCreate($user2);

//
//update(2, ['email' => 'katekate@gmail.com']);
//$users = users();
//print_r($users);

//delete(1);

//rename('users_new.txt', 'functions/users.txt');


//function generator(int $length): Generator
//{
//    for ($i = 0; $i < $length; $i++) {
//        yield $i;
//    }
//}
//
//$generator = generator(10);
//
//var_dump($generator);
//echo $generator->current() . PHP_EOL;
//$generator->next();
//echo $generator->current() . PHP_EOL;
//$generator->next();
//echo $generator->current() . PHP_EOL;
//
//
//foreach ($generator as $value) {
//    echo $value . PHP_EOL;
//}

//function generator(array $array)
//{
//    yield 1;
//    yield 2;
//    yield from $array;
//}
//
//foreach (generator([3,4,5]) as $num) {
//    echo $num . PHP_EOL;
//}

//function generator(int $length)
//{
//    for ($i = 1; $i < $length; $i++) {
//        return $i;
//    }
//}

//$start = memory_get_usage(true);
//$array = range(1, 900000);
//$end = memory_get_usage(true);
//echo $end - $start . PHP_EOL;

//$start = memory_get_usage(true);
//$array = generator( 900000);
//$end = memory_get_usage(true);
//echo $end - $start . PHP_EOL;
//
//foreach ($array as $value) {
//    if ($value === 100) {
//        break;
//    }
//    echo $value . PHP_EOL;
//}

//foreach (fileGenerator('users.txt') as $line) {
//    echo $line;
//}


class Person
{
    public string $name;
    public int $age;

    public int $oldAge = 65;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(): string
    {
       return $this->name;
    }

    public function printName(): void
    {
        echo $this->getName() . PHP_EOL;
    }

    public function __destruct()
    {
        echo 'destruct' . PHP_EOL;
    }
}


$person1 = new Person('John', 25, 60);
var_dump($person1);

//$person2 = clone $person1;
//
//$person2->name = 'Mary';
//$person2 = new Person();
//$person2->name = 'John';
//$person2->age = 20;

//var_dump($person1);
//var_dump($person2);

//var_dump($person1 === $person2);

//var_dump($person1);
//var_dump($person2);

//var_dump($person1);





