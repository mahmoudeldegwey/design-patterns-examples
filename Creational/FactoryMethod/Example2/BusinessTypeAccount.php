<?php 
namespace Creational\FactoryMethod\Example2;

class BusinessTypeAccount extends AccountAbstract
{
	public function createAccount() : BankAccountInterface{
		return new BusinessAccount();
	}
}