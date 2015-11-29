<?php 
	/*
	pattern 1
	3+ three

	pattern 2
	six -  7
	*/
	class TestCaptcha extends PHPUnit_Framework_TestCase{
		public function testSetRightOperandPattern1With5reternFive(){
			$c = new Captcha();
			$c->setPattern(1);
			$c->setRightOperand(1);
			$this->assertEquals('one',$c->getRightOperand());
		}
		public function testLeftOperandPattern1With3Return3(){
			$c = new Captcha();
			$c->setPattern(1);
			$c->setLeftOperand(1);
			$this->assertEquals(1,$c->getLeftOperand());

		}
		public function testLeftOperandPattern2With6ReturnSix(){
			$c = new Captcha();
			$c->setPattern(2);
			$c->setLeftOperand(6);
			$this->assertEquals('six',$c->getLeftOperand());

		}
		public function testLeftOperandPattern2With7Return7(){
			$c = new Captcha();
			$c->setPattern(2);
			$c->setRightOperand(7);
			$this->assertEquals(7,$c->getRightOperand());

		}
		public function testQuestionPattern1(){
			$c = new Captcha();
			$c->setPattern(1);
			$c->setLeftOperand(1);
			$c->setOperator(1);
			$c->setRightOperand(1);

			$this->assertEquals("1 + one = ?",$c->getQuestion());

		}



	}


 ?>