<?php 
	/**
	* 
	*/
	class Fizz 
	{
		private $number;

		function __construct($num)
		{
			$this->number=$num;
		}
		public function getNumber(){
			return $this->number;
		} 
		public function calculateNumber(){
			$result="";
			if($this->number%3==0)
				 $result="Fizz";
			else if($this->number%5==0)
				$result="Buzz";
			else if($this->number%15==0)
				$result="FizzBuzz";
			else $result=$this->number;

			return $result;


		}
	}

 ?>