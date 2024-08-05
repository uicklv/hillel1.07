<?php

class File
{
    public static array $extensions = [
        'doc',
        'docx',
        'txt',
        'png',
        'jpeg',
        'zip',
    ];

    public static function getExtensions(): array
    {
        return static::$extensions;
    }

}