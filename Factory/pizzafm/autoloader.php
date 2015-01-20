<?php

function autoload($className)
{
    $className = ltrim($className, '\\');
    $fileName = '';

    if ($lastNsPos = strripos($className, '\\')) {
        $className = substr($className, $lastNsPos + 1);
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

    require $fileName;
}

spl_autoload_register('autoload');