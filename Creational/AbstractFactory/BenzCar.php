<?php 

namespace Creational\AbstractFactory;

/**
 * 
 */
class BenzCar implements CarInterface
{
	private $price;
	private $tax;


	function __construct($price,$tax)
	{
		$this->price = $price;
		$this->tax = $tax;
	}

	public function calcPrice(){
		return $this->price + $this->tax + 200000;
	}

}