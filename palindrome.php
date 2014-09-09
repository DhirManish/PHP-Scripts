<?php
	
	for ($i = 1; $i <= 100000; $i++)
	{
		$num = $i;
		
		$n = 0;
		$ii = strlen($num) - 1;
		
		while ($num > 1) 
		{
			$r = $num % 10;
			$n += $r * pow(10, $ii--);
			$num /= 10;
		}
		
		if ($n == $i)
			echo $i . " ";
	}
	
?>
