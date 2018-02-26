<?php
$numSorteado = rand(1,1);

print("Informe um número de 1 a 10:");
$num=fgets(STDIN);

$i=1;

while($num!=$numSorteado){
	print("Perdeu \n");

	if($numSorteado<$num){
		print("Número menor que $num \n");

	}else{
		print("Número maior que $num \n");
	}

	$i++;

	print("Again:");
	$num=fgets(STDIN);

}	
	print("Venceu o jogo \n");
	print("Você tentou $i vez(es) :)");