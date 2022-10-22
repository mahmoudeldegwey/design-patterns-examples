<?php 
namespace Creational\Builder;

use Creational\Builder\Models\BMWCar;

class BMWCarBuilder implements CarBuilderInterface  {

	private $type;

	public function createCar(){
		$this->type = new BMWCar();
	}

	public function addEngine(){
		$this->type->setPart('ENGINE','bmw-engine');
	}

	public function addDoors(){
		$this->type->setPart('Door','bmw-door');
	}
	
	public function addBody(){
		$this->type->setPart('Body','bmw-body');
	}
	
	public function addWheel(){
		$this->type->setPart('WHEEL','bmw-wheel');
	}

	public function getCar(){
		return $this->type;
	}

}