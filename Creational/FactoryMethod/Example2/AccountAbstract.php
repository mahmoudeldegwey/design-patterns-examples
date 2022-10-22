<?php 
namespace Creational\FactoryMethod\Example2;

abstract class AccountAbstract{
	abstract function createAccount() : BankAccountInterface;

	public function render(){
		return $this->createAccount();
	}
}