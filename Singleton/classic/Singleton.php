<?php

class Singleton
{
    private static $uniqueInstance;

    private function __construct()
    {
    }

    /**
     * private to prevent cloning
     */
    private function __clone()
    {

    }

    public static function getInstance()
    {
        if (self::$uniqueInstance === null) {
            self::$uniqueInstance = new Singleton();
        }
        return self::$uniqueInstance;
    }

}