<?php

/* Inheritance - One of the major pillars of OOP */

class Car
{
    # Properties

    private $color = '';

    function __construct($given_color)
    {
        $this->color = $given_color;
    }

    // methods
    function forward()
    {
        return "$this->color is moving forwards<br>";
    }

    function backward()
    {
        return "$this->color is moving reverse<br>";
    }
}

#Tesla object

class Tesla extends Car    /* Child class of 'Car */
{
    function flying()
    {
        return " Tesla can fly!<br>";
    }

    function backward()   /* This is called method overriding */
    {
        return " is moving backwards<br>";
    }
}

$tesla = new Tesla('Orange');
echo $tesla->backward();
echo $tesla->forward();

#TeslaBd object

class TeslaBd extends Tesla
{
}

$teslabd = new TeslaBd('Blue');
echo $teslabd->flying();
echo $teslabd->forward();
