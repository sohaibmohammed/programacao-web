<?php

$valor_de_pi = pi();

echo "A função pi() ... retorna o valor da constante pi até a 13ª casa decimal.<br>";
echo $valor_de_pi."<hr>";

echo "A função abs() retona o valor absoluto de um valor numerico.<br>";
$negativo = -9;
$fracao = -3.6;
echo "Valor original: ".$negativo." Valor absoluto: ".abs($negativo)."<br>";
echo "Valor original: ".$fracao." Valor absoluto: ".abs($fracao)."<hr>";

echo "A função rand() retorna um numero inteiro, aleatório, entre 0 e o valor retornado pela função getrandmax()<br>";
$maximo = getrandmax();
echo "Maior numero inteiro possível nesse SO é: ".$maximo."<br>";
echo "E o aleatório entre 0 e ".$maximo." é: ".rand()."<br>";

echo "Outra aplicação de rand() é retornar um numero inteiro, aleatório, no o intervalo determinado.<br>";

echo "Aqui entre -1 e 1: ".rand(-1,1);


?>