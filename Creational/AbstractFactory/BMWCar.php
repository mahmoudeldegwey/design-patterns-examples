<?php 

namespace Creational\AbstractFactory;

/**
 * 
 */
class BMWCar implements CarInterface
{
	private $price;

	function __construct($price)
	{
		$this->price = $price;
	}

	public function calcPrice(){
		return $this->price + 120000;
	}

}