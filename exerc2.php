<?php

print("informe código de origem:\n");
$codigo= fgets(STDIN);

print("Informe o preço: \n");
$preco= fgets(STDIN);

switch ($codigo) {
	case 1:
		print(" sul - $preco");
	break;

    case 2:
		print(" Norte - $preco");
	break;

	case 3:
		print(" Nordeste - $preco");
	break;

	case 4:
	case 5:
	case 6:
		print(" Sudeste - $preco");
	break;

	case 7:
	case 8:
	case 9:
		print(" Centro-oeste - $preco");
	break;
	
	default:
		echo "Produto Importado";
	break;
}


