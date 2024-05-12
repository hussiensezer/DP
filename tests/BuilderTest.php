<?php

namespace tests;

use App\Builders\Models\BenzCar;
use App\Builders\BenzCarBuilder;
use App\Builders\BMWCarBuilder;
use App\Builders\CarProducer;
use App\Builders\Models\BMWCar;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    public function testProduceBMWCar()
    {
       $BMWCar = new BMWCarBuilder();
       $carProducer = new CarProducer($BMWCar);
       $myCar = $carProducer->ProduceCar();

       $this->assertInstanceOf(BMWCar::class,$myCar);
    }

    public function testProduceBenzCar()
    {
        $BenzCar = new BenzCarBuilder();
        $carProducer = new CarProducer($BenzCar);
        $myCar = $carProducer->ProduceCar();

        $this->assertInstanceOf(BenzCar::class,$myCar);
    }
}