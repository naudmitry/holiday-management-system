<?php

namespace App\Enums;

abstract class AbstractEnum
{
    public static function getAll()
    {
        $reflectionClass = new \ReflectionClass(get_called_class());
        
        return $reflectionClass->getConstants();
    }
}
