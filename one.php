<?php
class Car                                                       /* This is a class method */
{

    function forward($car_name = "default")                     /* This is a method */
    {
        return "$car_name is moving forward. <br>";
    }

    function backward($car_name = 'default')
    {
        return "$car_name is Moving reverse. <br>";
    }
}

$obj = new Car;                                                 /* Creating an object of the Car class */

echo $obj->forward('Range Rover');                              /* -> is called an Accessor used in PHP */
echo $obj->backward();

$toyota = new Car;
echo $toyota->backward('Toyota');

$bmw = new Car;
echo $bmw->forward('BMW');
