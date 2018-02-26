<?php

$a= 1;

$b= -5;

$c= 6;


	$delta= ($b * $b) - 4 * $a * $c;

	//pra fazer potencia pode ser: $b^2 ou pow($b,2)

	$x1 = (-$b + sqrt($delta))  / (2 * $a);

	$x2 = (-$b - sqrt($delta))  / (2 * $a);


print("$x1 \n$x2");