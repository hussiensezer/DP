<?php

namespace App\AbstractFactory;

class BenzCar implements CarInterface
{
    private int $price;
    private int $tax;
    public function __construct(int $price, int $tax)
    {
        $this->price = $price;
        $this->tax = $tax;
    }

    public function calculatePrice(): int
    {
        return $this->price + $this->tax + 120000;
    }
}