<?php
	$num = $_GET["n"];
	
	$n = 0;
	$i = strlen($num) - 1;
	
	while ($num > 1) 
	{
		$r = $num % 10;
		$n += $r * pow(10, $i--);
		$num /= 10;
	}
	
	echo $n;
?>
