<?php

class Car
{

    // Properties
    public $color = ' ';                  /* Here 'public' keyword is called an access modifier */
    public $doors = 0;

    // methods
    function forward($car_name = 'default')
    {
        return "$this->doors doors $this->color $car_name is moving forward.<br>";
    }

    function backward($car_name = 'default')
    {
        return "$this->doors doors $this->color $car_name is moving reverse.<br>";
    }

    // magic_method : It will execute last of all methods without calling it.
    // function __destruct()
    // {
    //     echo "Magic destruction.<br>";
    // }

    // magic_method : It will execute first of all methods without calling it.
    function __construct($given_color, $given_doors = 4)
    {
        $this->color = $given_color;
        $this->doors = $given_doors;
    }
}

$audi = new Car('Yellow');
echo $audi->forward('AUDI');

$honda = new Car('Redgreen');
echo $honda->backward('HONDA');

$bmw = new Car('Orange', 2);
echo $bmw->backward('BMW');
