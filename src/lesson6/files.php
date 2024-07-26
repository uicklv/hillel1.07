<?php

//
//if ($file === false) {
//    echo "Unable to open file!";
//}
//$size = filesize("my-file.txt");
//$content = fread($file, $size);
//
//fclose($file);
//
//echo $content . PHP_EOL;

//while(($line = fgets($file)) !== false) {
//    echo $line;
//}
//
//fclose($file);

//$lines = file('my-file.txt');
//var_dump(file_exists('my-file.txt'));
//$lines = file_get_contents('my-file.txt');

//print_r($lines);

$file = fopen("my-file.txt", "a");

fwrite($file, 'New text 2' . PHP_EOL);

fclose($file);

file_put_contents('my-file.txt', 'New text 4' . PHP_EOL);




