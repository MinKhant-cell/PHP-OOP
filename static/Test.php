<?php


class Test
{
    public static $name = 'John';
    public static function greet(){
        echo 'Hello, '.self::$name; //static function မှာ $this အလုပ်မလုပ်ပါ self***
    }
}
Test::greet();