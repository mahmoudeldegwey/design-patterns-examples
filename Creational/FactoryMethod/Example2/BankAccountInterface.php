<?php 
namespace Creational\FactoryMethod\Example2;

interface BankAccountInterface{
	public function validateUserIdentity();
	public function registerAccount();
}