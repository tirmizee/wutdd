<?php 
	/**
	* 
	*/
	class Captcha 
	{
		private $pattern;
		private $right_operand;
		private $left_operand;
		private $operator;
		private $res;
		public function setPattern($pattern){

			$this->pattern=$pattern;
		}

		public function setRightOperand($number){
			$this->right_operand = $number;

		}
		public function setLeftOperand($number){
			$this->left_operand = $number;
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
				$this->right_operand=$result[$this->right_operand];
				return $this->right_operand;
			}else 
				return $this->right_operand;
		}
		public function setOperator($op){
			if($op==1)
				$this->operator='+';
			elseif($op==2)$this->operator='-';

		}
		public function getQuestion(){
			if($this->pattern == 1 )
				$this->res = $this->left_operand." ".$this->operator." ".$this->right_operand." = ?";
			return $this->res;
		}
			
		public function getLeftOperand(){
			if ($this->pattern == 1) {
				
				
				return $this->left_operand;

			}
			else{
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
				
				return $result[$this->left_operand];
			
			}
		}
	}




 ?>