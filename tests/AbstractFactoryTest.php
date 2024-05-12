<?php

namespace tests;


use App\AbstractFactory\BMWCar;
use App\AbstractFactory\CarAbstractFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testCanCreateBMWCar()
    {

        $carFactory = new CarAbstractFactory(200000);

        $bmw = $carFactory->createBMWCar()->calculatePrice();
      return $this->assertEquals(350000,$bmw);
    }

    public function testCanCreateBenzCar()
    {
        $carFactory = new CarAbstractFactory(100000);
        $benz = $carFactory->createBenzCar()->calculatePrice();
        return $this->assertEquals(320000, $benz);
    }

    public function testCreateBMWInstanceOfCarAbstractFactory()
    {
       $carFactory = new CarAbstractFactory(10000);
       $bwm = $carFactory->createBMWCar();

       return $this->assertInstanceOf(BMWCar::class, $bwm, 'Yes Instance Of');
    }

}