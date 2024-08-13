<?php


function hello(string $name): string|false
{
    if (strlen($name) < 2) {
        return false;
    }
    return "Hello $name" . PHP_EOL;
}


require './test.php';