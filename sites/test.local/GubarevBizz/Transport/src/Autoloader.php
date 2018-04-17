<?php

namespace GubarevBizz\Transport;

use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use RegexIterator;

class Autoloader
{
    public static function autoload()
    {
        $path = __DIR__;
        $allFiles = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path));
        $phpFiles = new RegexIterator($allFiles, '/\.php$/');

        foreach ($phpFiles as $phpFile) {
            if (file_exists($phpFile->getPathname())) {
                include_once $phpFile->getPathname();
            }
        }
    }
}
