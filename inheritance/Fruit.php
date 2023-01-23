<?php


class Fruit
{
    public $type = 'Fruit';

}

class Apple extends Fruit {
    public $name = 'Apple';
}

$apple = new Apple();
echo $apple->type;