<?php

namespace App\Builders\Models;

use App\Builders\CarBuilderInterface;

class BMWCar extends Car
{

    private array $data = [];

    public function setPart($name,$value): void
    {
        $this->data[$name] = $value;
    }
}