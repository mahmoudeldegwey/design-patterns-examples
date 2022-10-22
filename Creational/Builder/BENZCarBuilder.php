<?php 
namespace Creational\Builder;

use Creational\Builder\Models\BENZCar;

class BENZCarBuilder implements CarBuilderInterface {

	private $type;

	public function createCar(){
		$this->type = new BENZCar();
	}

	public function addEngine(){
		$this->type->setPart('ENGINE','engine');
	}

	public function addDoors(){
		$this->type->setPart('Door','door');
	}
	
	public function addBody(){
		$this->type->setPart('Body','body');
	}
	
	public function addWheel(){
		$this->type->setPart('WHEEL','wheel');
	}

	public function getCar(){
		return $this->type;
	}

}