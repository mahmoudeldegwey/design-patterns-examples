<?php 
namespace Tests;

use PHPUnit\Framework\TestCase;
use Creational\AbstractFactory\CarAbstractFactory;
use Creational\AbstractFactory\BMWCar;
use Creational\AbstractFactory\BenzCar;

class AbstractFactoryTest extends TestCase {

	//private $carFactory;

	// protected function setUp(){
	// 	parent::setUp();

	// 	//$careFactory = new CarAbstractFactory();
	// }

	public function  testCanCreateBMWCare(){
		$carFactory = new CarAbstractFactory(200000);
		$myCar = $carFactory->createBmwCar();
		$this->assertInstanceOf(BMWCar::class, $myCar);
	}

	public function  testCanCreateBenzCare(){
		$carFactory = new CarAbstractFactory(200000);
		$myCar = $carFactory->createBenzCar();
		$this->assertInstanceOf(BenzCar::class, $myCar);
	}

}