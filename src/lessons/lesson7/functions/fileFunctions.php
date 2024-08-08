<?php


/**
 * @param string $filename
 * @param string $line
 * @param bool $append
 * @return bool
 */
function write(string $filename, string $line, bool $append = false): bool
{
    return (bool)file_put_contents($filename, $line, $append ? FILE_APPEND : 0);
}


/**
 * @param string $file
 * @return Generator
 */
function fileGenerator(string $file)
{
    $file = fopen($file, "r");
    while (($line = fgets($file)) !== false) {
        return $line;
    }
    fclose($file);
}
