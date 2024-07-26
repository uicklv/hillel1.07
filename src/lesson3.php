<?php

//$string = '';
//$number = 5;
//$number2 = 15;
//
//$newVariable = $string = $number = $number2;
//
////$result = $string and $number;
//////$result = $string && $number;
////
//var_dump($newVariable);

//$number1 = 5;
//$number2 = 10;
//$number3 = 15;
//$number4 = 0;
//$number1 = $number2 > $number3;
//
//
//$result = ($number1 && $number2) || ($number3 && $number4);
//
//var_dump($result);

//$status = 200;

//if ($status === 200) {
//    echo 'OK' . PHP_EOL;
//}

//$value1 = false;
//$value2 = true;
//if ($value1 && $value2) {
//    echo "success" . PHP_EOL;
//} else {
//    echo "fail" . PHP_EOL;
//}


//$status = 300;
//if ($status === 200) {
//    echo "OK" . PHP_EOL;
//} elseif ($status === 404) {
//    echo "Not Found" . PHP_EOL;
//} elseif ($status === 300) {
//    echo "Redirect" . PHP_EOL;
//} else {
//    echo "default";
//}

//if ($status === 200) {
//    echo "OK" . PHP_EOL;
//}
//
//if ($status === 404) {
//    echo "Not Found" . PHP_EOL;
//}
//
//if ($status === 300) {
//    echo "Redirect" . PHP_EOL;
//}


//if ('') {
//    echo "Hello ";
//}
//
//if ('0.0') {
//    echo " Sun "; // andriy , vlad
//}
//
//if ('55' == 55) {
//    echo " Mike "; // andriy, roman, alex
//}
//
//if (1 !== true) {
//    echo " John "; // andriy, roman, alex
//}
//
//if ('' == 0) {
//    echo " Moon "; // andriy , vlad, roman, alex
//}

//if ($status === 200) {
//    echo "OK" . PHP_EOL;
//} elseif ($status === 404) {
//    echo "Not Found" . PHP_EOL;
//} elseif ($status === 300) {
//    echo "Redirect" . PHP_EOL;
//} else {
//    echo "default";
//}

//$status = '200';
//switch ($status) {
//    case 200:
//        echo "OK" . PHP_EOL;
//        break;
//    case 404:
//        echo "Not found" . PHP_EOL;
//        break;
//    case 300:
//        echo "Redirect" . PHP_EOL;
//        break;
//    default:
//        echo "default" . PHP_EOL;
//}
//
//
//$result = match ($status) {
//    200 => "OK" . PHP_EOL,
//    404 => "Not found" . PHP_EOL,
//    300 => "Redirect" . PHP_EOL,
//    default => "default" . PHP_EOL
//};
//echo $result;

// Є текст, якщо текст довжиною більше за 15 символів - дістати перше речення.
$text = "Hello, my name is Mykola. Test text for this lesson";

//$length = strlen($text);
//$limit = 15;
//if ($length > $limit) {
//    $pos = strpos($text, '.');
//    if ($pos !== false) {
//        $first = substr($text, 0, $pos + 1);
//    }
//}
//var_dump($first);

//$search = ['Test', 'this', 'name', 'Mykola'];
//$replace = ['***', '!!!', '&&&'];
//
//$result = str_replace($search, $replace, $text);
//var_dump($result);


//$test1 = 'test1' . PHP_EOL;
//$test2 = 'test2' . PHP_EOL;
//$test3 = 'test3' . PHP_EOL;
//
////echo $test1, $test2, $test3;
//
//print $test1 . $test2 . $test3;

//$text = '.test text.';

//echo ucfirst($text) . PHP_EOL;
//echo ucwords($text) . PHP_EOL;
//echo lcfirst($text) . PHP_EOL;
//echo strtolower($text) . PHP_EOL;
//echo strtoupper($text) . PHP_EOL;

//echo trim($text);
//echo trim($text, '.');
//echo ltrim($text, '.');
//echo rtrim($text, '.');

//$text = 'Test text';
//
//var_dump(stripos($text, 'Text'));


//mb_strpos();
//echo strlen('ї') . PHP_EOL;
//echo mb_strlen('ї') . PHP_EOL;
//mb_strtolower();

//$number = 455.455545;
//echo round($number, 4) . PHP_EOL;

//$number = 35.9;
////$result = ceil($number);
//$result = floor($number);
//
//echo $result . PHP_EOL;

//echo pi() . PHP_EOL;
//
//echo M_PI;

$result = pow(5, 2);
$result = floatval(5);
//$result = (float) 5;
echo $result . PHP_EOL;