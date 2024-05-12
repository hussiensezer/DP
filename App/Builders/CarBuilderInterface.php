<?php

namespace App\Builders;

use App\Builders\Models\Car;

interface CarBuilderInterface
{
    public function createCar();
    public function addEngine();

    public function addDoors();

    public function addBody();

    public function addWheels();

    public function getCar() :Car;
}