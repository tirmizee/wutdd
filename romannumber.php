<?php 
	/**
	*  
	*/
	class Romannumber 
	{
		
		public function convert($number)
		{	
			$result="";
			
			$r1="I";
			$r5="V";
			$r10="X";
			$r50="L";
			$r100="C";
			
			$total = $number;

			if($number%100==0){
				$result+=$r100;
				$total = $number - 100;
			}
			while ($total > 0) {
				if($total%50==0){
					$result+=$r50;
					$total = $number - 50;
				}
				else if($total%10==0){
					$result+=$r10;
					$total = $number - 10;
				}

			}
			
			if($total%1==0){
				$result+=$r1;
				$total = $number-1;
			}
			return $result;	
		}
		
	}
$bar = new Romannumber();
echo $bar->convert(25);

 ?>