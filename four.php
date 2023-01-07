<?php
/* Abstraction */

abstract class Car
{

    // methods
    abstract function forward();
}

class Tesla extends Car
{

    function forward()
    {
        return "This is an abstract method";
    }
}

#Object
$obj = new Tesla;
echo $obj->forward();
