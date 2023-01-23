<?php


class Test
{
    public function __construct($param)
    {
        echo $param;
    }
    public function __destruct()
    {
        echo 'I am destructor';
    }
}
$test = new Test("Constructor");

