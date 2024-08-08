<?php

//$textHello = "Hello world \n";
//
//$textHello = "Hello world 2\n";
//
//echo $textHello;
//
//
//$emptyVariable = null;
//var_dump($emptyVariable);

/*
$name = 'Mykola';

echo "Hello $name \n";
echo 'Hello ' . $name . "\n";
*/
//var_dump($string);

//$number = 55;
//$number2 = 1;
//
//var_dump(PHP_INT_MIN);
//var_dump(PHP_INT_MAX);

//$float = 5.0;
//
//var_dump(PHP_FLOAT_MIN);
//var_dump(PHP_FLOAT_MAX);
//
//var_dump($float);

//$bool = true;
//$bool2 = false;
//var_dump($bool2);

//$variable = 'test';

//$result = isset($variable);

//var_dump($result);


//$variable = 'test';
//
//unset($variable);
//var_dump($variable);

//$string = (int)'55';
//$string = intval('55');
//
//intval();
//floatval();
//boolval();

//var_dump($string);
//$variable = true;
//$result = is_string($variable);
//
//is_int();
//is_float();
//is_string();
//is_bool();
//is_null();
//
//
//is_scalar();
//is_numeric();
//
//var_dump($result);


//$variable = (bool)'-0';
//
//var_dump($variable);

//$a = 5;
//
//$b = &$a;
//
//$a = $a + 1;
//echo $a . PHP_EOL;
//echo $b . PHP_EOL;


//$number1 = 5;
//$number2 = 2;
//$result = $number1 + $number2;
//$result = $number1 - $number2;
//$result = $number1 / $number2;
//$result = $number1 * $number2;
//$result = $number1 ** $number2;
//$result = $number1 % $number2;

//$text = 'Hello ';
//$text2 = 'World';
//
//$text = $text . $text2;
//$text .= $text2;
//$text .= 'test ';
//$text .= ' test2';
//$text .= ' test 3';
//
//echo $text . PHP_EOL;

//$x = 1;
//$y = 2;

//$x = $x + $y;
//$x += $y;
//$x -= $y;
//$x /= $y;
//$x *= $y;
//$x **= $y;
//$x %= $y;

//$result = $x . $y;

//echo $result . PHP_EOL;


//$x = 10;
//$y = 5;

//var_dump($x === $y);
//var_dump($x != $y);
//var_dump($x !== $y);
//var_dump($x < $y);
//var_dump($x > $y);
//var_dump($x >= $y);
//var_dump($x <= $y);
//var_dump($x <=> $y);



//echo "Hello! How are you ? \n";
//$text = fgets(STDIN);
//
//echo 'User text: ' . trim($text);


//echo "type number 1:";
//$number1 = (int)fgets(STDIN);
//
//echo $number1;

//$x = false;
//$y = true;
//$result = $x and $y;
//var_dump($x && $y);
//var_dump($x || $y);
//var_dump($x xor $y);
//var_dump(!$x);

//$x = 5; //6
//$x = ++$x + $x++ + --$x;
//
//echo $x . PHP_EOL;
//echo $x . PHP_EOL;

//echo 'test';

//$a = 5;
//
//for ($i=0; $i<3; $i++) {
//    $a += $i;
//}
//
//
//require_once __DIR__ . '/lesson9/Discount.php';
//require_once __DIR__ . '/lesson9/FixedDiscount.php';
//require_once __DIR__ . '/lesson9/PercentageDiscount.php';
//require_once __DIR__ . '/lesson9/Order.php';
//
//$items = [
//    ['name' => 'PC', 'amount' => 1, 'price' => 25000],
//    ['name' => 'Monitor', 'amount' => 2, 'price' => 5000],
//];
//
//try {
////    $fixed = new FixedDiscount(20000, 1000);
//    $fixed = new PercentageDiscount(10);
//    $order = new Order($items, $fixed);
//
//    echo $order->getFullPrice() . PHP_EOL;
//} catch (Exception $e) {
//    echo $e->getMessage();
//}
//
//

?>
<!---->
<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<!--    <form action="server.php" method="POST">-->
<!--        <input type="text" name="name">-->
<!--        <input type="number" min="0" max="100" step="1" name="age">-->
<!--        <h3>Hobbies</h3>-->
<!--        <div>-->
<!--            <label>Sport</label>-->
<!--            <input type="checkbox" name="hobbies[active][]" value="sport">-->
<!--        </div>-->
<!--        <div>-->
<!--            <label>Fishing</label>-->
<!--            <input type="checkbox" name="hobbies[active][]" value="fishing">-->
<!--        </div>-->
<!--        <div>-->
<!--            <label>PC games</label>-->
<!--            <input type="checkbox" name="hobbies[]" value="pc games">-->
<!--        </div>-->
<!--        <input type="submit">-->
<!--    </form>-->
<!--</body>-->
<!--</html>-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Get response form </h3>
    <form action="server.php" method="POST" enctype="multipart/form-data">
        <div>
            <label>Json</label>
            <input type="radio" name="response_type" value="json">
        </div>
        <div>
            <label>Xml</label>
            <input type="radio" name="response_type" value="xml">
        </div>
        <div>
            <label>Image PNG</label>
            <input type="radio" name="response_type" value="png">
        </div>
        <div>
            <label>Upload your file</label>
            <input type="file" name="my_file">
        </div>
        <input type="submit" value="Get response">
    </form>
</body>
</html>








