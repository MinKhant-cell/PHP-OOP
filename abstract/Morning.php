<?php


abstract class Morning
{
    abstract public function greet();
}

class Greeting extends Morning
{

    public function greet()
    {
        return 'Hello good morning';
    }
}

$greet = new Greeting();
echo $greet->greet();