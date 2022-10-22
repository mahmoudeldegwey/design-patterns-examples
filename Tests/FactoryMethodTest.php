<?php 
namespace Tests;

use PHPUnit\Framework\TestCase;
use Creational\FactoryMethod\{WindowsDialog,Dialog,WindowsButton};
use Creational\FactoryMethod\Example2\{AccountAbstract,PersonalTypeAccount,PersonalAccount};

class FactoryMethodTest extends TestCase {

	public function clientCode(Dialog $dialog){
		return $dialog->render();
	}

	public function bankAccount(AccountAbstract $dialog){
		return $dialog->render();
	}

	public function  testWindowsDialog(){
		
		$windowDialog = new WindowsDialog();

		$dialog = $this->clientCode($windowDialog);

		$this->assertInstanceOf(WindowsButton::class, $dialog);
	}

	public function testBankAccountPersonalType(){

		$personalType = new PersonalTypeAccount();

		$account = $this->bankAccount($personalType);
		
		$this->assertInstanceOf(PersonalAccount::class, $account);

	}

}