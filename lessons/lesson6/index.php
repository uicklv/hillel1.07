<?php

//$array = ['key1' => 'value1', 'key2' => 'value2', 'key3' => 'value3'];
//
//$arrayValues = array_values($array);
//$arrayKeys = array_keys($array);
//
////print_r($arrayValues);
//print_r($arrayKeys);
//
//$keys = ['key1', 'key2', 'key3'];
//$values = ['value1', 'value2', 'value3'];
//
//if (count($keys) === count($values)) {
//    $result = array_combine($keys, $values);
//    print_r($result);
//} else {
//    echo 'Error' . PHP_EOL;
//}

//$array = ['test',3,2,6,2];
//
//function calcSumProduct(array $array): array
//{
//    if ([] === $array) {
//        return $array;
//    }
//
////    foreach ($array as $key => $value) {
////        if (!is_numeric($value)) {
////            unset($array[$key]);
////        }
////    }
//
//    $array = array_filter($array, fn($value) => is_numeric($value));
//    $array = array_filter($array, fn($value) => $value <= 2);
//
//    $sum = array_sum($array);
//    $product = array_product($array);
//
//    return [$sum, $product];
//}
//
////$result = calcSumProduct($array);
//
////$arraySum = $result[0];
////$arrayProduct = $result[1];
//
//[$arraySum, $arrayProduct] = calcSumProduct($array);
////list($arraySum, $arrayProduct) = calcSumProduct($array);
//
//echo $arraySum . PHP_EOL;
//echo $arrayProduct . PHP_EOL;

//$user = ['name' => 'John Doe', 'email' => 'john@doe.com', 'location' => ['city' => 'Odesa',
//    'country' => 'Ukraine']];
////$name = $user['name'];
////$email = $user['email'];
////$location = $user['location'];
//
//extract($user);
//
//echo $name . PHP_EOL;
//echo $email . PHP_EOL;
//print_r($location);

//$name = 'John Doe';
//$email = 'john@doe.com';
//$location = 'New York';
//
//$user = compact('name', 'email', 'location');
//
//print_r($user);

//$array = [5,4,3,2,3,13,'2'];
//
//$array = array_unique($array);
//
//print_r($array);
//
//$array1 = ['test1' => 1, 'test2' => 2, 'test3' => 3, 'test4' => 4];
//$array2 = ['test1' => 1, 22 => 2, 33 => 3, 44 => 4];
//
////print_r(array_merge($array1, $array2));
////
////array_push($array1, $array2);
////
////print_r($array1);
//
//array_unshift($array1, 'start element');
//array_push($array1, 'end element');
//print_r($array1);

//$users = [
//    ['id' => 1, 'name' => 'John Doe'],
//    ['id' => 2, 'name' => 'Max'],
//    ['id' => 3, 'name' => 'Kate'],
//    ['id' => 4, 'name' => 'Nick'],
//    ['id' => 5, 'name' => 'Elizabet'],
//];

//$names = [];
//foreach ($users as $user) {
//    $names[] = $user['name'];
//}
//
//echo implode(',', $names) . PHP_EOL;

//$names = array_column($users, 'name');
//echo implode(',', array_column($users, 'name')) . PHP_EOL;

//$array = [1,2,3];
//$result = array_map(function($value) {
//    return $value * 2;
//}, $array);

//print_r($result);

//array_walk($array, function($value, $key) {
//    $value *= 2;
//});

//print_r($array);

//$array[0] = 55;
//
//foreach ($array as &$value) {
//    $value *= 2;
//}
//print_r($array);

//function myWalk(array &$array, callable $callback): void
//{
//    $myArray = $array;
//    foreach ($myArray as &$value) {
//         $callback($value);
//    };
//
//    $array = $myArray;
//}
//
//myWalk($array, function (&$value) {
//  $value *= 2;
//});
//
//print_r($array);

//$array = ['b' => 3, 'd' => 2 , 'c' => 3, 'a' => 1, 'f' => 10, 'e' => 12];
//sort($array);
//rsort($array);

//asort($array);
//arsort($array);
//ksort($array);
//krsort($array);

//print_r($array);
//$users = [
//    ['id' => 1, 'name' => 'John Doe', 'age' => 25],
//    ['id' => 2, 'name' => 'Max', 'age' => 15],
//    ['id' => 3, 'name' => 'Kate' ,'age' => 33],
//    ['id' => 4, 'name' => 'Nick', 'age' => 20],
//    ['id' => 5, 'name' => 'Elizabet', 'age' => 19],
//];


//usort($users, fn ($a, $b) => $b['age'] <=> $a['age']);

//print_r($users);


// include
// include_once
// require
// require_once

//include_once './functions.php';
//$test = 55;
//include_once './functions.php';

//$helloString = hello('Jim');
//if ($helloString === false) {
//    //todo show user error
//}
//echo $helloString;

//for ($i = 0; $i < 3; $i++) {
//    include_once 'body.php';
//}

