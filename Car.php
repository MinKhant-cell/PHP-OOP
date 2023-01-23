<?php

class Car
{
    public $brand = 'T001';
    protected $model = 'Tesla';
    private $private_key = '#01@3&*3';

    public function getPrivateKey(){
        return $this->private_key;
    }
    public function setPrivateKey($privateKey){
        return $this->private_key = $privateKey;
    }
}

$car = new Car();
$car->setPrivateKey('######');
echo $car->getPrivateKey();