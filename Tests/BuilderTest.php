<?php 
namespace Tests;

use PHPUnit\Framework\TestCase;
use Creational\Builder\BMWCarBuilder;
use Creational\Builder\BENZCarBuilder;
use Creational\Builder\CarProducer;

use Creational\Builder\Models\BMWCar;
use Creational\Builder\Models\BenzCar;

class BuilderTest extends TestCase {

	//private $carFactory;

	// protected function setUp(){
	// 	parent::setUp();

	// 	//$careFactory = new CarAbstractFactory();
	// }

	public function  testProduceBMWCare(){
		$bmwBuilderCar = new BMWCarBuilder();
		$carProducer = new CarProducer($bmwBuilderCar);
		$myCar = $carProducer->produceCar();
		$this->assertInstanceOf(BMWCar::class,$myCar);	
	}

	public function  testProduceBenzCare(){
		$benzBuilderCar = new BENZCarBuilder();
		$carProducer = new CarProducer($benzBuilderCar);
		$myCar = $carProducer->produceCar();
		$this->assertInstanceOf(BenzCar::class,$myCar);	
	}

}