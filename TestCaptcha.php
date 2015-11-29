<?php 
	/**
	* 
	*/
	class TestCaptcha extends PHPUnit_Framework_TestCase{
		public function testSetRightOperandPattern1With5reternFive(){
			$c = new Captcha();
			$c->setPattern(1);
			$c->setRightOperand(5);
			$this->assertEquals('five',$c->getRightOperand());
		}


	}


 ?>