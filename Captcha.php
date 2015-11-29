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
				$result = "";
				switch ($this->right_operand) {
					case 1:$result = "one";break;
					case 2:$result = "two";break;
					case 3:$result = "three";break;
					case 4:$result = "four";break;
					case 5:$result = "five";break;
				}
				return $result;
			}
		}
	}




 ?>