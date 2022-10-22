<?php 
namespace Creational\FactoryMethod\Example2;

class PersonalTypeAccount extends AccountAbstract
{
	public function createAccount() : BankAccountInterface{
		return new PersonalAccount();
	}
}