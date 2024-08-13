<?php

namespace lesson10;

use lesson8\File;

class Document extends File
{
    public static array $extensions = [
        'txt',
        'doc',
        'docx'
    ];
}