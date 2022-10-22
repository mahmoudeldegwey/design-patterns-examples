<?php 
namespace Creational\FactoryMethod;

class WindowsDialog extends Dialog{
	public function createButton() : ButtonInferface{
		return new WindowsButton();
	}
}