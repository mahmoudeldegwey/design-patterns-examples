<?php 
namespace Creational\Builder;

use Creational\Builder\CarBuilderInterface;

class CarProducer {
	
	private $builder ;

	public function __construct(CarBuilderInterface $builder){
		$this->builder = $builder;
	}

	public function produceCar(){
		$this->builder->createCar();
		$this->builder->addEngine();
		$this->builder->addDoors();
		$this->builder->addBody();
		$this->builder->addWheel();

		return $this->builder->getCar();
	}
}