<?php

namespace lesson10;
trait ArrayHelper
{
//    public static string $test = 'test string';
    private function inArray(mixed $value, array $array): bool
    {
        return in_array($value, $array);
    }

    public function test(): void
    {
        echo 'Test from trait 1' . PHP_EOL;
    }
}