<?php
require_once 'Bank.php';

class Bar
{
    use Bank;
}

$obj = new Bar;
$obj->abc();
$obj->xyz();
