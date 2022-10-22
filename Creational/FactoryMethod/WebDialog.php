<?php 
namespace Creational\FactoryMethod;

class WebDialog extends Dialog{

	public function createButton() : ButtonInferface{
		return new WebButton();
	}

}