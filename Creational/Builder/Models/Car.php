<?php 
namespace Creational\Builder\Models;

class Car {
	private $data = [];

	public function setPart($name,$value){
		$this->data[$name] = $value;
	}
}