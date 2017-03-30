<?php

/*
calculator.php

flexCALCULATOR

Coded by flext0r © 2017

*/
require './system/languages/polish.php';
class Calculator
{
	protected $db;
	
	public function __construct($connection)
	{
		//$this->db = $connection;
	}
	
	public function Silnia($N)
	{
		$return = null;
		if(empty($N))
		{
			$return = $GLOBALS['emptyForm'];
		}elseif(!is_numeric($N))
		{
			$return = $Nnumeric;
		}else{
			if($N == 0)
			{
				$return = $GLOBALS['silniaValue1'];
			}else{
					$silnia = 1;
					for($i = 1; $i<=$N; $i++)
					{
						$silnia = $silnia*$i;
					}
					$return = $GLOBALS['silniaValue'].$silnia;
			}
		}
		return $return;
	}
	
	public function Delta($A,$B,$C)
	{
		$return = null;
		if($A == '' OR $B == '' OR $C == '')
		{
			$return = $GLOBALS['emptyForm'];
		}else{
			$oblicz = $B*$B-4*$A*$C;
			if($oblicz < 0)
			{
				$return = $GLOBALS['NoSolution'];
			}else{
				if($oblicz == 0)
				{
					$x0 = -$B/(2*$A);
					$return = 'X0 = '.$x0;
			}else{
					$x1 = (-$B-sqrt($oblicz))/(2*$A);
					$x2 = (-$B+sqrt($oblicz))/(2*$A);
					$return = 'X1 = '.$x1.'<br>X2 = '.$x2;
				
				}
			}
		}
		return $return;
	}
	
	public function Spalanie($length,$average,$price)
	{
		$return = null;
		if(empty($length) OR empty($average) OR empty($price))
		{
			$return = $GLOBALS['emptyForm'];
		}elseif(!is_numeric($length) OR !is_numeric($average) OR !is_numeric($price))
		{
			$return = $GLOBALS['NumericFuel'];
		}else{
			$action = $average/100*$length*$price;// koszt paliwa na daną ilość kilometrów znając średnią spalania na 100km.
			$return = $GLOBALS['FuelPrice'].$length.$GLOBALS['FuelPrice2'].$action." zł";
		}
		return $return;
		
	}
			
	
}




?>