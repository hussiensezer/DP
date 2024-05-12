<?php

namespace App\Builders;

use App\Builders\Models\BMWCar;
use App\Builders\Models\Car;

class BMWCarBuilder implements CarBuilderInterface
{

    private Car $car;
    public function createCar()
    {
        $this->car = new BMWCar();
    }

    public function addEngine()
    {
        $this->car->setPart('ENGINE', 'BMW-engine');
    }

    public function addDoors()
    {
        $this->car->setPart('DOORS', 'BMW-doors');
    }

    public function addBody()
    {
        $this->car->setPart('BODY', 'BMW-body');
    }

    public function addWheels()
    {
        $this->car->setPart('WHEELS', 'BMW-wheels');
    }

    public function getCar() :Car
    {
        return $this->car;
    }
}