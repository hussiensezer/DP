<?php

namespace App\Builders;

class CarProducer
{
    private CarBuilderInterface $builder;

    public function __construct(CarBuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    public function ProduceCar(): Models\Car
    {
            $this->builder->createCar();
            $this->builder->addBody();
            $this->builder->addDoors();
            $this->builder->addEngine();
    return    $this->builder->getCar();

    }
}