<?php 

namespace Creational\AbstractFactory;

//use Creational\AbstractFactory\CarInterface;
/**
 * 
 */
class CarAbstractFactory
{
	private $tax = 100000;
	private $price;

	function __construct($price)
	{
		$this->price = $price;
	}

	public function createBmwCar() : BMWCar{
		return new BMWCar($this->price);
	}

	public function createBenzCar() : BenzCar{
		return new BenzCar($this->price,$this->tax);
	}

}