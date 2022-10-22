<?php 
namespace Creational\FactoryMethod;

class WindowsButton implements ButtonInferface{
	public function showText() : string{
		return "Html Button related to Web";
	}
}