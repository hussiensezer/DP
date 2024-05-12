<?php

namespace App\AbstractFactory;

class CarAbstractFactory
{
    private int $price;
    private int $tax = 100000;

    public function __construct(int $price)
    {
        $this->price = $price;
    }

    public function createBMWCar() :BMWCar
    {
        return new BMWCar($this->price);
    }

    public function createBenzCar() :BenzCar
    {
        return new BenzCar($this->price, $this->tax);
    }
}