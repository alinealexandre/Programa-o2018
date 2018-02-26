Revisão Lógica da Programação - Aula 3:

1) If, else: 

	if(condição){
		//instrução
	}

* Se a condição for verdadeira executa as intruções.

	
	if(condição){
		//instrução do verdadeiro
	}else {
		//intrução do falso
	}

* Se a condição for verdadeira executa as intruções do verdadeiro, caso não, instrução do falso.

	
	if(condição){
		//instrução 1 (gigante);
	}elseif {
		//intrução 2 (alto);
	}else{
		//instrução 3 (baixo);

	}

* Usamos elseif quando mais de uma condição é/pode ser verdadeira.

-Encontra um cara verdadeiro ele não testa o resto, sempre iniciar com a maior condição.

2) Operador Ternário

3) Seleção de Múltipla Escolha:
	
	-Switch ($opcao){
		case 'arroz':
			echo 'Vc tem um péssimo gosto';
		break;

		case 'batata'
			echo 'ola batata é bom';
		break;
}

	-Break: permite vc parar o teste na primeira condição verdadeira.

4)Repetĩções 

4.1- While: so executa quando a descrição é verdadeira.

	$numero= 0;
		
	*	while($numero < 3){
			echo $numero
			$numero= $numero + 1;
		}


	*	while($numero != 0){
			$numero= fgets(STDIN);
			echo "erou"
		}

	- Executa até o número informado ser 0.