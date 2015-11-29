<?php 
	/**
	* 
	*/
	class Captcha 
	{
		private $pattern;
		private $right_operand;
		public function setPattern($pattern){

			$this->pattern=$pattern;
		}

		public function setRightOperand($number){
			$this->right_operand = $number;

		}
		public function getRightOperand(){
			if ($this->pattern == 1) {
				$result = array(0 => 'zero' ,
								1 => 'one' ,
								2 => 'two' ,
								3 => 'three' ,
								4 => 'four' ,
								5 => 'five' ,
								6 => 'six' ,
								7 => 'seven' ,
								8 => 'eight' ,
								9 => 'nine' ,
								10 => 'ten' );
				
				return $result[$this->right_operand];
			}
		}
	}




 ?>