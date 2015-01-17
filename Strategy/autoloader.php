<?php

function myClassLoader($className)
{
    require($className . '.php');
    return true;
}

spl_autoload_register('myClassLoader');