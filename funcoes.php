<?php

function mensagem($n1, $n2){

	echo "Boa tarde $nome que tem $idade";
}

mensagem("Emanuel", 24);
?>
<br>
1) Faça um programa, com uma função que necessite de três argumentos, e que forneça a soma desses três argumentos<br>

<?php
function soma($n1, $n2, $n3){
	echo $n1+$n2+$n3;
}

soma(3,9,9);

?>
<br>

2) Faça um programa, com uma função que necessite de um argumento. A função retorna o valor de caractere ‘P’, se seu argumento for positivo, e ‘N’, se seu argumento for zero ou negativo

3) Faça um programa com uma função chamada somaImposto. A função possui dois parâmetros formais: taxaImposto, que é a quantia de imposto sobre vendas expressa em porcentagem e custo, que é o custo de um item antes do imposto. A função “altera” o valor de custo para incluir o imposto sobre vendas.