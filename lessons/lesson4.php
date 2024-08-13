<?php
declare(strict_types = 1);


//printer();


//$variable = 5;
//if (is_int($variable)) {
//    function printer()
//    {
//        echo "Hello PHP!\n";
//    }
//}
//
//printer();
//PRINTER();
//priNtEr();
//PRInter();
//prinTER();


//function printer($arg)
//{
//    echo "Hello $arg \n";
//}
//
//printer('Mykola');
//
//$name = 'Mike';
//printer($name);


//function power($number1, $number2, $pow1 = 2, $pow2 = 3)
//{
//    $result = (($number1 * $number2) ** $pow1) ** $pow2;
//
//    echo $result . PHP_EOL;
//}
//
//power(2, 4, 2, 1);

//$result2 = null;

//
//
//$number1 = 55;
//$number2 = 'test';
//$result = sum($number1, $number2);
//
//if ($result === false) {
//    echo "Pls type correct numeric values \n";
//} else {
//    echo "sum:$result \n";
//}


//function sum(float $number1, float $number2): float|false
//{
////    if (is_numeric($number1) && is_numeric($number2)) {
////        $result = $number1 + $number2;
////        return $result;
////    } else {
////        return false;
////    }
//
//    if (!is_numeric($number1) || !is_numeric($number2)) {
//        return false;
//    }
//
//    return $number1 + $number2;
//}
//
//echo sum(5, 5);

//
//function hello(): void
//{
//    echo "Hello World!";
//}
//
//function test(bool $switch): never
//{
//    if ($switch === false) {
//       //todo set message to log
//    }
//    exit;
//}
//
//echo 1;
//
//function apiFetch(string $uuid): mixed
//{
//    $data = apiCall($uuid); //todo create function
//
//    return $data;
//}
//
//
//function search(?string $location = null, ?string $sector = null, ?string $salaryMin = null, ?string $salaryMax = null)
//{
//    $query = '';
//    if ($location !== null) {
//        //todo add query condition
//    }
//
//    if ($sector !== null) {
//        //todo add query condition
//    }
//
//    if ($salaryMin !== null) {
//        //todo add query condition
//    }
//
//    if ($salaryMax !== null) {
//        //todo add query condition
//    }
//}
//
//
//search(null, null, '1500', '3000');
//
//search(salaryMax: '3000');


//function sum(...$numbers)
//{
//    var_dump($numbers);
//}
//
//sum(5);

//function div(float $number, int $div = 2): float
//{
//    if ($div < 2) {
//        return $number;
//    }
//
//    return $number / $div;
//}
//
//function div2(float &$number, int $div = 2): void
//{
//    if ($div > 1) {
//        $number = $number / $div;
//    }
//}
//
//$myNumber = 10;
//echo $myNumber . PHP_EOL;
//div2($myNumber);
//echo $myNumber . PHP_EOL;

//$result = div($myNumber);

//echo $result . PHP_EOL;

//function discount(float &$total, float $discount = 100): void
//{
//    $total -= $discount;
//}
//
//function discount2(float $total, float $discount = 100): float
//{
//    return $total - $discount;
//}
//
//$discount = true;
//$total = 3500;
//if ($discount === true) {
////    discount($total);
//    $total = discount2($total);
//}
//
//echo $total . PHP_EOL;


//static , globals


//
//$function = function (int $a, int $b): int {
//    return $a + $b;
//};
//
//var_dump($function);
//
//echo $function(5,3) . PHP_EOL;

//function myFilter(string $string, ?Closure $function = null)
//{
//    if ($function !== null) {
//        return $function($string);
//    }
//
//    return $string;
//}

//function myTest(string $string): string
//{
//    return trim($string, '?');
//}
//
//function myFilter(string $string, ?callable $function = null)
//{
//    if ($function !== null) {
//        return $function($string);
//    }
//
//    return $string;
//}
//
//$text = '    Hello world. How are you?     ';
//
//$text = myFilter($text, 'trim');
//$text = myFilter($text, 'myTest');
//$text = myFilter($text, function (string $string): string {
//    return str_replace('o', '*', $string);
//});
//echo $text . PHP_EOL;

//$filterFunc = function (string $string): string {
//  return str_replace('o', '*', $string);
//};
//
//$text = myFilter($text, $filterFunc);
//
//
//$text = myFilter($text, function(string $string): string {
//    return str_replace(' ', '', $string);
//});
//
//echo $text . PHP_EOL;



//$a = 5;
//
//function calc(float $number) {
//    global $a;
//    $a = $a * $number;
//}
//
//echo calc(5) . PHP_EOL;;
//
//echo $a . PHP_EOL;

//$a = 5;

//$function = function (int $number) use (&$a): void {
//    $a = $number * $a;
//};
//$function(5);
//echo $a . PHP_EOL;

//$rowFunc = fn(int $number) => $number * $a;
//
//echo $rowFunc(5) . PHP_EOL;



//$function = fn (float $number, int $pow = 2) => $number ** $pow;
//
//echo $function(5) . PHP_EOL;
//
//
//$text = myFilter('test', fn ($string) => str_replace(' ', '', $string));

function counter(): void
{
    static $counter = 0;
    $counter++;
    echo $counter . PHP_EOL;
}

counter();
counter();
counter();
counter();


