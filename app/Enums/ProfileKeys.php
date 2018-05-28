<?php
/**
 * Created by PhpStorm.
 * User: Lee Crosdale
 * Date: 04/03/2018
 * Time: 13:42
 */

namespace App\Enums;

use ReflectionClass;

class ProfileKeys
{
    const TEXT = 0;
    const NUMBER = 1;
    const TEXTAREA = 2;


    public static function getType($value)
    {
        $class = new ReflectionClass(__CLASS__);
        $constants = array_flip($class->getConstants());

        return $constants[$value];
    }

    public static function getId($value)
    {
        return constant("Self::$value");
    }
}