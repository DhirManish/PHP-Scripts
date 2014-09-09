<?php

function isPrime($n)
{
	for ($i = 2; $i <= sqrt($n); $i++)
		if ($n % $i == 0)
			return false;
	
	return true;
}

if (isPrime($_GET["n"]))
	echo $_GET["n"] . " is prime";
else
	echo $_GET["n"] . " is not prime";
?>
