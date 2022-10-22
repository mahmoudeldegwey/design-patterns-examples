<?php 
namespace Creational\FactoryMethod;

class WebButton implements ButtonInferface{
	public function showText() : string{
		return "Html Button related to Web"
	}
}