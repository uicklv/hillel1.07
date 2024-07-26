<?php

//$array = [];
//$array2 = array();

//$array = [10 => 'elem1', -1 => 'elem2', 5 => 'elem3', 0 => 'elem4', 11 => 'elem6', 'elem5'];
//
//$user = [
//    'id' => 1,
////    'test' => 1.1,
////    'test2' => false,
////    'test3' => null,
//    'name' => [
//        'firstname' => 'John',
//        'lastname' => 'Doe',
//    ],
//    'email' => 'john@example.com',
//    'location' => [
//        'country' => [
//            'country_code' => 'UA',
//            'country_name' => 'Ukraine'
//        ],
//        'city' => 'Odesa',
//        'street' => 'Fontanskya 61'
//    ]
//];

//var_dump($user);

//$keys = [
//    true => 'test1',
//    false => 'test2',
//    '5' => 'test3',
//    '5a' => 'test4',
//    5.7 => 'test5',
//    44 => 'test6',
//    null => 'test7'
//];
//
//var_dump($keys);
//
//$array = [];
//
//$array[] = 1;
//$array[] = 2;
//$array[] = 3;
//
//$array[5] = 4;
//$array['name']['firstname'] = 'John';
//$array['name']['lastname'] = 'Doe';
//
////var_dump($array);
//
////echo $array[5] . PHP_EOL;
////print_r($array['name']['firstname']);
//
//unset($array[5]);
//print_r($array);

//$array = [1, 2, 3];
//$array2 = [3 => 4, 4 => 5, 5 => 6];
//
//$resultArray = $array2 + $array;

//$array = [1, 2, 3];
//$array2 = [1, '2', 3];

//$array = [0 => 1, 1 => 2, 2 => 3];
//$array2 = [1 => 2, 2 => 3, 0 => 1];

//var_dump($array == $array2);


//$i = 1;
//while ($i <= 10) {
//    echo $i . PHP_EOL;
//    $i++;
//}

//$i = 11;
//do {
//    echo $i . PHP_EOL;
//    $i++;
//} while ($i <= 10);

//$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
//
//foreach ($array as $key => $value) {
//    echo "key: $key | value: $value" . PHP_EOL;
//}

$users = [
    ['name' => 'John', 'age' => 25],
    ['name' => 'Kate', 'age' => 20],
    ['name' => 'Mike', 'age' => 20],
    ['name' => 'Kate', 'age' => 25],
];

//foreach ($users as $key => $user) {
////    $user['city'] = 'Odesa'; bad code
////    $users[$key]['city']['test'] = 'Odesa';
////    $user['city'] = 'Odesa';
//    if ($user['name'] === 'John') {
//        $users[$key]['city'] = 'Odesa';
//    } elseif ($user['name'] === 'Kate') {
//        $users[$key]['city'] = 'Lviv';
//    }
//}
//
//print_r($users);

//$user = ['name' => 'John', 'age' => 25];
//$array = [];
//for ($i = 1; $i <= 10; $i++) {
//    echo $i . PHP_EOL;
//}

//$array = [1, 2, 3, 4, 5];
//$length = count($array);
//for ($i = 0; $i < $length; $i++) {
//    echo $array[$i] . PHP_EOL;
//}
////echo $length . PHP_EOL;
//
//for ($i = 0, $j = 1; $i < 10, $j < 17; $i++, $j += 2) {
//    echo "i:$i | j:$j" . PHP_EOL;
//}


//function randArray(int $length = 10, int $min = 1, int $max = 10): array
//{
//    $array = [];
//    for ($i = 0; $i < $length; $i++) {
//        $array[] = rand($min, $max);
//    }
//
//    return $array;
//}
//
//$myArray = randArray();
//print_r($myArray);
//
//foreach ($myArray as $number) {
////    if ($number === 10) {
////       continue;
////    }
//    if ($number === 10) {
//        break;
//    }
//    echo $number . PHP_EOL;
//}

//$vacancies = [
//    ['id' => 1, 'title' => 'PHP Developer', 'salary' => '2500$', 'location_id' => 1, 'sector_id' => 2], // sector => ['id' => 2, 'name' => 'IT']
//    ['id' => 2, 'title' => 'Finance Manager', 'salary' => '2000$', 'location_id' => 2, 'sector_id' => 1],
//    ['id' => 3, 'title' => 'Js Developer', 'salary' => '3300$', 'location_id' => 4, 'sector_id' => 2],
//];
//
//$sectors = [
//    ['id' => 1, 'name' => 'Finance'],
//    ['id' => 2, 'name' => 'IT'],
//];
//
//$locations = [
//    ['id' => 1, 'name' => 'London'],
//    ['id' => 2, 'name' => 'Lviv'],
//    ['id' => 3, 'name' => 'Kyiv'],
//    ['id' => 4, 'name' => 'Odesa'],
//];
//
//foreach ($vacancies as $key => $vacancy) {
//
//    foreach ($locations as $location) {
//        if ($vacancy['location_id'] === $location['id']) {
//            $vacancies[$key]['location'] = $location;
//            unset($vacancies[$key]['location_id']);
//            break;
//        }
//    }
//
//    foreach ($sectors as $sector) {
//        if ($vacancy['sector_id'] === $sector['id']) {
//            $vacancies[$key]['sector'] = $sector;
//            unset($vacancies[$key]['sector_id']);
//            continue 2;
//        }
//    }
//}
//
//print_r($vacancies);

//$string = "Hello world!";
//
//$array = [];
//$length = strlen($string);
//for ($i = 0; $i < $length; $i++) {
//    $array[$i] = $string[$i];
//}
//
//print_r($array);


//$string = 'John, Kate, Mike';
//
//$array = explode(' ', $string);

$array = ['John', 'Kate', 'Mike'];
//$string = implode(", ", $array);
$string = join(", ", $array);

print_r($array);
