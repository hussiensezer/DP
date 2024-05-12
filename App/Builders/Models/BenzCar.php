<?php

namespace App\Builders\Models;



class BenzCar extends Car
{
    private array $data = [];

    public function setPart($name,$value): void
    {
        $this->data[$name] = $value;
    }
   
}