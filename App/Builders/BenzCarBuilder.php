<?php

namespace App\Builders;

use App\Builders\Models\BenzCar;
use App\Builders\Models\Car;

class BenzCarBuilder implements CarBuilderInterface
{
    private Car $car;
    public function createCar()
    {
       $this->car = new BenzCar();
    }

    public function addEngine()
    {
        $this->car->setPart('ENGINE', 'BENZ-engine');
    }

    public function addDoors()
    {
        $this->car->setPart('DOORS', 'BENZ-doors');
    }

    public function addBody()
    {
        $this->car->setPart('BODY', 'BENZ-body');
    }

    public function addWheels()
    {
        $this->car->setPart('WHEELS', 'BENZ-wheels');
    }

    public function getCar() :Car
    {
        return $this->car;
    }
}