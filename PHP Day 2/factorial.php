<?php

$number = 4;
$factorial = 1;
$i=1;

for($i=$number; $i >= 1; $i--) 
{
	$factorial *= $i;
}

echo "Factorial of Number $number is $factorial.";
?>