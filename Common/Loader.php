<?php
namespace Common;

class Loader
{
    static function autoLoad($class)
    {
        $file = BASEDIR . '/' . str_replace('\\', '/', $class) . '.php';
        if(file_exists($file)){
            require $file;
        }
    }
}
