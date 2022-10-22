<?php 
namespace Creational\FactoryMethod;

abstract class Dialog{

	abstract public function createButton() : ButtonInferface;

	public function render(){
		return $this->createButton();
	}

}