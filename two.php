<?php

class Car
{
    // methods
    function forward($car_name = 'default')
    {
        return "$car_name is moving forward.<br>";
    }

    // magic_method : It will execute last of all methods without calling it.
    function __destruct()
    {
        echo "Bye.<br>";
    }

    // magic_method : It will execute first of all methods without calling it.
    function __construct()
    {
        echo "Hello World.<br>";
    }
}

$audi = new Car;
echo $audi->forward('AUDI');

$honda = new Car;
