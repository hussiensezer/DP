<?php

namespace App\AbstractFactory;

class BMWCar implements CarInterface
{
    private int $price;
    public function __construct(int $price)
    {
       $this->price = $price;
    }
    public function calculatePrice(): int
    {
        return $this->price + 150000;
    }
}